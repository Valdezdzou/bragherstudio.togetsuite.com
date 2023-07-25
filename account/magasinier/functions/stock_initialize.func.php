<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save'])) {
    
        // command add function tsb_facture
        $pr_id_fk = $_POST['pr_id'];
        $pr_id = $_POST['pr_id'];
 
        $fo_id = $_POST['fo_id'];
        $st_quantite = $_POST['st_quantite'];
        $stc_quantite = $_POST['stc_quantite'];
        $stc_quantite_vente = $_POST['stc_quantite_vente'];
        $st_prix_achat = $_POST['st_prix_achat'];
        $st_date = $_POST['st_date'];

        $vider = $bdd->query('delete from tsb_stocks');

        for ($i=0;$i<count($pr_id);$i++) {
            
            $req = $bdd->prepare("INSERT INTO  tsb_stocks(
                pr_id_fk,
                fo_id,
                st_quantite,
                stc_quantite,
                stc_quantite_vente,
                st_prix_achat,
                st_date) VALUES(?,?,?,?,?,?,?)");
            $req->execute(array(
                $pr_id_fk[$i],
                $fo_id[$i],
                $st_quantite[$i],
                $stc_quantite[$i],
                $stc_quantite_vente[$i],
                $st_prix_achat[$i],
                $st_date[$i]
            ));
            $success = "Commande enregistrée !";
            header("Location: ../pages/bar_etat_stock.php");
         
        }

    } 
?>