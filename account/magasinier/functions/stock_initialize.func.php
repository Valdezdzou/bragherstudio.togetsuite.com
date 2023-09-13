<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save'])) {
    

        $pr_id_fk = $_POST['pr_id_fk'];
        $st_date = $_POST['st_date'];
        $st_id = $_POST['st_id'];
        $fo_id = $_POST['fo_id'];
       

    
        for ($i=0;$i<count($st_id);$i++) {
           
                $sql = "UPDATE tsb_stocks SET stc_quantite = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([0, $pr_id_fk[$i]]);


                $sql = "UPDATE tsb_stocks SET st_quantite = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([0, $pr_id_fk[$i]]);

                $sql = "UPDATE tsb_stocks SET stc_quantite = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([0, $pr_id_fk[$i]]);
                
                $sql = "UPDATE tsb_stocks SET st_status = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute(["magasin", $pr_id_fk[$i]]);

                $sql = "UPDATE tsb_stocks SET st_prix_achat = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([0, $pr_id_fk[$i]]);
                
      
                $sql = "UPDATE tsb_stocks SET st_date = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$st_date[$i], $pr_id_fk[$i]]);


                $sql = "UPDATE tsb_stocks SET fo_id = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([3, $pr_id_fk[$i]]);

               
              
                header("Location: ../pages/bar_etat_stock_magasin.php");
               
           
            
        }
    } 
?>





