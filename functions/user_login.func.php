<?php 
        

    require_once '../functions/config.php';

    if (isLogged() == 1) {
        echo " <script type='text/javascript'>document.location.replace('../index.php');</script>";
        exit();	
    }
    
    if (isset($_POST['save'])) {
        $us_phone = $_POST['us_phone'];
        $us_password = sha1(htmlentities(trim($_POST['us_password'])));
        $us_type = $_POST['us_type'];

        
        $sql ="SELECT us_phone,us_password,us_type,bar_id FROM tsb_users WHERE us_phone=:us_phone and us_password=:us_password and us_type=:us_type and us_status='Active'";
		$query= $bdd -> prepare($sql);
		$query-> bindParam(':us_phone', $us_phone, PDO::PARAM_STR);
		$query-> bindParam(':us_password', $us_password, PDO::PARAM_STR);
        $query-> bindParam(':us_type', $us_type, PDO::PARAM_STR);
		$query-> execute();
		//$result=$query->fetch();
        $result=$query->fetch(PDO::FETCH_OBJ);
        $cnt=1;	
        $bar_id= $result->bar_id;

        if($result->us_type=="Admin" and $result->us_phone==$us_phone){
            $req ="SELECT bar_regime FROM tsb_bar WHERE bar_id=:bar_id";
            $query= $bdd -> prepare($req);
            $query-> bindParam(':bar_id', $bar_id, PDO::PARAM_STR);
            $query-> execute();
            $result=$query->fetch(PDO::FETCH_OBJ);

            $_SESSION['togetsuite_bar']['bar_id'] = $bar_id;
            $_SESSION['togetsuite_bar']['regime'] = $result->bar_regime;
            $_SESSION['togetsuite_bar']['us_phone'] = $us_phone;
            echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
            exit();	
        } else if($result->us_type=="Caisse" and $result->us_phone==$us_phone){
            $req ="SELECT bar_regime FROM tsb_bar WHERE bar_id=:bar_id";
            $query= $bdd -> prepare($req);
            $query-> bindParam(':bar_id', $bar_id, PDO::PARAM_STR);
            $query-> execute();
            $result=$query->fetch(PDO::FETCH_OBJ);
            
            $row=$query->fetch(PDO::FETCH_OBJ);
            $_SESSION['togetsuite_bar']['bar_id'] = $bar_id;
            $_SESSION['togetsuite_bar']['regime'] = $result->bar_regime;
            $_SESSION['togetsuite_bar']['us_phone'] = $us_phone;
            echo "<script type='text/javascript'>document.location.replace('../account/caisse/');</script>";
            exit();	
        } else if($result->us_type=="Service" and $result->us_phone==$us_phone){
            $req ="SELECT bar_regime FROM tsb_bar WHERE bar_id=:bar_id";
            $query= $bdd -> prepare($req);
            $query-> bindParam(':bar_id', $bar_id, PDO::PARAM_STR);
            $query-> execute();
            $result=$query->fetch(PDO::FETCH_OBJ);
            
            $row=$query->fetch(PDO::FETCH_OBJ);
            $_SESSION['togetsuite_bar']['bar_id'] = $bar_id;
            $_SESSION['togetsuite_bar']['regime'] = $result->bar_regime;
            $_SESSION['togetsuite_bar']['us_phone'] = $us_phone;
            echo "<script type='text/javascript'>document.location.replace('../account/service/');</script>";
            exit();	
        } else if($result->us_type=="magasinier" and $result->us_phone==$us_phone){
            $req ="SELECT bar_regime FROM tsb_bar WHERE bar_id=:bar_id";
            $query= $bdd -> prepare($req);
            $query-> bindParam(':bar_id', $bar_id, PDO::PARAM_STR);
            $query-> execute();
            $result=$query->fetch(PDO::FETCH_OBJ);
            
            $row=$query->fetch(PDO::FETCH_OBJ);
            $_SESSION['togetsuite_bar']['bar_id'] = $bar_id;
            $_SESSION['togetsuite_bar']['regime'] = $result->bar_regime;
            $_SESSION['togetsuite_bar']['us_phone'] = $us_phone;
            echo "<script type='text/javascript'>document.location.replace('../account/magasinier/');</script>";
            exit();
        } else {
            echo "<script type='text/javascript'>document.location.replace('../pages/user_login.php');</script>";
            exit();	
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