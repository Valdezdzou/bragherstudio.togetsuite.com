<?php 

    require_once '../functions/config.php';
    




    
    if (isset($_POST['save'])) {
        $us_name = htmlspecialchars($_POST['us_name']);
        $us_phone = htmlspecialchars($_POST['us_phone']);
        $us_password = sha1($_POST['us_password']);
        $us_type  = $_POST['us_type'];
        $bar_id  = $_SESSION['togetsuite_bar']['bar_id'];
        $us_status  = "Active";
        
         
        $req = $bdd->query("SELECT us_phone FROM tsb_users WHERE us_phone = '$us_phone'");
		$count_us_phone = $req->rowCount(); 


        if ($count_us_phone == 0 ) { 

            $query = "INSERT INTO tsb_users (us_name,us_phone,us_password,us_type,us_status,bar_id) 
                        VALUES (:us_name,:us_phone,:us_password,:us_type,:us_status,:bar_id);";
            // Bind the parameters to the query
            $stmt = $bdd->prepare($query);
            $stmt->bindParam(':us_name', $us_name);
            $stmt->bindParam(':us_phone', $us_phone);
            $stmt->bindParam(':us_password', $us_password);
            $stmt->bindParam(':us_type', $us_type);
            $stmt->bindParam(':us_status', $us_status);
            $stmt->bindParam(':bar_id', $bar_id);
            
            // Execute the query
            $stmt->execute();
            $success = "Compte crée !";

        } else {
            $erreur = "Le numéro $us_phone est déjà utilisé.";
        }
            
    } 

    if (isset($_POST['update_status'])) {
    
        $us_id = $_POST['us_id'];
        $us_status = $_POST['us_status'];
        
        for ($i=0;$i<count($us_id);$i++) {
            
            // UPDATE tsb_stock SET st_quantite = 90 WHERE bo_id =7
            $sql = "UPDATE tsb_users SET us_status = ? WHERE us_id = ?";
            $bdd->prepare($sql)->execute([$us_status[$i], $us_id[$i]]);
            
        }
        header("Location: ../pages/bar_user_list.php");
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
    <?php require_once '../partials/_bottomMenu.php'?>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <?php require_once '../partials/_sidebar.php'?>
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