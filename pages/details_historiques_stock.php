<?php 

    include '../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('pages/user_login.php');</script>";
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
    $date = $_GET['st_date'];

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
        <div class="pageTitle">
                     Etat du magasin
            <h5 style="text-align: center;"><?php  echo $date; ?></h5>
       </div>
        <div class="right" ></div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader p-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#photos" role="tab">
                    Alcoolisées
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#videos" role="tab">
                    Non alcoolisées
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#sounds" role="tab">
                    Autres
                </a>
            </li>
        </ul>
    </div>
    <!-- * Extra Header -->

    <style>
        input[type="number"]::-webkit-outer-spin-button, 
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>


    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active">

        <form action="../functions/stock_app_magasin.func.php" method="post">
            <div class="tab-content mt-1">

                <!-- Alcoolisé tab -->
                <div class="tab-pane fade show active" id="photos" role="tabpanel">

                    <div class="section full mt-1">
                        <ul class="listview image-listview">

                            <?php
                                $sqlSelect = "SELECT * FROM tsb_produits,tsb_stocks
                                 where pr_categorie='Alcoolisé' and tsb_produits.pr_id=tsb_stocks.pr_id_fk and st_quantite!=0 and st_status='magasin' and st_date='$date'
                                 ";
                                $result = $bdd->selectEtu($sqlSelect);
                                if (! empty($result)) {

                                    foreach ($result as $row) {
                            ?>
                        
                                <li>
                                    <div class="item">
                                        <div class="in">
                                            <div>
                                                <ion-icon name="beer-outline"  class=""></ion-icon>
                                                <span style="font-size: 12px;"><?php  echo $row['pr_designation']; ?></span>
                                            </div>
                                            <span class="badge">
                                                <input readonly type="number" style="width: 40px; text-align:right" value="<?php  echo $row['st_quantite']; ?>">
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <input name="pr_id[]" type="hidden" value="<?php  echo $row['pr_id']; ?>">

                            <?php } } ?>
                            
                        </ul>

                    </div>

                </div>
                <!-- * Alcoolisé tab -->

                <!-- Non Alcoolisé tab -->
                <div class="tab-pane fade" id="videos" role="tabpanel">

                    <div class="section full mt-1">
                        <ul class="listview image-listview">
                            <?php
                                $sqlSelect = 'SELECT * FROM tsb_produits,tsb_stocks where pr_categorie="Non alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk and st_quantite!=0  ';
                                $result = $bdd->selectEtu($sqlSelect);
                                if (! empty($result)) {

                                    foreach ($result as $row) {
                            ?>

                                <li>
                                    <div class="item">
                                        <div class="in">
                                            <div>
                                                <ion-icon name="beer-outline"  class=""></ion-icon>
                                                <span style="font-size: 12px;"><?php  echo $row['pr_designation']; ?></span>
                                            </div>
                                            <span class="badge">
                                                <input readonly type="number" style="width: 40px; text-align:right" value="<?php  echo $row['st_quantite']; ?>">
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <input name="pr_id[]" type="hidden" value="<?php  echo $row['pr_id']; ?>">
                            
                            <?php } } ?>


                        </ul>

                    </div>

                </div>
                <!-- * Non Alcoolisé tab -->

                <!-- Autres tab -->
                <div class="tab-pane fade" id="sounds" role="tabpanel">

                    <div class="section full mt-1">
                        <ul class="listview image-listview">
                            <?php
                                $sqlSelect = 'SELECT * FROM tsb_produits, tsb_stocks where pr_categorie!="Alcoolisé" and pr_categorie!="Non alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk and st_quantite!=0 ';
                                $result = $bdd->selectEtu($sqlSelect);
                                if (! empty($result)) {

                                    foreach ($result as $row) {
                            ?>

                                <li>
                                    <div class="item">
                                        <div class="in">
                                            <div>
                                                <ion-icon name="beer-outline"  class=""></ion-icon>
                                                <span style="font-size: 12px;"><?php  echo $row['pr_designation']; ?></span>
                                            </div>
                                            <span class="badge">
                                                <input readonly type="number" style="width: 40px; text-align:right" value="<?php  echo $row['st_quantite']; ?>">
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <input name="pr_id[]" type="hidden" value="<?php  echo $row['pr_id']; ?>">
                            
                            <?php } } ?>


                        </ul>

                    </div>
                </div>
                <!-- * Autres tab -->

            </div>

            <br> <br>

            <div class="form-button-group"  style="background:#F0F0F0">

                <!-- bottom left -->
                <div class="fab-button animate bottom-right dropdown">
                    <a href="#" class="fab" data-bs-toggle="dropdown">
                        <ion-icon name="apps-outline"></ion-icon>
                    </a>
                    <div class="dropdown-menu">
                        <a href="./bar_manage.php" class="dropdown-item" href="#">
                            <ion-icon name="home-outline"></ion-icon>
                            <p>Retourner au menu principal</p>
                        </a>
                    </div>
                </div>
                <!-- * bottom left -->
                
            </div>
        </form>

    </div>
    <!-- * App Capsule -->


    <!-- App Sidebar -->
    <?php require_once '../partials/_sidebar.php'?>
    <!-- * App Sidebar -->

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