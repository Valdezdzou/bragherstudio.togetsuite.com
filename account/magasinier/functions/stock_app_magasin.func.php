<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save'])) {
    
        
        $pr_id_fk = $_POST['pr_id'];
        $pr_id = $_POST['pr_id'];
        $st_id = $_POST['st_id'];
        $fo_id = $_POST['fo_id'];
        $st_quantite = $_POST['st_quantite'];
        $st_prix_achat = $_POST['st_prix_achat'];
        $st_quantite_add = $_POST['st_quantite_add'];

        $st_date = $_POST['st_date']; 

        for ($i=0;$i<count($st_id);$i++) {
            //if($st_quantite_add[$i] != 0) {
                
                // Stock magasin : updates : st_quantite, st_prix_achat, fo_id, st_date
                //Mise à jour des stocks
                $total_add_magasin = ((int)$st_quantite[$i]+(int)$st_quantite_add[$i]);

                $sql= "INSERT INTO `tsb_stocks` (`st_id`, `pr_id_fk`, `fo_id`, `st_quantite`, `stc_quantite`, `stc_quantite_vente`, `st_prix_achat`,`st_status`, `st_date`) VALUES
                (?,?,?,?,?,?,?,?)";

                $bdd->prepare($sql)->execute([$st_id[$i], $pr_id_fk[$i], $fo_id[$i], $st_quantite[$i], 0, 0, (int)$st_prix_achat[$i], 'comptoir', $st_date[$i]]);


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
                $sql = "UPDATE tsb_stocks SET st_date = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$date, $pr_id_fk[$i]]);

                //$reste = ((int)$st_quantite[$i]-(int)$stc_quantite_add[$i]);
                //$sql = "UPDATE tsb_stocks SET st_quantite = ? WHERE pr_id_fk = ?";
                //$bdd->prepare($sql)->execute([$reste, $pr_id_fk[$i]]);
                header("Location: ../pages/bar_etat_stock.php");

                
            //}
            
        }

        // for ($i=0;$i<count($pr_id);$i++) {
        //     if($st_quantite[$i] != 0) {
        //         //$fo_id[$i] = $_POST['fo_id'];
        //         //$st_date[$i] = $_POST['st_date'];
        //         $req = $bdd->prepare("INSERT INTO  tsb_stocks_history(
        //             pr_id_fk,
        //             fo_id,
        //             st_quantite,
        //             st_date) VALUES(?,?,?,?)");
        //         $req->execute(array(
        //             $pr_id_fk[$i],
        //             $fo_id[$i],
        //             $st_quantite[$i],
        //             $st_date[$i]
        //         ));
        //         $success = "Commande enregistrée !";
        //         //header("Location: ../pages/bar_etat_stock.php");
        //     }
        // }

    } 


?>
