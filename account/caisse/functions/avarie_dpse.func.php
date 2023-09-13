<?php
// Inclure le fichier de configuration pour établir la connexion à la base de données
require_once '../../../functions/config.php';


if (isset($_POST['save'])) {
    $pr_designation = $_POST['pr_designation'];
    $pr_prix_vente = $_POST['st_prix_achat'];
    $quantite = $_POST['quantite'];
    $motif = $_POST['motif'];
    $type = $_POST['type'];

    // Calcule de la valeur et de la quantité totale
    $valeur = 0;
    

   

    for ($i=0;$i<count($pr_designation);$i++) {
        if (is_numeric($pr_prix_vente[$i]) && is_numeric($quantite[$i])) {
            $valeur = $pr_prix_vente[$i] * $quantite[$i];
        }
        if ((int)$quantite[$i] != 0) {
           // Insérer les données dans la table "avarie_depense"
            $req = $bdd->prepare("INSERT INTO avarie_depense (pr_prix_vente, quantite, valeur, motif, date, type, pr_designation) 
                                    VALUES (:pr_prix_vente, :quantite,  :valeur, :motif, NOW(), :type, :pr_designation)");
            
            $req->execute(array(
                'pr_prix_vente' => $pr_prix_vente[$i],
                'quantite' => $quantite[$i],
                'valeur' => $valeur,
                'motif' => $motif[$i],
                'type' => $type[$i],
                'pr_designation' => $pr_designation[$i]
            ));

            $req_select = $bdd->prepare("SELECT pr_id FROM tsb_produits WHERE pr_designation = :pr_designation");
            $req_select->execute(array(
                'pr_designation' => $pr_designation[$i]
            ));
            $id_produit = $req_select->fetchColumn();

            $req_up = $bdd->prepare("UPDATE tsb_stocks SET stc_quantite = stc_quantite - :quantite 
                                    WHERE pr_id_fk = :id_produit AND st_status = 'comptoir'");

            $req_up->execute(array(
                'quantite' => $quantite[$i],
                'id_produit' => $id_produit
            ));
        }
            // Display a success message or perform other actions after the record is saved
            $success = "Enregistrement réussi !";
    }
}
        
?>
<!doctype html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>TogetSuite | BAR</title>
    <meta name="description" content="TogetSuite | BAR, ERP, CRM">
    <meta name="keywords" content="TogetSuite | BAR, ERP, CRM" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icon/192x192.png">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="manifest" href="../../../__manifest.json">
</head>


<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="../pages/avarie_dpse.php" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Notification</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section full mt-2">
            <div class="section-title">Message</div>
            <div class="wide-block pt-2 pb-2">

                <?php echo (isset($erreur))?$erreur:''; ?>

                <?php echo (isset($success))?$success:''; ?>

            </div>

        </div>

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    
    <!-- * App Sidebar -->

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="../../../assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../../../assets/js/plugins/splide/splide.min.js"></script>
    <!-- ProgressBar js -->
    <script src="../../../assets/js/plugins/progressbar-js/progressbar.min.js"></script>
    <!-- Base Js File -->
    <script src="../../../assets/js/base.js"></script>

</body>


</html>