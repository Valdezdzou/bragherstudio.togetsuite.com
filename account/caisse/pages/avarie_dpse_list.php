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
<body  onload="updateData()">
    

    <div class="header-large-title">
        <h1 class="title">HISTORIQUES DES DEPENSES</h1>
    </div>

    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="../pages/index.php" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Toutes les depenses</div>
        <div class="right"></div>
    </div>

    <div class="listview-title mt-2">Depenses par produits
                    <span> 
                        <label for="date">Sélectionnez une date :</label>
                        <input type="date" value="<?php echo date('Y-m-d'); ?>"id="date" name="date" onchange="updateData()">
                    </span> 
                    <code> 
                        <a id="exporter" href="./depense_pdf.php">Exporter</a>
                    </code> 
    </div>
    
    <table>
        <thead>
        <tr>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>prix vente</th>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>quantité</th>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>valeur</th>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>motif</th>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>date</th>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>type</th>
            <th style='padding: 10px; width: 300px; font-size: 16px;'>Designation</th> 
        </tr>
        </thead>

        <tbody id="List">
        </tbody>
    </table>
    <script>
            function updateData() {
                console.log("OK!");
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("List").innerHTML = this.responseText;
                    }
                };
                var selectedDate = document.getElementById("date").value;
                if (selectedDate == "") {
                    selectedDate = new Date().toISOString().slice(0,10);
                }
                xhttp.open("GET", "../functions/get_depense.php?date=" + selectedDate, true);
                xhttp.send();
            }
            
            document.getElementById("exporter").addEventListener("click", function(event){
                var date = document.getElementById("date").value;
                var url= this.getAttribute("href")+ "?date=" + encodeURIComponent(date);
                this.setAttribute("href", url);
            });
        </script>
    
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