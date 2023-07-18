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
        <div class="pageTitle">Tous les produits</div>
        <div class="right"></div>
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


    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active">


        <div class="tab-content mt-1">


            <!-- photos tab -->
            <div class="tab-pane fade show active" id="photos" role="tabpanel">

                <div class="section full mt-1">
                    <ul class="listview image-listview">
                        <?php
                            $sqlSelect = 'SELECT * FROM tsb_produits where pr_categorie="Alcoolisé"';
                            $result = $bdd->selectEtu($sqlSelect);
                            if (! empty($result)) {

                                foreach ($result as $row) {
                        ?>

                            <li>
                                <a href="<?php echo "produit_update.php?pr_id=$row[pr_id]";?>" class="item">
                                    <ion-icon name="beer-outline"  class="image"></ion-icon>
                                    <div class="in">
                                        <div>
                                            <?php  echo $row['pr_designation']; ?>
                                            <footer><?php  echo $row['pr_prix_vente']; ?> XAF</footer>
                                        </div>
                                        <span class="text-muted">Edit</span>
                                    </div>
                                </a>
                            </li>
                        
                        <?php } } ?>


                    </ul>

                </div>

            </div>
            <!-- * photos tab -->



            <!-- videos tab -->
            <div class="tab-pane fade" id="videos" role="tabpanel">

                <div class="section full mt-1">
                    <ul class="listview image-listview">
                        <?php
                            $sqlSelect = 'SELECT * FROM tsb_produits where pr_categorie="Non alcoolisé"';
                            $result = $bdd->selectEtu($sqlSelect);
                            if (! empty($result)) {

                                foreach ($result as $row) {
                        ?>

                            <li>
                                <a href="<?php echo "produit_update.php?pr_id=$row[pr_id]";?>" class="item">
                                    <ion-icon name="beer-outline"  class="image"></ion-icon>
                                    <div class="in">
                                        <div>
                                            <?php  echo $row['pr_designation']; ?>
                                            <footer><?php  echo $row['pr_prix_vente']; ?> XAF</footer>
                                        </div>
                                        <span class="text-muted">Edit</span>
                                    </div>
                                </a>
                            </li>
                        
                        <?php } } ?>


                    </ul>

                </div>

            </div>
            <!-- * videos tab -->


            <!-- sounds tab -->
            <div class="tab-pane fade" id="sounds" role="tabpanel">

                <div class="section full mt-1">
                    <ul class="listview image-listview">
                        <?php
                            $sqlSelect = 'SELECT * FROM tsb_produits where pr_categorie!="Alcoolisé" and pr_categorie!="Non alcoolisé"';
                            $result = $bdd->selectEtu($sqlSelect);
                            if (! empty($result)) {

                                foreach ($result as $row) {
                        ?>

                            <li>
                                <a href="<?php echo "produit_update.php?pr_id=$row[pr_id]";?>" class="item">
                                    <ion-icon name="beer-outline"  class="image"></ion-icon>
                                    <div class="in">
                                        <div>
                                            <?php  echo $row['pr_designation']; ?>
                                            <footer><?php  echo $row['pr_prix_vente']; ?> XAF</footer>
                                        </div>
                                        <span class="text-muted">Edit</span>
                                    </div>
                                </a>
                            </li>
                        
                        <?php } } ?>


                    </ul>

                </div>

            </div>
            <!-- * sounds tab -->

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