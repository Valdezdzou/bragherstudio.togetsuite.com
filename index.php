<?php 
 
    include 'functions/config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('pages/user_login.php');</script>";
        exit();	
	}
?>

<?php

    require_once 'functions/config.php';

    $us_phone = $_SESSION['togetsuite_bar']['us_phone'];
    $sql = "SELECT * from tsb_users where us_phone = (:us_phone);";
    $query = $bdd -> prepare($sql);
    $query-> bindParam(':us_phone', $us_phone, PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_OBJ);
    $cnt=1;	
   
	
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
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
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
                TogetSuite | BAR
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

            <div class="header-large-title">
                <h1 class="title">BAR</h1>
                <h4 class="subtitle">Welcome to TogetSuite BAR</h4>
                <?php echo $_SESSION['togetsuite_bar']['regime'];?>
            </div>

            <!-- stocks  -->
                
                <div class="section mt-3 mb-3">
                <div class="card">

                    <?php 
                        $con = new mysqli('localhost','root','','togetsuite_bar');
                        $query = $con->query("
                            SELECT
                                pr_id_fk,
                                st_quantite,
                                pr_designation
                            FROM 
                                tsb_stocks,tsb_produits
                            WHERE pr_id_fk=pr_id  and st_status='magasin' ");

                        foreach($query as $data){
                            $month[] = $data['pr_id_fk'];
                            $amount[] = $data['st_quantite'];
                        }

                        $ss = $con->query("
                        SELECT
                            pr_id_fk,
                            stc_quantite,
                            pr_designation
                        FROM 
                            tsb_stocks,tsb_produits
                        WHERE pr_id_fk=pr_id and st_status='comptoir'");

                    foreach($ss as $data){
                        $monthc[] = $data['pr_id_fk'];
                        $amountc[] = $data['stc_quantite'];
                    }

                    ?>
                    <div class="filter_graph_vente">
                        <label for="graph-select_stock">Choisir le stock:</label>
                        <select id="graph-select_stock">
                            <option>magasin</option>
                            <option>comptoir</option>
                        </select>
                    </div>
                    <canvas id="myChart" class="card-img-top"></canvas>

                   
                    
                    <div class="card-body">

                        <h6 class="card-title">Stocks</h6>
                        <p>Legende</p> 
                        <div class="horizontal-text" style=" display: flex; flex-wrap: wrap;">
                    <?php
                        foreach ($query as $row) {
                        ?>
                            <span class="text" style=" flex: 0 0 30%; margin-right: 10px;"><?php  echo $row['pr_id_fk']; ?>-<?php  echo $row['pr_designation']; ?></span>
            
                    <?php } ?>
                       </div>
                        <p class="card-text">
                            Total des boissons magasin.
                        </p>
                        
                    </div>

                </div>
            </div>

            

            <!-- ventes  -->
            <div class="section mt-2">
                <div class="card">
                    <div class="filter_graph_vente">
                        <label for="graph-select">Choisir un filtre pour la periode :</label>
                        <select id="graph-select">
                            <option>La journée</option>
                            <option>Les 07 derniers jours</option>
                            <option>Le mois en cours</option>
                            <option>Le Trimestre en cours</option>
                        </select>
                    </div>
                    <canvas id="graph_vente" class="card-img-top"></canvas>
                    
                    <div class="card-body">
                        <h5 class="card-title">Ventes</h5>
                        <p class="card-text">Produits les plus vendus</p>
                    </div>
                </div>
            </div>
            
            <!-- ristournes  -->
            <div class="section mt-2">
                <div class="card">
                    <div class="filter_graph_vente">
                        <label for="graph-select2">Choisir une methode de filtrage :</label>
                        <select id="graph-select2">
                            <option>trimestriel</option>
                            <option>mensuel</option>
                        </select>
                    </div>
                    <canvas id="graph_ristourne" class="card-img-top"></canvas>
                    
                    <div class="card-body">
                        <h5 class="card-title">Ristournes</h5>
                        <p class="card-text">Bilan de vos ristournes</p>
                    </div>
                </div>
            </div>

            <!-- app footer -->
            
            <!-- * app footer -->

        </div>
        <!-- * App Capsule -->


        <!-- App Bottom Menu -->
        
        <!-- * App Bottom Menu -->
        <?php require_once './partials/_bottomMenu.php'?>
        <!-- App Sidebar -->
        <?php require_once './partials/_sidebar.php'?>
        <!-- * App Sidebar -->

        <!-- welcome notification  -->
        <!-- <div id="notification-welcome" class="notification-box">
            <div class="notification-dialog android-style">
                <div class="notification-header">
                    <div class="in">
                        <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                        <strong>TogetSuite Bar</strong>
                        <span>just now</span>
                    </div>
                    <a href="#" class="close-button">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="notification-content">
                    <div class="in">
                        <h3 class="subtitle">Welcome to TogetSuite Bar</h3>
                        <div class="text">
                            Organiser & 
                            Gérer votre Bar en toute simplicité
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- * welcome notification -->


        <!-- graph ventes -->
        <?php
            // Connexion à la base de données
            $con = new mysqli('localhost', 'root', '', 'togetsuite_bar');

            // Exécution de la requête SQL pour avoir les ventes cloturer par jour
            $query = $con->query("
                SELECT SUM(pr_prix_vente * fa_quantite) AS total, DATE(fa_date) as date
                FROM tsb_factures
                WHERE fa_status = 'Pay' AND fa_date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
                GROUP BY DATE(fa_date)");

            // Stockage des résultats dans deux tableaux date et total
            $date = array();
            $total = array();
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $date[] = $row['date'];
                    $total[] = $row['total'];
                }
            }
            // -----------------------------requette pour le mois en cours-----------------------
            
            $query = $con->query("
                SELECT SUM(pr_prix_vente * fa_quantite) AS total, DATE(fa_date) as date
                FROM tsb_factures
                WHERE fa_status = 'Pay' AND MONTH(fa_date) = MONTH(CURDATE()) AND YEAR(fa_date) = YEAR(CURDATE())
                GROUP BY DATE(fa_date)");

            // Stockage des résultats dans deux tableaux date et total
            $date_mois = array();
            $total_mois = array();
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $date_mois[] = $row['date'];
                    $total_mois[] = $row['total'];
                }
            }
            // ---------------------------------requette pour le trimestre en cours----------------------------
            
            $query = $con->query("
                SELECT SUM(pr_prix_vente * fa_quantite) AS total, DATE(fa_date) as date
                FROM tsb_factures
                WHERE fa_status = 'Pay'
                AND YEAR(fa_date) = YEAR(CURRENT_DATE)
                AND MONTH(fa_date) BETWEEN MONTH(CURRENT_DATE) - 2 AND MONTH(CURRENT_DATE)
                GROUP BY DATE(fa_date)");

            // Stockage des résultats dans deux tableaux date et total
            $date_trimestre = array();
            $total_trimestre = array();
            if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $date_trimestre[] = $row['date'];
                $total_trimestre[] = $row['total'];
            }
            }
            // -----------------------------requette pour la journée-----------------------
            
            $query = $con->query("
                SELECT pr_designation AS nom, SUM(pr_prix_vente * fa_quantite) AS total
                FROM tsb_factures
                WHERE fa_status = 'Pay' AND fa_date = CURDATE()
                GROUP BY pr_designation");

            // Stockage des résultats dans deux tableaux date et total
            $produits = array();
            $ventes = array();
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $produits[] = $row['nom'];
                    $ventes[] = $row['total'];
                }
            }
// -------------------------------------------requette pour ristourne---------------------------------------------------------
            
// ----------------------------------trimestriel-------------------------
            $annee = date('Y');
            $query = $con->query("
                SELECT YEAR(hs.st_date) AS annee, 
                    CONCAT('T', QUARTER(hs.st_date)) AS trimestre, 
                    SUM(hs.stc_quantite_add * r.v_ristourne) AS ristourne_totale_par_trimestre
                FROM tsb_historique_stocks hs
                INNER JOIN tsb_produits p ON hs.pr_id_fk = p.pr_id
                INNER JOIN tsb_ristourne r ON r.pr_designation = p.pr_designation
                WHERE YEAR(hs.st_date) = $annee AND hs.st_status = 'magasin' AND r.regime = 'A'
                GROUP BY annee, trimestre
                ORDER BY trimestre");

            // Stockage des résultats dans deux tableaux date et total
            $trimestre = array();
            $valeur = array();
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $trimestre[] = $row['trimestre'];
                    $valeur[] = $row['ristourne_totale_par_trimestre'];
                }
            }
// ---------------------------------mensuel--------------------------------------
            $query = $con->query("
                SELECT MONTH(hs.st_date) AS mois, 
                        SUM(hs.stc_quantite_add * r.v_ristourne) AS ristourne_totale_par_mois
                FROM tsb_historique_stocks hs
                INNER JOIN tsb_produits p ON hs.pr_id_fk = p.pr_id
                INNER JOIN tsb_ristourne r ON r.pr_designation = p.pr_designation
                WHERE YEAR(hs.st_date) = $annee AND hs.st_status = 'magasin' AND r.regime = 'A'
                GROUP BY mois
                ORDER BY mois");

            // Stockage des résultats dans deux tableaux date et total
            $mensuel = array();
            $valeur_mois = array();
            $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $formatter->setPattern('MMMM'); // définir le format pour le nom du mois
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $mensuel[] = $formatter->format(mktime(0, 0, 0, $row['mois'], 1));
                    $valeur_mois[] = $row['ristourne_totale_par_mois'];
                }
            }


            // Fermeture de la connexion
            $con->close();
        ?>



        <script>
            // localisation des balises html pour l'envoi des donnees
            const graphSelect = document.getElementById('graph-select');
            const vente = document.getElementById('graph_vente').getContext('2d');

            function loadGraph(selectedGraph) {
            switch (selectedGraph) {
                case 'La journée':
                    if (window.myChart !== undefined) {
                        window.myChart.destroy();
                    }
                    var data = {
                        // donnee en X
                        labels: <?php echo json_encode($produits) ?>,
                        datasets: [{
                        label: 'Courbe des ventes f(produits)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($ventes) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options = {
                        scales: {
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                        }
                    };
                    window.myChart = new Chart(vente, {
                        type: 'line',
                        data: data,
                        options: options
                    });
                break;
                case 'Les 07 derniers jours':
                    if (window.myChart !== undefined) {
                        window.myChart.destroy();
                    }
                    var data1 = {
                        // donnee en X
                        labels: <?php echo json_encode($date) ?>,
                        datasets: [{
                        label: 'Courbe des ventes f(jours)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($total) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options1 = {
                        scales: {
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                        }
                    };
                    window.myChart = new Chart(vente, {
                        type: 'line',
                        data: data1,
                        options: options1
                    });
                break;
                case 'Le mois en cours':
                    if (window.myChart !== undefined) {
                        window.myChart.destroy();
                    }
                    var data2 = {
                        // donnee en X
                        labels: <?php echo json_encode($date_mois) ?>,
                        datasets: [{
                        label: 'Courbe des ventes f(jours)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($total_mois) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options2 = {
                        scales: {
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                        }
                    };
                    window.myChart = new Chart(vente, {
                        type: 'line',
                        data: data2,
                        options: options2
                    });
                break;
                case 'Le Trimestre en cours':
                    if (window.myChart !== undefined) {
                        window.myChart.destroy();
                    }
                    var data3 = {
                        // donnee en X
                        labels: <?php echo json_encode($date_trimestre) ?>,
                        datasets: [{
                        label: 'Courbe des ventes f(jours)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($total_trimestre) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options3 = {
                        scales: {
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                        }
                    };
                    window.myChart = new Chart(vente, {
                        type: 'line',
                        data: data3,
                        options: options3
                    });
                break;
                default:
                    var data4 = {
                        // donnee en X
                        labels: <?php echo json_encode($produits) ?>,
                        datasets: [{
                        label: 'Courbe des ventes f(produits)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($ventes) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options4 = {
                        scales: {
                        yAxes: [{
                            ticks: {
                            beginAtZero: true
                            }
                        }]
                        }
                    };
                    window.myChart = new Chart(vente, {
                        type: 'line',
                        data: data4,
                        options: options4
                    });
                break;
            }
            }

            graphSelect.addEventListener('change', function() {
            const selectedGraph = graphSelect.value;
            loadGraph(selectedGraph);
            });
        </script>
<!----------------------------------------- script graphe ristourne ------------------------------------------------->
        <script>
            // localisation des balises html pour l'envoi des donnees
            const graphSelect2 = document.getElementById('graph-select2');
            const ristourne = document.getElementById('graph_ristourne').getContext('2d');

            function loadGraph2(selectedGraph2) {
            switch (selectedGraph2) {
                case 'trimestriel':
                    if (window.myChart2 !== undefined) {
                        window.myChart2.destroy();
                    }
                    var data5 = {
                        // donnee en X
                        labels: <?php echo json_encode($trimestre) ?>,
                        datasets: [{
                        label: 'Courbe des ristournes f(trimestre)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($valeur) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options5 = {
                        scales: {
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                        }
                    };
                    window.myChart2 = new Chart(ristourne, {
                        type: 'line',
                        data: data5,
                        options: options5
                    });
                break;
                case 'mensuel':
                    if (window.myChart2 !== undefined) {
                        window.myChart2.destroy();
                    }
                    var data6 = {
                        // donnee en X
                        labels: <?php echo json_encode($mensuel) ?>,
                        datasets: [{
                        label: 'Courbe des ristournes f(mois)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($valeur_mois) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options6 = {
                        scales: {
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                        }
                    };
                    window.myChart2 = new Chart(ristourne, {
                        type: 'line',
                        data: data6,
                        options: options6
                    });
                break;
                default:
                    var data7 = {
                        // donnee en X
                        labels: <?php echo json_encode($trimestre) ?>,
                        datasets: [{
                        label: 'Courbe des ristournes f(trimestre)',
                        // valuer de la courbe 
                        data: <?php echo json_encode($valeur) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                        }]
                    };
                    var options7 = {
                        scales: {
                        yAxes: [{
                            ticks: {
                            beginAtZero: true
                            }
                        }]
                        }
                    };
                    window.myChart2 = new Chart(ristourne, {
                        type: 'line',
                        data: data7,
                        options: options7
                    });
                break;
            }
            }

            graphSelect2.addEventListener('change', function() {
            const selectedGraph2 = graphSelect2.value;
            loadGraph2(selectedGraph2);
            });

        </script>
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
        <script>
                    // === include 'setup' then 'config' above ===
            const graphSelect_stock = document.getElementById('graph-select_stock');
            let myChart3; // Déclarez la variable en dehors de la fonction pour qu'elle soit accessible partout

            function loadGraph3(selectedGraph_stock) {
                if (myChart3 !== undefined) {
                    myChart3.destroy(); // Détruisez le graphique précédent s'il existe
                }

                switch (selectedGraph_stock) {
                    case 'magasin':
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
                        }};
                        myChart3 = new Chart(document.getElementById('myChart'), config);
                        break;
                    case 'comptoir':
                        const labels_stock = <?php echo json_encode($monthc) ?>;
                        const data_stock = {
                            labels: labels_stock,
                            datasets: [{
                                label: 'Stock',
                                data: <?php echo json_encode($amountc) ?>,
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
                        const config_stock = {
                            type: 'bar',
                            data: data_stock,
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                        }};
                        myChart3 = new Chart(document.getElementById('myChart'), config_stock);
                    break;
                    default:
                        const labels_mg = <?php echo json_encode($month) ?>;
                        const data_mg = {
                            labels: labels_mg,
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
                        const config_mg = {
                            type: 'bar',
                            data: data_mg,
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                        }};
                        myChart3 = new Chart(document.getElementById('myChart'), config_mg);
                    break;
                }
            }

            graphSelect_stock.addEventListener('change', function() {
                const selectedGraph_stock= graphSelect_stock.value;
                loadGraph3(selectedGraph_stock);
            });
        </script>
 
 

        <script>
            // === include 'setup' then 'config' above ===
            const labels = <?php echo json_encode($test1) ?>;
            const data = {
                labels: labels,
                datasets: [{
                label: 'Stock en Caisse',
                data: <?php echo json_encode($test2) ?>,
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

            var myVente = new Chart(
                document.getElementById('myVente'),
                config
            );


        </script>

<style>
            .filter_graph_vente{
                width: 100%;
                margin: 10px 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .filter_graph_vente select{
                padding: 5px;
                border: none;
                border-bottom:1px solid black;
            }
            .filter_graph_vente label{
                margin-rigth: 10px;
            }
        </style>
        <!-- end -->

        <script>
            document.addEventListener('DOMContentLoaded', function() {
            const defaultGraph = 'default';
            loadGraph2(defaultGraph);
            loadGraph(defaultGraph);
            loadGraph3(defaultGraph);
            });
        </script>
        <!-- ============== Js Files ==============  -->
        <!-- Bootstrap -->
        <script src="assets/js/lib/bootstrap.min.js"></script>
        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- Splide -->
        <script src="assets/js/plugins/splide/splide.min.js"></script>
        <!-- ProgressBar js -->
        <script src="assets/js/plugins/progressbar-js/progressbar.min.js"></script>
        <!-- Base Js File -->
        <script src="assets/js/base.js"></script>

        <script>
            // Trigger welcome notification after 5 seconds
            setTimeout(() => {
                notification('notification-welcome', 5000);
            }, 2000);
        </script>

    </body>

</html>g 