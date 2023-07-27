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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-bpWkGWgKz2R4f5vHJ6oCJUgJ2y9p6wK+Lb4+QnI1oFkiZ4jIbFy/4sR6v6L5D7jyK4U9tK1tkP7u4r0nZ/r3fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="manifest" href="../__manifest.json">
</head>

<body>

    

    <!-- App Header -->

    <div class="header-large-title">
        <h1 class="title">IMPOTS</h1>
    </div>

    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="../pages/impot.php" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Toutes les dates</div>
        <div class="right"></div>
    </div>

    
    <!-- * App Header -->

    <!-- App Capsule -->
     
    <?php
  
    $result = $conn->query("SELECT * FROM impot");
   
   

// Début du tableau HTML

// Inclure le fichier de configuration pour établir la connexion à la base de données
    

    echo "<table style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th style='padding: 10px; width: 300px; font-size: 16px;'>Date initiale</th>";
    echo "<th style='padding: 10px; width: 300px; font-size: 16px;'>Date finale</th>";
    echo "<th style='padding: 10px; width: 300px; font-size: 16px;'>Montant</th>";
    echo "<th style='padding: 10px; width: 300px; font-size: 16px;'>Type d'impôt</th>";
    echo "<th style='padding: 10px; width: 300px; font-size: 16px;'>Actions</th>";
    echo "</tr>";

    // Utiliser une requête préparée pour éviter les injections SQL
    
        
    
    // Boucler sur les résultats de la requête et afficher les données dans le tableau
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($row['dte_initiale']) . "</td>";
        echo "<td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($row['dte_finale']) . "</td>";
        echo "<td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($row['montant']) . "</td>";
        echo "<td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($row['type_impot']) . "</td>";
        echo "<td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'>";
        echo "<a href='edit.php?id=" . $row['id'] . "'><ion-icon name='create-outline'></ion-icon></a> "; 
        echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cette date de paiement ?\")'><ion-icon name='trash-outline'></ion-icon></a>";

        echo "</td>";
        echo "</tr>";


        
    }

    echo "</table>";


// Fermeture de la connexion à la base de données
   
?>


    
    
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    
    <!-- * App Bottom Menu -->
    
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

