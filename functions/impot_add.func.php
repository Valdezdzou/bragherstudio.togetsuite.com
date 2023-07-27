<?php

// Inclure le fichier de configuration pour établir la connexion à la base de données
require_once __DIR__ . '/../functions/config.php';

if (isset($_POST['save'])) {
    // Vérifier que tous les champs obligatoires ont été remplis
    if (!empty($_POST['dte_initiale']) && !empty($_POST['montant']) && !empty($_POST['type_impot'])) {
        $dte_initiale = htmlspecialchars($_POST['dte_initiale']);
        $montant = $_POST['montant'];
        $type_impot = $_POST['type_impot'];

        // Utiliser la fonction strtotime() pour ajouter un mois à la date initiale
        $dte_finale = date('Y-m-d', strtotime('+1 month', strtotime($dte_initiale)));

        // Vérifier si la date existe déjà
        $req = $bdd->prepare("SELECT COUNT(*) FROM impot WHERE dte_initiale = :dte_initiale ORDER BY dte_initiale DESC");
        $req->execute(array('dte_initiale' => $dte_initiale));
        $count = $req->fetchColumn();

        if ($count > 0) {
            $erreur = "Cette date existe déjà !";
        } else {
            // Utiliser une requête préparée avec des paramètres de liaison pour éviter les injections SQL
            $req = $bdd->prepare("INSERT INTO impot(dte_initiale, dte_finale, montant, type_impot) 
                                  VALUES (:dte_initiale, :dte_finale, :montant, :type_impot)");
            $req->execute(array(
                'dte_initiale' => $dte_initiale,
                'dte_finale' => $dte_finale,
                'montant' => $montant,
                'type_impot' => $type_impot
            ));

            $success = "Date de paiement enregistrée !";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs obligatoires !";
    }
}
    $req = $bdd->query("SELECT * FROM impot ORDER BY dte_initiale DESC");
    $data = $req->fetchAll(PDO::FETCH_ASSOC);   
    
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
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icon/192x192.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="manifest" href="../__manifest.json">
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
            <a href="../pages/impot.php" class="headerButton goBack">
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
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../assets/js/plugins/splide/splide.min.js"></script>
    <!-- ProgressBar js -->
    <script src="../assets/js/plugins/progressbar-js/progressbar.min.js"></script>
    <!-- Base Js File -->
    <script src="../assets/js/base.js"></script>

</body>


</html>

