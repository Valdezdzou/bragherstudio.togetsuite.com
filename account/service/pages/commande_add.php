<?php 

    include '../../../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
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

        <form action="../functions/commande_add.func.php" method="post">
            <div class="tab-content mt-1">

                <!-- Alcoolisé tab -->
                <div class="tab-pane fade show active" id="photos" role="tabpanel">

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
                                            <input name="fa_quantite[]" type="number" 
                                                  class="form-control" min="0" max="<?php echo $row['stc_quantite']; ?>" 
                                                  value="0" onwheel="this.blur()"/>
                                            <a href="#" class="stepper-button stepper-up">+</a>
                                        </div>
                                    </div>
                                    <!-- * amount -->
                                </div>
                                
                            </div>
                        </div>

                        <input type="hidden" name="pr_designation[]" value="<?php echo $row['pr_designation']; ?>">
                        <input type="hidden" name="pr_prix_vente[]" value="<?php echo $row['pr_prix_vente']; ?>">
                        <input type="hidden" name="us_name[]" value="POUM">

                        <input type="hidden" name="fa_status[]" value="Open">
                        <input type="hidden" name="fa_date[]" value="<?php echo date("Y/m/d"); ?>">

                    <?php } } ?>

                </div>
                <!-- * Alcoolisé tab -->

                <!-- Non Alcoolisé tab -->
                <div class="tab-pane fade" id="videos" role="tabpanel">

                    <?php
                        $sqlSelect = 'SELECT * FROM tsb_produits, tsb_stocks where pr_categorie="Non alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk and stc_quantite!=0';
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
                                            <input name="fa_quantite[]" type="text" 
                                                  class="form-control" min="0" max="<?php  echo $row['stc_quantite']; ?>" 
                                                  value="0" onwheel="this.blur()"/>
                                            <a href="#" class="stepper-button stepper-up">+</a>
                                        </div>
                                    </div>
                                    <!-- * amount -->
                                </div>
                                
                            </div>
                        </div>

                        <input type="hidden" name="pr_designation[]" value="<?php echo $row['pr_designation']; ?>">
                        <input type="hidden" name="pr_prix_vente[]" value="<?php echo $row['pr_prix_vente']; ?>">
                        <input type="hidden" name="us_name[]" value="POUM">

                        <input type="hidden" name="fa_status[]" value="Open">
                        <input type="hidden" name="fa_date[]" value="<?php echo date("Y/m/d"); ?>">


                    <?php } } ?>

                </div>
                <!-- * Non Alcoolisé tab -->

                <!-- Autres tab -->
                <div class="tab-pane fade" id="sounds" role="tabpanel">

                    <?php
                        $sqlSelect = 'SELECT * FROM tsb_produits, tsb_stocks where pr_categorie!="Alcoolisé" and pr_categorie!="Non alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk and stc_quantite!=0';
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
                                            <input name="fa_quantite[]" type="number" 
                                                  class="form-control" min="0" max="<?php echo $row['stc_quantite']; ?>" 
                                                  value="0" onwheel="this.blur()"/>
                                            <a href="#" class="stepper-button stepper-up">+</a>
                                        </div>
                                    </div>
                                    <!-- * amount -->
                                </div>
                                
                            </div>
                        </div>

                        <input type="hidden" name="pr_designation[]" value="<?php echo $row['pr_designation']; ?>">
                        <input type="hidden" name="pr_prix_vente[]" value="<?php echo $row['pr_prix_vente']; ?>">
                        <input type="hidden" name="us_name[]" value="POUM">

                        <input type="hidden" name="fa_status[]" value="Open">
                        <input type="hidden" name="fa_date[]" value="<?php echo date("Y/m/d"); ?>">


                    <?php } } ?>

                    
                </div>
                <!-- * Autres tab -->
                <br>
                
                <div class="form-button-group">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <input name="fa_code" type="hidden"  value="<?php echo (rand(1000000,900000000)); ?>">
                            <input name="fa_client" type="text" class="form-control"  placeholder="N° Table/ Client" required>
                            <input name="fa_phone" type="text" class="form-control"  placeholder="N° Téléphone ">
                        </div>
                    </div>
                    <button name="save" type="submit" class="btn btn-primary btn-block" style="margin-left: 15px;">Facturer</button>
                </div>
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