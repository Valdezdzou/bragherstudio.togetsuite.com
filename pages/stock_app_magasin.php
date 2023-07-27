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
        <div class="pageTitle">Approvisionnement du magasin</div>
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

    <style>
        input[type="number"]::-webkit-outer-spin-button, 
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            -moz-appearance: textfield;
        }
        .ristourne-generale{
            color:black;
            z-index: 1001;
            position: fixed;
            align-items:center;
            justify-content:space-between;
            top:112px;
            width: 100%;
            height:56px;
            padding: 0 10px;
            background: White;
            font-size:24px;
            display: flex;
        }
        .slide-button {
         display: inline-block;
         position: relative;
         width: 60px;
         height: 34px;
         margin-bottom: 10px;
        }

       .slide-button .switch {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        }

       .slide-button .switch input {
        display: none;
        }

        .slide-button .slider {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        border-radius: 34px;
        transition: 0.4s;
        }

       .slide-button .slider:before {
       position: absolute;
       content: "";
       height: 26px;
       width: 26px;
       left: 4px;
       bottom: 4px;
       background-color: white;
       border-radius: 50%;
       transition: 0.4s;
       }

       .slide-button input:checked + .slider {
        background-color: blue;
        }

        .slide-button input:checked + .slider:before {
        transform: translateX(26px);
        }
        .active_rist{
        display: none;
                    }
    </style>



    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active">

        <form action="../functions/stock_app_magasin.func.php" method="post">
            <div class="tab-content mt-1">

                <!-- ristourne générale -->
                <div class="ristourne-container">
                    <div class= "ristourne-generale">
                        <span>Ristourne Genérale :</span>
                        <input class="champ_ristourne ristourne-individuelle active_rist" name="ristourne_general[]" type="number" style="width: 20%; font-size: 12px;">
                        <div class="slide-button">
                            <label class="switch">
                                <input name="general[]" type="checkbox" id="toggle-button">
                                <div class="slider"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- *ristourne générale -->

                <!-- Alcoolisé tab -->
                <div class="tab-pane fade show active" id="photos" role="tabpanel">

                    <div class="section full mt-1">
                        <ul class="listview image-listview">

                            <?php
                                $sqlSelect = 'SELECT * FROM tsb_produits,tsb_stocks where pr_categorie="Alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk';
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
                                                <input name="st_quantite[]" type="hidden" value="<?php  echo $row['st_quantite']; ?>">
                                                <input name="st_prix_achat[]" type="number" style="width: 50px;" placeholder="Prix">
                                                <input name="st_quantite_add[]" type="number" style="width: 40px;" placeholder="Qté">
                                                <input class="champ_ristourne ristourne_individuelle" name="ristourne[]" type="number" style="width: 70px;" placeholder="Ristourne">
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <input name="pr_id[]" type="hidden" value="<?php  echo $row['pr_id']; ?>">
                                <input name="st_id[]" type="hidden" value="<?php  echo $row['st_id']; ?>">
                                <input name="st_date[]" type="hidden"  value="<?php echo date("Y/m/d"); ?>">

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
                                $sqlSelect = 'SELECT * FROM tsb_produits,tsb_stocks where pr_categorie="Non alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk';
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
                                                <input name="st_quantite[]" type="hidden" value="<?php  echo $row['st_quantite']; ?>">
                                                <input name="st_prix_achat[]" type="number" style="width: 50px;" placeholder="Prix">
                                                <input name="st_quantite_add[]" type="number" style="width: 40px;" placeholder="Qté">
                                                <input class="champ_ristourne ristourne-individuelle" name="ristourne[]" type="number" style="width: 70px;" placeholder="Ristourne">
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <input name="pr_id[]" type="hidden" value="<?php  echo $row['pr_id']; ?>">
                                <input name="st_id[]" type="hidden" value="<?php  echo $row['st_id']; ?>">
                                <input name="st_date[]" type="hidden"  value="<?php echo date("Y/m/d"); ?>">
                            
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
                                $sqlSelect = 'SELECT * FROM tsb_produits,tsb_stocks where pr_categorie!="Alcoolisé" and pr_categorie!="Non alcoolisé" and tsb_produits.pr_id=tsb_stocks.pr_id_fk';
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
                                                <input name="st_quantite[]" type="hidden" value="<?php  echo $row['st_quantite']; ?>">
                                                <input name="st_prix_achat[]" type="number" style="width: 50px;" placeholder="Prix">
                                                <input name="st_quantite_add[]" type="number" style="width: 40px;" placeholder="Qté">
                                                <input class="champ_ristourne ristourne-individuelle" name="ristourne[]" type="number" style="width: 70px;" placeholder="Ristourne">

                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <input name="pr_id[]" type="hidden" value="<?php  echo $row['pr_id']; ?>">
                                <input name="st_id[]" type="hidden" value="<?php  echo $row['st_id']; ?>">
                                <input name="st_date[]" type="hidden"  value="<?php echo date("Y/m/d"); ?>">
                            
                            <?php } } ?>


                        </ul>

                    </div>
                </div>
                <!-- * Autres tab -->

            </div>

            <br> <br>

            <div class="form-button-group">

                <div class="form-group basic">
                    <div class="input-wrapper">

                    <?php
                        $sqlSelect = "SELECT * FROM tsb_fournisseurs";
                        $result = $bdd->selectAnneeSem($sqlSelect);
                        if (! empty($result)) {?>

                            <select name="fo_id" class="form-control form-select" required>
                                <option value="">- Fournisseurs - </option>
                                <?php foreach ($result as $row) { ?>
                                <option value="<?php  echo $row['fo_id']; ?>"><?php  echo $row['fo_name']; ?></option>
                                <?php } ?> 
                            </select>

                        <?php } ?> 
                    </div>
                </div>

                <button name="save" type="submit" class="btn btn-primary btn-block" style="margin-left: 15px;">Ajouter au magasin</button>
            </div>
        </form>

    </div>
    <script>
        const slideButton = document.getElementById('toggle-button');
        var inputs = document.querySelectorAll('.champ_ristourne');
        
        slideButton.addEventListener('change', function() {
            inputs.forEach(function(input) {
                // qffiche ou cache les inputs selcetionner 
                input.classList.toggle('active_rist');
            });
        });
    </script>

   

    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
        <!-- <div class="appBottomMenu">
            <a href="index-2.html" class="item">
                <div class="col">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
            </a>
            <a href="app-components.html" class="item">
                <div class="col">
                    <ion-icon name="cube-outline"></ion-icon>
                </div>
            </a>
            <a href="page-chat.html" class="item">
                <div class="col">
                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    <span class="badge badge-danger">5</span>
                </div>
            </a>
            <a href="../pages/produit_list.php" class="item">
                <div class="col">
                    <ion-icon name="layers-outline"></ion-icon>
                </div>
            </a>
            <a href="#sidebarPanel" class="item" data-bs-toggle="offcanvas">
                <div class="col">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </a>
        </div> -->
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarPanel">
        <div class="offcanvas-body">
            <!-- profile box -->
            <div class="profileBox">
                <div class="image-wrapper">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded">
                </div>
                <div class="in">
                    <strong>Julian Gruber</strong>
                    <div class="text-muted">
                        <ion-icon name="location"></ion-icon>
                        California
                    </div>
                </div>
                <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class="listview flush transparent no-line image-listview mt-2">
                <li>
                    <a href="index-2.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Discover
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-components.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="cube-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Components
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-pages.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="layers-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Pages</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="page-chat.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Chat</div>
                            <span class="badge badge-danger">5</span>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="moon-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Dark Mode</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodesidebar">
                                <label class="form-check-label" for="darkmodesidebar"></label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="listview-title mt-2 mb-1">
                <span>Friends</span>
            </div>
            <ul class="listview image-listview flush transparent no-line">
                <li>
                    <a href="page-chat.html" class="item">
                        <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                        <div class="in">
                            <div>Sophie Asveld</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="page-chat.html" class="item">
                        <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                        <div class="in">
                            <div>Sebastian Bennett</div>
                            <span class="badge badge-danger">6</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="page-chat.html" class="item">
                        <img src="assets/img/sample/avatar/avatar10.jpg" alt="image" class="image">
                        <div class="in">
                            <div>Beth Murphy</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="page-chat.html" class="item">
                        <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                        <div class="in">
                            <div>Amelia Cabal</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="page-chat.html" class="item">
                        <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">
                        <div class="in">
                            <div>Henry Doe</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar buttons -->
        <div class="sidebar-buttons">
            <a href="#" class="button">
                <ion-icon name="person-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="archive-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="settings-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="log-out-outline"></ion-icon>
            </a>
        </div>
        <!-- * sidebar buttons -->
    </div>
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