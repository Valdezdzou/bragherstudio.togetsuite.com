
<?php 

    include '../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
        exit();	
	}
?>





<?php
    use Phppot\DataSource;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

    require_once '../functions/config.php';
    require_once '../functions/DataSource.php';
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
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" sizes="32x32">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icon/192x192.png">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="manifest" href="../_manifest.json">
    </head>
    <body class="bg-white">

        <!-- loader -->
        <!-- <div id="loader">
            <div class="spinner-border text-primary" role="status"></div>
        </div> -->
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

            <form action="../functions/facture_pay.func.php" method="post">

                <div class="header-large-title">
                    <h1 class="title">Facture #<?php echo $fa_code = $_GET['fa_code'];?></h1>
                </div>


                <div class="listview-title mt-2">Désignations <code> </code>Prix_U   *   Qté</div>
                
                <ul class="listview image-listview">

                    <?php
                        $fa_code =  (string)$_GET['fa_code'];

                        $sqlSelect = "  SELECT pr_designation, 
                                            fa_quantite, pr_prix_vente,
                                            SUM(pr_prix_vente * fa_quantite) as total
                                        FROM tsb_factures
                                        WHERE fa_code = '$fa_code' AND 
                                            fa_status = 'Pay'
                                        
                                        GROUP BY  pr_designation, pr_prix_vente, fa_quantite";

                        $result = $bdd->selectEtu($sqlSelect);
                            foreach ($result as $row_facture) {
                    ?>
                        
                    <li>
                        <div class="item">
                            <ion-icon name="beer-outline" class="image"></ion-icon>
                            <div class="in">
                                <div>
                                    <?php echo $row_facture['pr_designation']; ?>
                                    <input type="hidden" name="pr_designation_pay" value="<?php echo $row_facture['pr_designation']; ?>">
                                </div>
                                <div>
                                    <?php echo $row_facture['pr_prix_vente']; ?>        *        
                                    <span class="badge badge-success">
                                        <?php echo $row_facture['fa_quantite']; ?>
                                    </span>
                                </div>
                
                            </div>
                        </div>
                        <input name="fa_code_pay" type="hidden" value="<?php echo $fa_code; ?>">
                        <input name="fa_status_pay" type="hidden" value="Pay">
                    </li>
                        
                    <?php } ?>
                        <div class="listview-title mt-2 badge-primary" style="color:#fff"><code> </code> <?php echo $row_facture['total'];?> XAF</div>
                   
                </ul>

            
            </form>

        </div>
        <!-- * App Capsule -->

        <!-- App Bottom Menu -->
        
        <!-- * App Bottom Menu -->

        <!-- App Sidebar -->
        <?php require_once '../partials/_sidebar.php'?>
        <!-- * App Sidebar -->

        <!-- App Bottom Menu -->
        <?php require_once '../partials/_bottomMenu.php'?>
        <!-- * App Bottom Menu -->

      

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

    </body>

</html>


