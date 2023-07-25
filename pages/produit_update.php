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
        <div class="pageTitle">Editer Produits</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full mt-2 mb-2">
            <div class="section-title">Editer produit</div>
            <div class="wide-block pb-1 pt-2">

                <?php
                    $pr_id = $_GET['pr_id'];

                    $sqlSelect = "SELECT 
                                        tsb_produits.pr_designation as pr_designation, 
                                        tsb_produits.pr_prix_vente as pr_prix_vente, 
                                        tsb_produits.pr_categorie as pr_categorie, 
                                        tsb_stocks.st_id as st_id,
                                        tsb_stocks.pr_id_fk as pr_id_fk 
                                    FROM 
                                        tsb_produits, tsb_stocks
                                    WHERE 
                                        tsb_produits.pr_id=$pr_id
                                    AND 
                                        tsb_stocks.pr_id_fk=$pr_id";

                    $result = $bdd->selectEtu($sqlSelect);
                    if (! empty($result)) { 
                        foreach ($result as $row) {
                ?>

                    <form method="post" action="../functions/produit_add.func.php">

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="form-label" for="name5">Désignation</label>
                                <input name="pr_designation" type="text" class="form-control" id="name5" value="<?php  echo $row['pr_designation']; ?>"
                                
                                    autocomplete="off">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                                
                            </div>
                        </div>

                        <input name="pr_id" type="hidden" class="form-control" id="name5" value="<?php  echo $pr_id; ?>">
                        <input name="st_id" type="hidden" class="form-control" id="name5" value="<?php  echo $row['st_id']; ?>">
                        <input name="pr_id_fk" type="hidden" class="form-control" id="name5" value="<?php  echo $row['pr_id_fk']; ?>">

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="form-label" for="email5">Prix de vente</label>
                                <input name="pr_prix_vente" type="tel" class="form-control" id="email5" value="<?php  echo $row['pr_prix_vente']; ?>"
                                    autocomplete="off">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="form-label" for="city5">Catégorie</label>
                                <select name="pr_categorie" class="form-control form-select" id="city5">
                                    <option value="<?php  echo $row['pr_categorie']; ?>"><?php  echo $row['pr_categorie']; ?></option>
                                    <option value="Alcoolisé">Alcoolisé</option>
                                    <option value="Non alcoolisé">Non alcoolisé</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        </div>

                        <div class="section-title">Supprimer le produit</div>
                        <div class="wide-block pb-1 pt-2">
                            <button name="delete_produit" type="submit" class="btn-danger">Supprimer</button>
                        </div>

                        <div class="form-button-group">
                            <button name="save_udpate_produit" type="submit" class="btn btn-primary btn-block btn-lg">Enregistrer les modifications</button>
                        </div>

                        
                    </form>

                <?php } } ?>

            </div>
        </div>

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    
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