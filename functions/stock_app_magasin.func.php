<?php 

    require_once '../functions/config.php';
    
    if (isset($_POST['save'])) {
    
        
        $pr_id_fk = $_POST['pr_id'];
        $pr_id = $_POST['pr_id'];
        $st_id = $_POST['st_id'];
        $fo_id = $_POST['fo_id'];
        $st_quantite = $_POST['st_quantite'];
        $st_prix_achat = $_POST['st_prix_achat'];
        $st_quantite_add = $_POST['st_quantite_add'];
        $ristourne_individuel = $_POST['ristourne'];
        $st_date = $_POST['st_date']; 
        

        for ($i=0;$i<count($pr_id);$i++){
            if (isset($_POST['general'])) {

                // foreach ($ristourne_individuel as $index => $value) {
                    //  $ristourne_individuel[$index] = $ristourne;
                //}
            }
        }

       /* $v_ristourne = 0;
        $val = 0;

        foreach (array_combine($st_quantite_add, $ristourne_individuel) as $value1 => $value2) {
            $val = intval($value1) * intval($value2);
            $v_ristourne += $val;
        }*/
        
        $date_ristourne = date('Y-m-d');

        $ristourne = $_POST['ristourne_general'];
        
        for ($i=0;$i<count($pr_id);$i++) {
            if (($st_quantite_add[$i]!= 0) && ($st_prix_achat[$i]!= 0) ) {
                
                $v_ristourne = ((int)$st_quantite_add[$i]*(int)$ristourne_individuel[$i]);
            
                $req = $bdd->prepare("INSERT INTO  ristourne(
                    v_ristourne,
                    st_id,
                    date_ristourne) VALUES(?,?,?)");
                $req->execute(array(
                    (string)$v_ristourne,
                    $st_id[$i],
                    $date_ristourne,
                ));
                $success = "Ristourne enregistrée !";   
            }
           
        }

        
        

        // // Préparation de la requête SQL
        // $sql = "INSERT INTO tsb_ristourne (v_ristourne, st_id, date_ristourne) VALUES ('$v_ristourne', '$st_id', '$date_ristourne')";
        // $req = $bdd->prepare($sql);

        // // Exécution de la requête avec les valeurs des paramètres
        // $req->execute(array(
        //     'v_ristourne' => $v_ristourne,
        //     'st_id' => $st_id,
        //     'date_ristourne' => $date_ristourne
        // ));

                        $req = $bdd->prepare("INSERT INTO tsb_ristourne(
                            v_ristourne,
                            st_id,
                            date_ristourne) 
                                            VALUES(
                                                '$v_ristourne',
                                                '$st_id',
                                                '$date_ristourne'')");
                        $req->execute(array(
                            'v_ristourne' =>(string) $v_ristourne,
                            'st_id' => $st_id,
                            'date_ristourne' => $date_ristourne
                        ));

        // Vérification des erreurs
        if ($req) {
            echo "Nouvel enregistrement ajouté avec succès dans la table Ristourne";
        } else {
            echo "Erreur : " . $sql . "<br>" . $bdd->errorInfo()[2];
        }

        ini_set('display_errors', 1);

        error_reporting(E_ALL);

        for ($i=0;$i<count($st_id);$i++) {
            //if($st_quantite_add[$i] != 0) {
                
                // Stock magasin : updates : st_quantite, st_prix_achat, fo_id, st_date
                //Mise à jour des stocks
                $total_add_magasin = ((int)$st_quantite[$i]+(int)$st_quantite_add[$i]);
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
