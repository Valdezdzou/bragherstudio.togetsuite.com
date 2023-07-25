<?php 

    include '../../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
        exit();	
	}
?>

<?php

    require_once '../../functions/config.php';

    $us_phone = $_SESSION['togetsuite_bar']['us_phone'];
    $sql = "SELECT * from tsb_users where us_phone = (:us_phone);";
    $query = $bdd -> prepare($sql);
    $query-> bindParam(':us_phone', $us_phone, PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_OBJ);
    $cnt=1;	
   
	
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
        <meta name="description" content="MNOCC | Climate">
        <meta name="keywords" content="Follow Climate Variability and Stay Informed of all the Situation in your locality" />
        <link rel="icon" type="image/png" href="../../assets/img/favicon.png" sizes="32x32">
        <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/icon/192x192.png">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="manifest" href="../../__manifest.json">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    </head>

    <body>

        <!-- loader -->
        <div id="loader">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
        <!-- * loader -->

        <!-- App Header -->
        <div class="appHeader bg-primary scrolled">
            <div class="left">
                <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                    <ion-icon name="menu-outline"></ion-icon>
                </a>
            </div>
            <div class="pageTitle">
                TogetSuite | BAR
            </div>
            <div class="right">
                <a href="#" class="headerButton toggle-searchbox">
                    <ion-icon name="search-outline"></ion-icon>
                </a>
            </div>
        </div>
        <!-- * App Header -->

        <!-- Search Component -->
        <div id="search" class="appHeader">
            <form class="search-form">
                <div class="form-group searchbox">
                    <input type="text" class="form-control" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </i>
                    <a href="#" class="ms-1 close toggle-searchbox">
                        <ion-icon name="close-circle"></ion-icon>
                    </a>
                </div>
            </form>
        </div>
        <!-- * Search Component -->

        <!-- App Capsule -->
        <div id="appCapsule">

            <div class="header-large-title" style="text-align: center">
                <h2 class="title">BAR</h2>
                <h3 class="subtitle">Bienvenue sur TogetSuite BAR</h3>
            </div>


            <div class="listview-title mt-2">
                <h3>Stock</h3>
            </div>
            <ul class="listview image-listview flush transparent">

                <li>
                    <a href="./pages/bar_etat_stock.php" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Etat stock
                        </div>
                    </a>
                </li>

                <li>
                    <a href="./pages/historique_stock.php" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="reload-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Historiques Stock
                        </div>
                    </a>
                </li>

                <li>
                    <a href="./pages/stock_initialize.php" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="sync-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Initialiser le stock a zero
                        </div>
                    </a>
                </li>
            </ul>


            <div class="listview-title mt-2">
                <h3>Approvisionnements</h3>
            </div>
            <ul class="listview image-listview flush transparent">

                <li>
                    <a href="./pages/stock_app_magasin.php" class="item">
                        <div class="icon-box bg-danger">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Approvisionnement magasin
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./pages/stock_app_caisse.php" class="item">
                        <div class="icon-box bg-danger">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                        <div class="in">
                        Approvisionnement Comptoir
                        </div>
                    </a>
                </li>
                <!-- <li>
                    <a href="./pages/facture_close.php" class="item">
                        <div class="icon-box bg-danger">
                            <ion-icon name="people-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Factures clôturées
                        </div>
                    </a>
                </li> -->
            </ul>

            
        </div>

            

        </div>
        <!-- * App Capsule -->


        <!-- App Bottom Menu -->
        
        <!-- * App Bottom Menu -->
        <?php require_once './partials/_bottomMenu.php'?>
        <!-- App Sidebar -->
        <?php require_once './partials/_sidebar.php'?>
        <!-- * App Sidebar -->

        <!-- welcome notification  -->
        <!-- <div id="notification-welcome" class="notification-box">
            <div class="notification-dialog android-style">
                <div class="notification-header">
                    <div class="in">
                        <img src="../../assets/img/icon/72x72.png" alt="image" class="imaged w24">
                        <strong>TogetSuite Bar</strong>
                        <span>just now</span>
                    </div>
                    <a href="#" class="close-button">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="notification-content">
                    <div class="in">
                        <h3 class="subtitle">Welcome to TogetSuite Bar</h3>
                        <div class="text">
                            Organiser & 
                            Gérer votre Bar en toute simplicité
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- * welcome notification -->




        <!-- ============== Js Files ==============  -->
        <!-- Bootstrap -->
        <script src="../../assets/js/lib/bootstrap.min.js"></script>
        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- Splide -->
        <script src="../../assets/js/plugins/splide/splide.min.js"></script>
        <!-- ProgressBar js -->
        <script src="../../assets/js/plugins/progressbar-js/progressbar.min.js"></script>
        <!-- Base Js File -->
        <script src="../../assets/js/base.js"></script>

        <script>
            // Trigger welcome notification after 5 seconds
            setTimeout(() => {
                notification('notification-welcome', 5000);
            }, 2000);
        </script>

    </body>

</html>