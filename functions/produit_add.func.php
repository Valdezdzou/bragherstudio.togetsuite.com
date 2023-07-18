<?php 

    require_once '../functions/config.php';
    
    if (isset($_POST['save'])) {
        $pr_designation = htmlspecialchars($_POST['pr_designation']);
        $pr_prix_vente = $_POST['pr_prix_vente'];
        $pr_categorie = $_POST['pr_categorie'];
        

        $req = $bdd->query("SELECT pr_designation FROM tsb_produits WHERE pr_designation = '$pr_designation'");
		$count_pr_designation = $req->rowCount(); 


        if ($count_pr_designation == 0 ) { 

            //Ajout dans la liste des produits
            $req = $bdd->prepare("INSERT INTO tsb_produits(pr_designation,pr_prix_vente,pr_categorie) 
                                VALUES('$pr_designation','$pr_prix_vente','$pr_categorie')");
            $req->execute(array(
                'pr_designation' => $pr_designation,
                'pr_prix_vente' => $pr_prix_vente,
                'pr_categorie' => $pr_categorie
            ));

            // //Ajout et initialisation du produit en  stock
            // $req = $bdd->prepare("INSERT INTO tsb_produits(pr_id_fk,fo_id,st_quantite,stc_quantite,stc_quantite_vente,st_prix_achat,st_date) 
            //                     VALUES('$pr_id_fk','$fo_id','$st_quantite','$stc_quantite','$stc_quantite_vente','$st_prix_achat','$st_date')");
            // $req->execute(array(
            //     'pr_designation' => $pr_designation,
            //     'pr_prix_vente' => $pr_prix_vente,
            //     'pr_categorie' => $pr_categorie
            // ));

            $success = "$pr_designation ajouté avec succès !";
            //header("Location: ../pages/produit_list.php");

        } else {
            $erreur = "Le produit $pr_designation existe déjà !";
        }
            
    } 

    if (isset($_POST['save_udpate_produit'])) {
        $pr_designation = htmlspecialchars($_POST['pr_designation']);
        $pr_prix_vente = $_POST['pr_prix_vente'];
        $pr_categorie = $_POST['pr_categorie'];
        $pr_id = $_POST['pr_id'];
        
        $sql = "UPDATE tsb_produits SET pr_designation = ?, pr_prix_vente = ? , pr_categorie = ? WHERE pr_id = $pr_id";
        $bdd->prepare($sql)->execute([$pr_designation, $pr_prix_vente, $pr_categorie]);

        header("Location: ../pages/produit_list.php");

        
            
    }

    if (isset($_POST['delete_produit'])) {
        
        $pr_id = $_POST['pr_id'];
        $pr_designation = htmlspecialchars($_POST['pr_designation']);
        $st_id = $_POST['st_id'];

        
        //DELETE FROM `tsb_stocks` WHERE `tsb_stocks`.`st_id` = 323;

        $delete = $bdd->query("DELETE FROM tsb_stocks WHERE st_id = $st_id");
        $delete = $bdd->query("DELETE FROM tsb_produits WHERE pr_id = $pr_id");

        //$bdd->prepare($sql)->execute([$pr_designation, $pr_prix_vente, $pr_categorie]);

        header("Location: ../pages/produit_list.php");
        //$success = "$pr_designation supprimé dans la liste des produits et en stocks !";

        
            
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
        <div class="pageTitle">Notification</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section full mt-2">
            <div class="section-title">Message</div>
            <div class="wide-block pt-2 pb-2">

                <?php echo (isset($success))?$success:''; ?>

    
               

            </div>

        </div>

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    
    <!-- * App Sidebar -->

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
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