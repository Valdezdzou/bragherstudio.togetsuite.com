<?php 

    include '../../../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
        exit();	
	}

    $sql ="SELECT DISTINCT fa_client,fa_code,fa_phone from tsb_factures WHERE fa_status='open' GROUP BY fa_client,fa_code,fa_phone";
    $query = $bdd->prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $total_total_factures_open=$query->rowCount();

    
?>
<?php
    use Phppot\DataSource;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

    require_once '../../../functions/config.php';
    require_once '../../../functions/DataSource.php';
    $bdd = new DataSource();
    $conn = $bdd->getConnection();
    //require_once ('functions/vendor/autoload.php');

   

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
    <meta name="description" content="TogetSuite | BAR">
    <meta name="keywords" content="ERP, CRM" />
    <link rel="icon" type="image/png" href="../../../assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/icon/192x192.png">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="manifest" href="../../../__manifest.json">
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
            Components
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
            <h1 class="title">Factures ouvertes</h1>
        </div>

        

        <div class="listview-title mt-2">Toute les factures (<?php echo $total_total_factures_open;?>) <code> </code> <?php echo $total_factures_open;?> XAF à régler</div>
        <ul class="listview image-listview media mb-2">

            <?php
                $sqlSelect = "SELECT DISTINCT fa_client,fa_code,fa_phone, SUM(pr_prix_vente*fa_quantite) AS prix FROM tsb_factures WHERE fa_status='open' GROUP BY fa_client,fa_code,fa_phone";
                $result = $bdd->selectEtu($sqlSelect);
                if (! empty($result)) {

                    foreach ($result as $row) {
            ?>

            <li>
                <a href="<?php echo "facture_open_update.php?fa_code=$row[fa_code]";?>" class="item">
                    <div class="imageWrapper">
                        <ion-icon name="cart-outline" class="image"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                            <?php  echo $row['fa_client']; ?>, Tel : <?php  echo $row['fa_phone']; ?>
                            <div class="text-muted"><?php  echo $row['prix']; ?> XAF, <?php  echo $row['fa_code']; ?></div>
                        </div>
                        <span class="badge badge-primary">Ouvrir</span> 
                    </div>
                </a>
            </li>

            <?php } } else {?>

                <div class="error-page">
                    <div class="icon-box text-danger">
                        <ion-icon name="alert-circle" classs="image"></ion-icon>
                    </div>
                    <h2 class="title">Aucune factures ouvertes</h2>
                </div>
            
            <?php }?>
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
    
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
    
    <!-- * Android Add to Home Action Sheet -->


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


    <script>
        // Toggle Add to Home Button with 3 seconds delay.
        // Toggle only once
        AddtoHome("3000", "once");
    </script>

</body>


</html>



