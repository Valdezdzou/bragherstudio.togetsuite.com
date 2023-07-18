<?php 
    
    use Phppot\DataSource;
    include_once('../../../functions/fpdf/fpdf.php');

    require_once "../../../functions/config.php";

    class myPDF extends FPDF {

        function header(){
           
            $fa_code = $_GET['fa_code'];

            $this->ln(-6);
            
            $this->Image('../../../assets/img/logo_facture.png',10,6,40);
            
            $this->ln(20);

            $this->SetFont('Arial','B',15);
            $this->Cell(58,5,"FACTURE # $fa_code", 0,0,'R');
            
            $this->ln(10);
            
        }
        
        function footer (){
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
            
            $this->Cell(70,5,'TOGETSUITE APPLICATION', 0,0,'C');
            $this->Cell(40,5,'Powered By TogetTech - 2021', 0,0,'R');
        }

        function headerTable(){
            $this->SetFont('Arial','B',10);
            $this->Cell(95,9,iconv('UTF-8','ISO-8859-2','Ref.'), 1,0,'L');
            $this->Cell(15,9,iconv('UTF-8','ISO-8859-2','Qté.'), 1,0,'C');
            $this->Cell(20,9,iconv('UTF-8','ISO-8859-2','P.U.'), 1,0,'C');
            $this->ln();
            
        }

        function viewTable($bdd){
            $this->SetFont('Arial','',7);
                require_once "../../../functions/config.php";
                $fa_code = $_GET['fa_code'];

                $stmt = $bdd->query("SELECT
                                        pr_designation, 
                                        SUM(pr_prix_vente*fa_quantite) as prix_total_vente, 
                                        SUM(fa_quantite) as quantite_total_vente,
                                        pr_prix_vente
                                    FROM 
                                        tsb_factures 
                                    WHERE 
                                        fa_code=$fa_code 
                                    GROUP BY 
                                        pr_designation,
                                        pr_prix_vente");
                
                while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $this->SetFont('Arial','',10);
                    $this->Cell(95,7,$data->pr_designation, 1,0,'L');
                    $this->Cell(15,7,$data->quantite_total_vente, 1,0,'C');
                    $this->Cell(20,7,$data->pr_prix_vente, 1,0,'C');

                    $this->ln();
                }
            
        }

        function footerFacture($bdd){
            $this->ln(5);

            //require_once "../../../functions/config.php";
            $fa_code = $_GET['fa_code'];

            $stmt = $bdd->query("SELECT
                                    SUM(pr_prix_vente * fa_quantite) AS total_pay
                                FROM 
                                    tsb_factures
                                WHERE
                                    fa_status='Pay'
                                AND     
                                    fa_code=$fa_code");

            while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
                $total_pay = $data->total_pay;
            }


            $this->SetFont('Arial','B',12);
            $this->Cell(95,6,iconv('UTF-8','ISO-8859-2','Montant (Franc CFA)'), 1,0,'L');
            $this->Cell(35,6,"$total_pay XAF", 1,0,'R');
            $this->ln();
            
        }

        
        
    }

    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('P','A5',0);
    //$title = 'FACTURE / INVOICE';
    //$pdf->SetTitle($title);


    //$pdf->enTete();

    $pdf->headerTable();
    $pdf->viewTable($bdd);

    $pdf->footerFacture($bdd);

    $file = 'facturebar.pdf';

    $pdf->Output();