<?php 

    include '../../../functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('pages/user_login.php');</script>";
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
    <meta name="description" content="TogetSuite | BAR, ERP, CRM">
    <meta name="keywords" content="TogetSuite | BAR, ERP, CRM" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icon/192x192.png">
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
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Initialisation (Mise à zéro)</div>
        
    </div>
    <!-- * App Header -->

    
     <!-- App Capsule -->
     <div id="appCapsule">

        <div class="error-page">
            <div class="icon-box text-danger">
                <ion-icon name="alert-circle"></ion-icon>
            </div>
            <h1 class="title">Mise à zéro</h1>
            <div class="text mb-5">
                Cette opération réinitialise les stocks à zéro
            </div>

            <form action="../functions/stock_initialize.func.php" method="post">

            <?php 
                        $sqlSelect = "SELECT * FROM tsb_stocks";
                        $result = $bdd->selectEtu($sqlSelect);
                        if (! empty($result)) {

                            foreach ($result as $row) {
                    ?>
                    <input name="pr_id_fk[]" type="hidden" value="<?php  echo $row['pr_id_fk']; ?>">
                    <input name="st_id[]" type="hidden" value="<?php  echo $row['st_id']; ?>">  
                    <input name="st_date[]" type="hidden" value="<?php echo date("Y/m/d"); ?>">  

                <?php } } ?>


                
                


                <div class="fixed-footer">
                    <div class="row">
                        <div class="col-12">
                            <button name="save" type="submit" class="btn btn-primary btn-lg btn-block">Initialiser maintenant</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

       

    </div>
    <!-- * App Capsule -->
    

    

    

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

</body>

</html>