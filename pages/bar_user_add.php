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
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
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
        <div class="pageTitle">Utilisateurs / Gestionnaires</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full mt-2 mb-2">
            <div class="section-title">Créer un compte</div>
            <div class="wide-block pb-1 pt-2">

                <form method="post" action="../functions/bar_user_add.func.php">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="name5">Nom</label>
                            <input name="us_name" type="text" class="form-control" id="name5" placeholder="Nom et prénom"
                                autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="email5">Téléphone</label>
                            <input name="us_phone" type="tel" class="form-control" id="email5" placeholder="Numéro de téléphone"
                                autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="city5">Type de compte</label>
                            <select name="us_type" class="form-control form-select" id="city5">
                                <option value="0">Type de compte</option>
                                <option value="Admin">Administration</option>
                                <option value="Caisse">Caisse</option>
                                <option value="Service">Service</option>
                                <option value="magasinier">magasinier</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="password5">Mot de passe</label>
                            <input name="us_password" type="password" class="form-control" id="password5" placeholder="Mot de passe"
                                autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-button-group">
                        <button name="save" type="submit" class="btn btn-primary btn-block btn-lg">Créer le compte</button>
                    </div>
                </form>

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