<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save'])) {
    
        // command add function tsb_facture
        
        $pr_designation = $_POST['pr_designation'];
        $pr_prix_vente = $_POST['pr_prix_vente'];
        $fa_quantite = $_POST['fa_quantite'];
        $us_name = $_POST['us_name'];
        //$fa_client = $_POST['fa_client'];
        //$fa_phone = $_POST['fa_phone'];
        $fa_status = $_POST['fa_status'];
        $fa_date = $_POST['fa_date'];

        for ($i=0;$i<count($pr_designation);$i++) {
            if($fa_quantite[$i] != 0) {
                $fa_code[$i] = $_POST['fa_code'];
                $fa_phone[$i] = $_POST['fa_phone'];
                $fa_client[$i] = $_POST['fa_client'];
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
            <a href="#" class="headerButton goBack">
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