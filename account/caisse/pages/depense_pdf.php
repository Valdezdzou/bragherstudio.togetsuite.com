<?php 
    
    use Phppot\DataSource;
    include_once('../../../functions/fpdf/fpdf.php');

    require_once "../../../functions/config.php";

    class myPDF extends FPDF {

        function header(){
           
            $this->SetFillColor(0,0,255);
            $this->Rect(-2,-1,5,400,'F');

            $date = $_GET['date'];
            $this->ln(-6);
            
            $this->Image('../../../assets/img/logo_facture.png',10,6,40);
            
            $this->ln(20);

            $this->SetFont('Arial','B',15);
            $this->SetFont('Arial','B',12);
            $this->Cell(48,5,"Date: ", 0,0,'R');
            $this->SetTextColor(0,0,255);
            $this->Cell(21,5,"$date", 0,0,'R');
            
            

            $this->ln(10);
            
        }
        
        function footer (){

            /*$pr_designation = $_GET[' pr_designation'];*/
            $this->SetY(-18);
            global $note;
            $this->SetFont('Arial','B',8);
            $ft = $this->GetStringWidth($note)+50;
            $this->Cell($ft,9,$note,0,1,'L');
            $this->ln(-3);
            $this->SetFont('Arial','I',7);
            $this->Cell(30,5,' ', 0,0,'L');
            $this->Image('../../../assets/img/qrcode.png',180,280,10);
            
            $this->ln(5);
            $this->Cell(10,5,iconv('UTF-8','ISO-8859-2','Edité le'), 0,0,'L');
            $this->Cell(15,5,date("m-d-Y"), 0,0,'L');
            $this->Cell(10,5,"par: nom____", 0,0,'L');
            
            $this->Cell(65,5,'TOGETSUITE APPLICATION', 0,0,'C');
            $this->Cell(30,5,'Powered By TogetTech - 2021', 0,0,'R');
        }

        function headerTable(){
            $this->SetFont('Arial','B',10);
            $this->SetDrawColor(0,0,255);
           
            $this->Cell(60,9,iconv('UTF-8','ISO-8859-2','Designation'), 1,0,'L');
            $this->Cell(50,9,iconv('UTF-8','ISO-8859-2','prix vente'), 1,0,'L');
            $this->Cell(17,9,iconv('UTF-8','ISO-8859-2','Quantité'), 1,0,'C');
            $this->Cell(40,9,iconv('UTF-8','ISO-8859-2','valeur'), 1,0,'L');
            $this->ln();
            
        }

        function viewTable($bdd){
            $date = $_GET['date'];
            $this->SetFont('Arial','',7);
                require_once "../../../functions/config.php";

                $req = $bdd->prepare("SELECT pr_designation, pr_prix_vente, quantite, valeur FROM avarie_depense WHERE type = 'depense' AND date = :selectedDate");
                $req->bindParam(':selectedDate', $date);
                $req->execute();
                                    
                
                while ($data = $req->fetch(PDO::FETCH_OBJ)) {
                    $this->SetFont('Arial','',10);
                    $this->Cell(60,7,$data->pr_designation, 1,0,'L');
                    $this->Cell(50,7,$data->pr_prix_vente, 1,0,'L');
                    $this->Cell(17,7,$data-> quantite , 1,0,'C');
                    $this->Cell(40,7,$data->valeur, 1,0,'L');
                    $this->ln();
                }
            
        }
        function footerFacture($bdd){
            $this->ln(5);
            $date = $_GET['date'];
                $req = $bdd->prepare("SELECT
                                    SUM(valeur) AS total_depense
                                FROM 
                                    avarie_depense
                                WHERE
                                    type = 'depense' AND date = :selectedDate");
                $req->bindParam(':selectedDate', $date);
                $req->execute();

            while ($data = $req->fetch(PDO::FETCH_OBJ)) {
                $total_depense = $data->total_depense;
            }


            $this->SetFont('Arial','B',12);
            $this->Cell(70,6,iconv('UTF-8','ISO-8859-2','Depense Total (Franc CFA)'), 1,0,'C');
            $this->SetTextColor(0,0,255);
            $this->Cell(35,6,"$total_depense XAF", 1,0,'R');
            $this->ln();
            
            
        }
    }

    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('P','A4',0);
    //$title = 'FACTURE / INVOICE';
    //$pdf->SetTitle($title);


    //$pdf->enTete();

    $pdf->headerTable();
    $pdf->viewTable($bdd);
    $pdf->footerFacture($bdd);
    $file = 'facturebar.pdf';
    $pdf->Output("");