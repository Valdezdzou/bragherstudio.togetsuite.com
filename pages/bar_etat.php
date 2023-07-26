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
        <div class="pageTitle">Etats</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">

        <ul class="listview image-listview">
            <li>
                <a href="./bar_etat_vente.php">
                    <div class="item">
                        <ion-icon name="beer-outline"  class="image"></ion-icon>
                        <div class="in">
                            <div>Toutes les ventes</div>
                            <span class="text-muted">Voir</span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="section mt-2">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Produits</h5>
                    <p class="card-text">Total des boissons Alcoolisées, Non Alcoolisées et autres enrégistrés</p>
                    <button type="button" class="btn btn-primary square me-1 btn-lg"><?php echo $total_produit_bar;?></button> <code> Disponibles</code>
                </div>
            </div>
        </div>

        <div class="section mt-2">
            <a href="http://localhost/bragherstudio.togetsuite.com/pages/bar_etat_stock.php">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Stocks magasin</h5>
                        <p class="card-text">Quantité totals des boissons Alcoolisées, Non Alcoolisées disponibles dans le magasin</p>
                        <button type="button" class="btn btn-success square me-1 btn-lg"><?php echo $total_stock_bar;?></button> <code> = </code>
                        <button type="button" class="btn btn-success square me-1 btn-lg"><?php echo $total_stock_prix;?></button><code>XAF</code>
                    </div>
                </div>
            </a>
        </div>

        <div class="section mt-2">
            <div class="card"> 
                
                <div class="card-body">
                    <h5 class="card-title">Stocks comptoir</h5>
                    <p class="card-text">Quantité totals des boissons Alcoolisées, Non Alcoolisées disponibles au comptoir</p>
                    <button type="button" class="btn btn-warning square me-1 btn-lg"><?php echo $total_stock_comptoir;?></button> <code>  </code>
                    <!-- <button type="button" class="btn btn-success square me-1 btn-lg"><?php echo $total_prix_comptoir;?></button><code>XAF</code> -->
                </div>
            </div>
        </div>

        <br>

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    <?php require_once '../partials/_bottomMenu.php'?>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <?php require_once '../partials/_sidebar.php'?>
    <!-- * App Sidebar -->

    <!-- ============== Js Files ==============  -->

    <script>
        // === include 'setup' then 'config' above ===
        const labels = <?php echo json_encode($month) ?>;
        const data = {
            labels: labels,
            datasets: [{
            label: 'Stock',
            data: <?php echo json_encode($amount) ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            },
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

    </script>

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