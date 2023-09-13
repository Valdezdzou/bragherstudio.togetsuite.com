<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save'])) {
    
        
        $pr_id_fk = $_POST['pr_id'];
        $pr_id = $_POST['pr_id'];
        $st_id = $_POST['st_id'];
        $fo_id = $_POST['fo_id'];
        $volume = $_POST['volume'];
        $st_quantite = $_POST['st_quantite'];
        $st_prix_achat = $_POST['st_prix_achat'];
        $st_quantite_add = $_POST['st_quantite_add'];
        $st_date = $_POST['st_date'];
   
       
       
        for ($i=0;$i<count($st_id);$i++) {

          if (! empty($st_quantite_add[$i])){

    
          
                 $stmt = $bdd->prepare('INSERT INTO tsb_historique_stocks (st_id_1, pr_id_fk, fo_id, st_quantite, stc_quantite, st_status, stc_quantite_vente, st_prix_achat, stc_quantite_add)
                 SELECT st_id, pr_id_fk, fo_id, st_quantite, stc_quantite, st_status, stc_quantite_vente, st_prix_achat, :add
                 FROM tsb_stocks
                 WHERE st_id = :st_id');


                $stmt->bindParam(':st_id', $st_id[$i]);
                $stmt->bindValue(':add', (int)$st_quantite_add[$i]);

                // Assignation des valeurs des paramètres
            
                $stmt->execute();

                // $sql = "UPDATE tsb_historique_stocks SET stc_quantite_add = ? WHERE pr_id_fk = ?";
                // $bdd->prepare($sql)->execute([(int)$st_quantite_add[$i], $pr_id_fk[$i]]);
          
           
                //Mise à jour des stocks
                $total_add_magasin = ((int)$st_quantite[$i]+ (int)$st_quantite_add[$i]);
                $sql = "UPDATE tsb_stocks SET st_quantite = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$total_add_magasin, $pr_id_fk[$i]]);
                
                //Mise à jour des prix
                $prix_achat_magasin = (int)$st_prix_achat[$i];
                $sql = "UPDATE tsb_stocks SET st_prix_achat = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$prix_achat_magasin, $pr_id_fk[$i]]);

                //Mise à jour du fournisseur
                //$fournisseur = (int)$fo_id[$i];
                //$sql = "UPDATE tsb_stocks SET fo_id = ? WHERE pr_id_fk = ?";
                //$bdd->prepare($sql)->execute([$fournisseur, $pr_id_fk[$i]]);

                //Mise à jour date
                $date = $st_date[$i];
                $sql = "UPDATE tsb_stocks, tsb_ristourne SET st_date = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$date, $pr_id_fk[$i]]);
             
                $sql = "UPDATE tsb_stocks, tsb_ristourne SET st_status = ?  WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute(['magasin', $pr_id_fk[$i]]);
              
              }
                
                //$reste = ((int)$st_quantite[$i]-(int)$stc_quantite_add[$i]);
                //$sql = "UPDATE tsb_stocks SET st_quantite = ? WHERE pr_id_fk = ?";
                //$bdd->prepare($sql)->execute([$reste, $pr_id_fk[$i]]);
                header("Location: ../pages/bar_etat_stock_magasin.php");

             
        }

    

    } 

  

?>
