<?php 

    require_once '../../../functions/config.php';
    
    if (isset($_POST['save'])) {
    
        // command add function tsb_facture
        $pr_id_fk = $_POST['pr_id'];
        $stc_quantite = $_POST['stc_quantite'];
        $stc_quantite_add = $_POST['stc_quantite_add'];
        //$stc_quantite_vente = $_POST['stc_quantite_vente'];
        
        //Val magasin
        $st_quantite = $_POST['st_quantite'];
        $st_id = $_POST['st_id'];

    
        for ($i=0;$i<count($st_id);$i++) {
            //if($stc_quantite[$i] != 0) {
                //$stc_date[$i] = $_POST['stc_date'];
                $total_add_caisse = ((int)$stc_quantite[$i]+(int)$stc_quantite_add[$i]);
                $sql = "UPDATE tsb_stocks SET stc_quantite = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$total_add_caisse, $pr_id_fk[$i]]);


                $reste = ((int)$st_quantite[$i]-(int)$stc_quantite_add[$i]);
                $sql = "UPDATE tsb_stocks SET st_quantite = ? WHERE pr_id_fk = ?";
                $bdd->prepare($sql)->execute([$reste, $pr_id_fk[$i]]);


                // $req = $bdd->prepare("INSERT INTO  tsb_stocks_caisse(
                //     pr_id,
                //     stc_quantite,
                //     stc_quantite_vente,
                //     stc_date) VALUES(?,?,?,?)");
                // $req->execute(array(
                //     $pr_id[$i],
                //     $stc_quantite[$i],
                //     $stc_quantite_vente[$i],
                //     $stc_date[$i]
                // ));

                $success = "Stock caisse ajouté !";
                header("Location: ../pages/stock_app_caisse.php");
                //$reste = ((int)$st_quantite[$i]-(int)$stc_quantite[$i]);
                

                //$success2 = "Le stock du magasin est de $reste boissons !";
            //}
            
        }
    } 
?>


<!doctype html>
<html lang="en">

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

                <?php echo (isset($erreur))?$erreur:''; ?>

                <?php echo (isset($success))?$success:''; ?>
                <br>
                <?php echo (isset($success2))?$success2:''; ?>

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