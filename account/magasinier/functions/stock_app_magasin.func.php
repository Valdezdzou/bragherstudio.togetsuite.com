<?php 

    require_once '../../../functions/config.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        
        $pr_id_fk = $_POST['pr_id'];
        $st_id = $_POST['st_id'];
        $fo_id = $_POST['fo_id'];
        $st_quantite = $_POST['st_quantite'];
        $st_prix_achat = $_POST['pr_prix_vente'];
        $st_quantite_add = $_POST['st_quantite_add'];
        $st_date = $_POST['st_date']; 

                   
        for ($i=0;$i<count($st_id);$i++) {
              
                         $pr_id_fk_val = intval($pr_id_fk[$i]);
                         $st_id_val = intval($st_id[$i]);
                         $fo_id_val = intval($fo_id[$i]);
                         $st_quantite_val = intval( $st_quantite[$i]);
                         $st_prix_achat_val = intval( $st_prix_achat[$i]);
                         $st_quantite_add_val = intval($st_quantite[$i]);

                        $req = $bdd->prepare("INSERT INTO tsb_stocks( 
                            pr_id_fk, 
                            fo_id, 
                            st_quantite, 
                            stc_quantite, 
                            stc_quantite_vente, 
                            st_prix_achat, 
                            st_status, 
                            st_date) 
                                            VALUES(
                                                ?,
                                                ?,
                                                ?,
                                                0,
                                                0,
                                                ?,
                                                'comptoir',
                                                ?)");
                        $req->execute(array(
                            $pr_id_fk_val,
                            $fo_id_val,
                            $st_quantite_add_val,                   
                            $st_prix_achat_val, 
                            $st_date[$i]
                            ));

             header("Location: ../pages/bar_etat_stock.php");

                
            //}
            
        }

 

    } 


?>
