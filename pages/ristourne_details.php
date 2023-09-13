
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

    $mois = $_GET['mois'];
    $annee = $_GET['annee'];
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    $formatter->setPattern('MMMM'); // définir le format pour le nom du mois
    $nomMois = $formatter->format(mktime(0, 0, 0, $mois, 1));

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
                    <h1 class="title"><?php echo $nomMois . ' - ' . $annee;?></h1>
                </div>


                <div class="listview-title mt-2"><p>Désignations <br>  <code>date</code></p> Ristourne</div>
                
                <ul class="listview image-listview">

                    <?php
                        $sqlSelect = "  SELECT WEEK(st_date) AS semaine, st_date, r.pr_designation, SUM(stc_quantite_add * v_ristourne) AS ristourne_totale_par_jour
                        FROM tsb_historique_stocks hs
                        INNER JOIN tsb_produits p ON hs.pr_id_fk = p.pr_id
                        INNER JOIN tsb_ristourne r ON r.pr_designation = p.pr_designation
                        WHERE YEAR(st_date) = $annee AND MONTH(st_date) = $mois AND st_status = 'magasin' AND regime = 'A'
                        GROUP BY WEEK(st_date), st_date, r.pr_designation
                        ORDER BY st_date";

                        $result = $bdd->selectEtu($sqlSelect);
                        $semaine_precedente = 0;
                        $total_semaine = 0;
                        $total = 0;

                            foreach ($result as $ligne) {
                                // Récupération de la semaine, de la date, de la désignation du produit et de la ristourne totale par jour
                                $semaine = $ligne["semaine"];
                                $date = $ligne["st_date"];
                                $produit = $ligne["pr_designation"];
                                $ristourne_par_jour = $ligne["ristourne_totale_par_jour"];
                                $total += $ristourne_par_jour;
                                // Calcul de la date de début de la semaine
                                $date_debut_semaine = date("Y-m-d", strtotime($annee . "W" . $semaine . "1"));
                                // Calcul de la date de fin de la semaine
                                $date_fin_semaine = date("Y-m-d", strtotime($annee . "W" . $semaine . "7"));

                                // Vérification si la semaine a changé depuis la dernière itération
                                if ($semaine != $semaine_precedente) {
                                    // Affichage du total pour la semaine précédente
                                    if ($total_semaine > 0) {

                                        ?>
                                            <div class="listview-title mt-2 badge-primary" style="color:#fff"><code style= "color: white; font-size: 20px;"> Total semaine </code> <?php echo $total_semaine;?> XAF</div>
                                           
                                        <?php
                                    }
                                    ?>
                                        <li style="margin-top: 50px;">
                                            <div class="item">
                                                <div class="in">
                                                    <div>
                                                        Semaine du <?php echo $date_debut_semaine ?> au <?php echo $date_fin_semaine ?> 
                                                        <!-- <input type="hidden" name="fa_client_pay_no_print"  value=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    // Réinitialisation du total pour la nouvelle semaine
                                    $total_semaine = 0;
                                }
                                
                                // Affichage du résultat pour chaque jour

                                ?>
                                    
                                    <li>
                                        <div class="item">
                                            <ion-icon name="beer-outline" class="image"></ion-icon>
                                            <div class="in">
                                                <div>
                                                    <?php echo $produit; ?><br>  <code>date: <?php echo $date; ?></code>
                                                    <!-- <input type="hidden" name="pr_designation_pay" value=""> -->
                                                </div>
                                                <div>    
                                                    <span class="badge badge-success">
                                                        <?php echo $ristourne_par_jour; ?>
                                                    </span>
                                                </div>
                                
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                
                                // Ajout du montant à la ristourne totale pour la semaine en cours
                                $total_semaine += $ristourne_par_jour;
                                
                                // Mise à jour de la semaine précédente
                                $semaine_precedente = $semaine;
                            }
                            // Affichage du total pour la dernière semaine
                            if ($total_semaine > 0) {
                                ?>

                                
                                    <div class="listview-title mt-2 badge-primary" style="color:#fff"><code style= "color: white; font-size: 20px;"> Total semaine </code> <?php echo $total_semaine;?> XAF</div>
                                <?php
                            }
                    ?>
                        <div class="listview-title mt-2 badge-primary" style="color:#fff"><code> </code> <?php echo $total?> XAF</div>
                   
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


