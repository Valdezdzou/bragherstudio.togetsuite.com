<?php 

    include '../../../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost:8080/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
        exit();	
	}
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
            Nouvelle commande
        </div>
        <div class="right">
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>

    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Recherche...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader p-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#photos" role="tab">
                    Facture
                </a>
            </li>

            <li class="nav-item">
                
                <a class="nav-link" data-bs-toggle="tab" href="#videos" role="tab">
                    Alcoolisées
                    <ion-icon name="add-circle-outline"></ion-icon>
                </a>
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" data-bs-toggle="tab" href="#sounds" role="tab">
                    Autres
                    <ion-icon name="add-circle-outline"></ion-icon>
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

        

        <form action="../functions/facture_open_update.func.php" method="post">


            <div class="tab-content mt-1">

                <!-- Facture tab -->
                <div class="tab-pane fade show active" id="photos" role="tabpanel">

                    <div class="section full mt-1">

                        <ul class="listview image-listview">

                            <?php
                                $fa_code = $_GET['fa_code'];

                                $sqlSelect = "SELECT * FROM tsb_factures WHERE fa_code=$fa_code and fa_status='Open'";
                                $result = $bdd->selectEtu($sqlSelect);
                                if (! empty($result)) { 
                                    foreach ($result as $row_facture) {
                            ?>
                                <li>
                                    <div class="item">
                                        <div class="in">
                                            <div>
                                                <ion-icon name="beer-outline"  class=""></ion-icon>
                                                <span style="font-size: 12px;"><?php  echo $row_facture['pr_designation']; ?></span>
                                            </div>
                                            <span class="badge">
                                                <input readonly type="number" style="width: 40px; text-align:right" value="<?php  echo $row_facture['fa_quantite']; ?>">
                                                <input readonly type="number" style="width: 40px; text-align:right" value="<?php  echo $row_facture['pr_prix_vente']; ?>">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <input name="fa_code_pay[]" type="hidden" value="<?php  echo $row_facture['fa_code']; ?>">
                                <input name="fa_status_pay[]" type="hidden" value="Pay">


                            <?php } } ?>
                            
                        </ul>

                        <div class="listview-title mt-2 badge-primary" style="color:#fff"><code> </code> <?php echo $total_factures_open;?> XAF à régler</div>

                    </div>
                </div>
                <!-- * Facture tab -->


                <!-- ADD -->



                <!-- Alcoolisé tab -->
                <div class="tab-pane fade" id="videos" role="tabpanel">

                    <?php
                        $sqlSelect = 'SELECT * FROM tsb_produits, tsb_stocks where pr_categorie="Alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk and stc_quantite!=0';
                        $result = $bdd->selectEtu($sqlSelect);
                        if (! empty($result)) {

                            foreach ($result as $row) {
                    ?>
                         <div class="section full">
                            <div class="wide-block pt-2 pb-2 product-detail-header">
                                
                                <h2 class="title"><?php  echo $row['pr_designation']; ?></h2>
                                <div class="detail-footer">
                                    <!-- price -->
                                    <div class="price">
                                        <div class="current-price"><?php  echo $row['pr_prix_vente']; ?>  Fcfa</div> 
                                    </div>
                                    <!-- * price -->
                                    <!-- amount -->
                                    <div class="amount">
                                        <div class="stepper stepper-secondary">
                                            <a href="#" class="stepper-button stepper-down">-</a>
                                            <input name="fa_quantite_add[]" type="number" 
                                                class="form-control" min="0" max="<?php echo $row['st_quantite']; ?>" 
                                                value="0" onwheel="this.blur()"/>
                                            <a href="#" class="stepper-button stepper-up">+</a>
                                        </div>
                                    </div>
                                    <!-- * amount -->
                                </div>
                                
                            </div>
                        </div>

                        <input type="hidden" name="pr_designation_add[]" value="<?php echo $row['pr_designation']; ?>">
                        <input type="hidden" name="pr_prix_vente_add[]" value="<?php echo $row['pr_prix_vente']; ?>">
                        <input type="hidden" name="us_name_add[]" value="POUM">

                        <input type="hidden" name="fa_status_add[]" value="Open">
                        <input type="hidden" name="fa_date_add[]" value="<?php echo date("Y/m/d"); ?>">
                        <input type="hidden" name="fa_quantite_exist[]" value="<?php  echo $row_facture['fa_quantite']; ?>">


                    <?php } } ?>

                </div>
                <!-- * Alcoolisé tab -->

                <!-- Non Alcoolisé & Autres tab -->
                <div class="tab-pane fade" id="sounds" role="tabpanel">

                    <?php
                        $sqlSelect = 'SELECT * FROM tsb_produits, tsb_stocks where pr_categorie!="Alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk and stc_quantite!=0';
                        $result = $bdd->selectEtu($sqlSelect);
                        if (! empty($result)) {

                            foreach ($result as $row) {
                    ?>
                        <div class="section full">
                            <div class="wide-block pt-2 pb-2 product-detail-header">
                                
                                <h2 class="title"><?php  echo $row['pr_designation']; ?></h2>
                                <div class="detail-footer">
                                    <!-- price -->
                                    <div class="price">
                                        <div class="current-price"><?php  echo $row['pr_prix_vente']; ?>  Fcfa</div> 
                                    </div>
                                    <!-- * price -->
                                    <!-- amount -->
                                    <div class="amount">
                                        <div class="stepper stepper-secondary">
                                            <a href="#" class="stepper-button stepper-down">-</a>
                                            <input name="fa_quantite_add[]" type="number" 
                                                class="form-control" min="0" max="<?php echo $row['st_quantite']; ?>" 
                                                value="0" onwheel="this.blur()"/>
                                            <a href="#" class="stepper-button stepper-up">+</a>
                                        </div>
                                    </div>
                                    <!-- * amount -->
                                </div>
                                
                            </div>
                        </div>

                        <input type="hidden" name="pr_designation_add[]" value="<?php echo $row['pr_designation']; ?>">
                        <input type="hidden" name="pr_prix_vente_add[]" value="<?php echo $row['pr_prix_vente']; ?>">
                        <input type="hidden" name="us_name_add[]" value="POUM">

                        <input type="hidden" name="fa_status_add[]" value="Open">
                        <input type="hidden" name="fa_date_add[]" value="<?php echo date("Y/m/d"); ?>">
                        <input type="hidden" name="fa_quantite_exist[]" value="<?php  echo $row_facture['fa_quantite']; ?>">


                    <?php } } ?>

                </div>
                <!-- * Autres tab -->
                <br>

                <?php
                    $fa_code = $_GET['fa_code'];

                    $sqlSelect = "SELECT distinct fa_client,fa_phone FROM tsb_factures WHERE fa_code=$fa_code";
                    $result = $bdd->selectEtu($sqlSelect);
                    if (! empty($result)) { 
                        foreach ($result as $row_facture_info) {
                ?>
                
                    <div class="form-button-group">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label for="lient"></label>
                                <input name="fa_client_add" type="text" class="form-control"  value="<?php  echo $row_facture_info['fa_client']; ?>" required>
                                <input name="fa_phone_add" type="text" class="form-control"  value="<?php  echo $row_facture_info['fa_phone']; ?>">
                                <input name="fa_code_add" type="hidden"   class="form-control"  value="<?php  echo $fa_code; ?>">

                            </div>
                        </div>
                    </div>

                <?php } } ?>


                <!-- bottom left -->
                <div class="fab-button animate bottom-right dropdown">
                    <a href="#" class="fab" data-bs-toggle="dropdown">
                        <ion-icon name="apps-outline"></ion-icon>
                    </a>
                    <div class="dropdown-menu">
                
                        <button name="save_add_facture" type="submit" class="dropdown-item">
                            <ion-icon name="add-outline"></ion-icon>
                            <p>Ajouter à la facture</p>
                        </button>
                        <button name="save_close_facture" type="submit" class="dropdown-item">
                            <ion-icon name="checkmark-done-outline"></ion-icon>
                            <p>Clôturer la facture</p>
                        </button>
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