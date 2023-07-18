<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save_close_facture'])) {
        
        $fa_code = $_POST['fa_code_pay'];
        $fa_status = $_POST['fa_status_pay'];

        for ($i=0;$i<count($fa_code);$i++) {
            //if($st_quantite_add[$i] != 0) {
                
                // Stock magasin : updates : st_quantite, st_prix_achat, fo_id, st_date
                //Mise à jour des stocks
                $facture_close = $fa_status[$i];
                $sql = "UPDATE tsb_factures SET fa_status = ? WHERE fa_code = ?";
                $bdd->prepare($sql)->execute([$facture_close, $fa_code[$i]]);

                
                header("Location: ../pages/facture_close.php");

                
            //}
            
        }
    }
    
    if (isset($_POST['save_add_facture'])) {
    
        // command add function tsb_facture

        $pr_designation = $_POST['pr_designation_add'];
        $pr_prix_vente = $_POST['pr_prix_vente_add'];
        $fa_quantite = $_POST['fa_quantite_add'];
        $us_name = $_POST['us_name_add'];
        //$fa_client = $_POST['fa_client'];
        //$fa_phone = $_POST['fa_phone'];
        $fa_status = $_POST['fa_status_add'];
        $fa_date = $_POST['fa_date_add'];

        //
        //$fa_code = $_POST['fa_code_add'];

        for ($i=0;$i<count($pr_designation);$i++) {

            if($fa_quantite[$i] != 0) {
                $fa_code[$i] = $_POST['fa_code_add'];
                $fa_phone[$i] = $_POST['fa_phone_add'];
                $fa_client[$i] = $_POST['fa_client_add'];
                $req = $bdd->prepare("INSERT INTO  tsb_factures(
                    fa_code,
                    pr_designation,
                    pr_prix_vente,
                    fa_quantite,
                    us_name,
                    fa_client,
                    fa_phone,
                    fa_status,
                    fa_date) VALUES(?,?,?,?,?,?,?,?,?)");
                $req->execute(array(
                    $fa_code[$i],
                    $pr_designation[$i],
                    $pr_prix_vente[$i],
                    $fa_quantite[$i],
                    $us_name[$i],
                    $fa_client[$i],
                    $fa_phone[$i],
                    $fa_status[$i],
                    $fa_date[$i],
                ));
                //$success = "Commande enregistrée !";
                header("Location: ../pages/facture_open.php");
            }

            // if($count_pr_designation != 0 ) {
            //     //$fa_code = $_POST['fa_code_add'];
            //     $fa_quantite = $_POST['fa_quantite_add'];
            //     $fa_quantite_exist = $_POST['fa_quantite_exist'];

            //     for ($i=0;$i<count($fa_code);$i++) {
            //         //if($st_quantite_add[$i] != 0) {
                        
            //             // Stock magasin : updates : st_quantite, st_prix_achat, fo_id, st_date
            //             //Mise à jour des stocks
            //             $total_fa_quantite = ((int)$fa_quantite_exist[$i]+(int)$fa_quantite[$i]);
            //             $sql = "UPDATE tsb_factures SET fa_quantite = ? WHERE fa_code = ?";
            //             $bdd->prepare($sql)->execute([$total_fa_quantite, $fa_code[$i]]);

                        
            //             header("Location: ../pages/facture_open.php");

                        
            //         //}
                    
            //     }
            // }
        }
       
        

    } 


?>