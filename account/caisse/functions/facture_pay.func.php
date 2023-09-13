<?php 

    require_once '../../../functions/config.php';

    
    if (isset($_POST['facture_pay'])) {
        
        //$fa_code = $_POST['fa_code_pay'];
        //$fa_status = 
        $pr_designation = $_POST['pr_designation_pay'];
        $fa_status = $_POST['fa_status_pay'];
        $fa_code = $_POST['fa_code_pay'];

        for ($i=0;$i<count($pr_designation);$i++) {
            //if($st_quantite_add[$i] != 0) {
          
                
                // Stock magasin : updates : st_quantite, st_prix_achat, fo_id, st_date
                //Mise à jour des stocks
                // $fa_status_pay = $fa_status_pay[$i];
                $sql = "UPDATE tsb_factures SET fa_status = ? WHERE fa_code = ?";
                $bdd->prepare($sql)->execute([$fa_status, $fa_code]);

                
                header("Location: ../pages/facture_close.php");

                
            //}
            
        }
    }