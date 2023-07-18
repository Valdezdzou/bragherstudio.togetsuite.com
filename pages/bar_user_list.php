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
<html lang="zxx">

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
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Tous les utilisateurs</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader p-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#photos" role="tab">
                    Tous comptes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#videos" role="tab">
                    Manage comptes
                </a>
            </li>
        </ul>
    </div>
    <!-- * Extra Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

    <div class="tab-content mt-1">


        <!-- photos tab -->
        <div class="tab-pane fade show active" id="photos" role="tabpanel">

            <div style="margin: 18px;">Tous comptes</div>
            <div class="section full mt-1">

              
                <div class="section-title">Comptes Activés</div>
                <div class="content-header mb-05">
                    Tous les utilisateurs <code> actifs et en services</code>
                </div>

                <div class="accordion" id="accordionExample3">
                    <?php
                        $sqlSelect = 'SELECT * FROM tsb_users where us_status="Active" and us_type!="Admin"';
                        $result = $bdd->selectEtu($sqlSelect);
                        if (! empty($result)) {

                            foreach ($result as $row) {
                    ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion001">
                                    <ion-icon name="lock-open-outline"></ion-icon>
                                    <?php  echo $row['us_name']; ?>
                                </button>
                            </h2>
                            <div id="accordion001" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    <?php  echo $row['us_type']; ?>
                                </div>
                            </div>
                        </div>

                    <?php } } ?>

                </div>

                <div class="section-title">Comptes désactivés</div>
                <div class="content-header mb-05">
                    Tous les utilisateurs <code> inactifs et hors services</code>
                </div>
        
                <div class="accordion" id="accordionExample3">

                    <?php
                        $sqlSelect = 'SELECT * FROM tsb_users where us_status="Desactive"';
                        $result = $bdd->selectEtu($sqlSelect);
                        if (! empty($result)) {

                            foreach ($result as $row) {
                    ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion002">
                                    <ion-icon name="lock-closed-outline"></ion-icon>
                                    <?php  echo $row['us_name']; ?>
                                </button>
                            </h2>
                            <div id="accordion002" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    <?php  echo $row['us_type']; ?>
                                </div>
                            </div>
                        </div>

                    <?php } } ?>

                </div>

            </div>

        </div>
        <!-- * photos tab -->



        <!-- videos tab -->
        <div class="tab-pane fade" id="videos" role="tabpanel">

            <div style="margin: 18px;">Manage comptes</div>
            <div class="section full mt-1 mb-2">
                <div class="section-title">Default</div>
                <div class="content-header mb-05">
                    Tables are responsive ready with <code>.table-responsive</code>
                </div>
                
                <div class="wide-block p-0">

                    <form method="post" action="../functions/bar_user_add.func.php">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>

                                <?php
                                        $sqlSelect = 'SELECT * FROM tsb_users where us_type!="Admin"';
                                        $result = $bdd->selectEtu($sqlSelect);
                                        if (! empty($result)) {

                                            foreach ($result as $row) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <input type="hidden" name="us_id[]" readonly value="<?php  echo $row['us_id']; ?>">
                                            <th scope="row"><?php  echo $row['us_name']; ?></th>
                                            <td>
                                                <?php
                                                    $sqlSelect = 'SELECT * FROM tsb_users where us_type!="Admin"';
                                                    $result = $bdd->selectAnneeSem($sqlSelect);
                                                    if (! empty($result)){?>

                                                    <select class="form-select" name="us_status[]" aria-label="Default select example" required>
                                                        <option selected>
                                                            <?php  if ($row['us_status'] == "Active") echo $aa = 'Active'; if($row['us_status'] == "Desactive") echo $na = 'Desactive'; ?>
                                                        </option>
                                                        
                                                        <?php if($aa){?>
                                                            <option value="Desactive">Desactive</option> 
                                                        <?php } if ($na) {?> 
                                                            <option value="Active">Active</option> 
                                                        <?php } ?> 

                                                    </select>
                                                <?php }?> 
                                            </td>
                                            
                                        </tr>
                                        
                                    </tbody>

                                <?php } } ?>
                            </table>

                            <div style="margin: 18px;">
                                <button name="update_status" type="submit" class="btn btn-primary btn-sm btn-block">Save modification</button>
                            </div>
                            
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <!-- * videos tab -->

    </div>


    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    <?php require_once '../partials/_bottomMenu.php'?>
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