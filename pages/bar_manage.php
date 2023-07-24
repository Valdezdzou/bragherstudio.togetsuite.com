<?php 

    include '../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('pages/user_login.php');</script>";
        exit();	
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="manifest" href="../__manifest.json">
</head>

<body class="bg-white">

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
            Gestion
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

        <div class="header-large-title">
            <h1 class="title">Gestion</h1>
        </div>


        <div class="listview-title mt-2">Utilisateurs / Gestionnaires</div>
        <ul class="listview image-listview flush transparent">

            <li>
                <a href="../pages/bar_user_add.php" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Créer un compte
                    </div>
                </a>
            </li>
            <li>
                <a href="../pages/bar_user_list.php" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Tous les comptes
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-2">Fournisseurs</div>
        <ul class="listview image-listview flush transparent">
            <li>
                <a href="../pages/fournisseur_add.php" class="item">
                    <div class="icon-box bg-warning">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Ajouter un fournisseur
                    </div>
                </a>
            </li>
            <li>
                <a href="../pages/fournisseur_list.php" class="item">
                    <div class="icon-box bg-warning">
                        <ion-icon name="filter-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Tous les fornisseurs
                    </div>
                </a>
            </li>
        </ul>


        <div class="listview-title mt-2">Produits</div>
        <ul class="listview image-listview flush transparent mb-1">

            <li>
                <a href="../pages/produit_add.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="add-outline"></ion-icon>
                    </div>
                    <div class="in">
                       Nouveau produit
                    </div>
                </a>
            </li>
            <li>
                <a href="../pages/produit_list.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="layers-outline"></ion-icon>
                    </div>
                    <div class="in">
                       Tous les produits
                    </div>
                </a>
            </li>

        </ul>

        <div class="listview-title mt-2">Stocks</div>
        <ul class="listview image-listview flush transparent">
            <li>
                <a href="../pages/bar_etat_stock.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="download-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Etat des stocks
                    </div>
                </a>
            </li>   
            <li>
                <a href="../pages/stock_app_magasin.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="download-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Approvisionnement 
                    </div>
                </a>
            </li>  
        </ul>

        <div class="listview-title mt-2">Historiques</div>
        <ul class="listview image-listview flush transparent">
            <li>
                <a href="../pages/bar_etat_stock.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="time-outline"></ion-icon>
                    </div>
                    <div class="in">
                         Historiques Ventes
                    </div>
                </a>
            </li>   
            <li>
                <a href="../pages/historique_stock.php" class="item">
                    <div class="icon-box bg-info">
                       <ion-icon name="time-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Historiques Stocks
                    </div>
                </a>
            </li>  
            <li>
                <a href="../pages/bar_etat_stock.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="time-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Historiques ristournes
                    </div>
                </a>
            </li>  
        </ul>

        

        <!-- app footer -->
        
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    <?php require_once '../partials/_bottomMenu.php'?>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <?php require_once '../partials/_sidebar.php'?>
    <!-- * App Sidebar -->

    <!-- iOS Add to Home Action Sheet -->
    <div class="offcanvas offcanvas-bottom action-sheet inset ios-add-to-home" tabindex="-1"
        id="ios-add-to-home-screen">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add to Home Screen</h5>
            <a href="#" class="close-button" data-bs-dismiss="offcanvas">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="offcanvas-body">
            <div class="action-sheet-content text-center">
                <div class="mb-1"><img src="../assets/img/icon/192x192.png" alt="image" class="imaged w48">
                </div>
                <h4>Mobilekit</h4>
                <div>
                    Install Mobilekit on your iPhone's home screen.
                </div>
                <div>
                    Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                </div>
            </div>
        </div>
    </div>
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
    <div class="offcanvas offcanvas-top action-sheet inset android-add-to-home" tabindex="-1"
        id="android-add-to-home-screen">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add to Home Screen</h5>
            <a href="#" class="close-button" data-bs-dismiss="offcanvas">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="offcanvas-body">
            <div class="action-sheet-content text-center">
                <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image" class="imaged w48">
                </div>
                <h4>Mobilekit</h4>
                <div>
                    Install Mobilekit on your Android's home screen.
                </div>
                <div>
                    Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                </div>
            </div>
        </div>
    </div>
    <!-- * Android Add to Home Action Sheet -->


    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../assets/js/plugins/splide/splide.min.js"></script>
    <!-- ProgressBar js -->
    <script src="../assets/js/plugins/progressbar-js/progressbar.min.js"></script>
    <!-- Base Js File -->
    <script src="../assets/js/base.js"></script>


    <script>
        // Toggle Add to Home Button with 3 seconds delay.
        // Toggle only once
        AddtoHome("3000", "once");
    </script>

</body>


</html>