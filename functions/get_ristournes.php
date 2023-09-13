<?php 

    include './config.php';

	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
        exit();	
	}
?>

<?php
    use Phppot\DataSource;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

    require_once './config.php';
    require_once './DataSource.php';
    $bdd = new DataSource();
    $conn = $bdd->getConnection();
    //require_once ('functions/vendor/autoload.php');


?>
<?php
    if (isset($_GET['date'])) {
        // Récupérer la date sélectionnée
        $annee = $_GET['date'];
    }
    $sqlSelect = "  SELECT YEAR(hs.st_date) AS annee, 
                        CONCAT('T', QUARTER(hs.st_date)) AS trimestre, 
                        SUM(hs.stc_quantite_add * r.v_ristourne) AS ristourne_totale_par_trimestre
                    FROM tsb_historique_stocks hs
                    INNER JOIN tsb_produits p ON hs.pr_id_fk = p.pr_id
                    INNER JOIN tsb_ristourne r ON r.pr_designation = p.pr_designation
                    WHERE YEAR(hs.st_date) = $annee AND hs.st_status = 'magasin' AND r.regime = 'A'
                    GROUP BY annee, trimestre
                    ORDER BY trimestre";
    

    $result = $bdd->selectEtu($sqlSelect); 
    
    $total_annuel = 0;

    if (! empty($result)) {
        foreach ( $result as $ligne) {
            // Récupération de l'année, du trimestre et de la ristourne totale par trimestre
            $annee = $ligne["annee"];
            $trimestre = $ligne["trimestre"];
            $ristourne_totale = $ligne["ristourne_totale_par_trimestre"];
            $total_annuel += $ristourne_totale;
            
?>

<li>
    <div class="item">
        <div class="in">
            <div>
                Trimestre : <?php echo $trimestre ?>
                <!-- <input type="hidden" name="fa_client_pay_no_print"  value=""> -->
            </div>
        </div>
    </div>

</li>


<?php

            // Requête SQL pour récupérer les ristournes par mois pour le trimestre en cours
            $sqlSelect_mois = "SELECT MONTH(hs.st_date) AS mois, 
                                        SUM(hs.stc_quantite_add * r.v_ristourne) AS ristourne_totale_par_mois
                                FROM tsb_historique_stocks hs
                                INNER JOIN tsb_produits p ON hs.pr_id_fk = p.pr_id
                                INNER JOIN tsb_ristourne r ON r.pr_designation = p.pr_designation
                                WHERE YEAR(hs.st_date) = $annee AND QUARTER(hs.st_date) = SUBSTRING('$trimestre', 2, 1) AND hs.st_status = 'magasin' AND r.regime = 'A'
                                GROUP BY mois
                                ORDER BY mois";

            $result_mois = $bdd->selectEtu($sqlSelect_mois); 

            foreach ($result_mois as $ligne_mois) {
                // Récupération du mois et de la ristourne totale par mois
                $mois = $ligne_mois["mois"];
                $ristourne_par_mois = $ligne_mois["ristourne_totale_par_mois"];
                $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                $formatter->setPattern('MMMM'); // définir le format pour le nom du mois
                $nomMois = $formatter->format(mktime(0, 0, 0, $mois, 1)); // formater la date avec le mois et l'année
?>

<li>
    <div class="item">
        <div class="in">
            <div>
                date : <?php  echo $nomMois .' - ' . $annee; ?> <br>
                <code><?php  echo $ristourne_par_mois; ?> XAF</code>
                <!-- <input type="hidden" name="fa_client_pay_no_print"  value=""> -->
            </div>

            <span class="badge badge-danger">
                
            <a href="<?php echo "ristourne_details.php?mois=$mois&annee=$annee"; ?>" class="btn" style="color:#fff">
                details
            </a>
            </p>
            
            
        </div>
    </div>

</li>

<?php }?>




<div class="listview-title mt-2 badge-primary" style="color:#fff"><code style= "color: white; font-size: 20px;"> Total trimestriel: </code><?php echo $ristourne_totale;?> XAF</div>

<?php } ?>

<div class="listview-title mt-2 badge-primary" style="color:#fff"><code style= "color: white; font-size: 20px;"> Total Annuel: </code><?php echo $total_annuel;?> XAF</div>

<?php } else {?>  


    
    <div class="error-page">
        <div class="icon-box text-danger">
            <ion-icon name="alert-circle"></ion-icon>
        </div>
        <h2 class="title">Aucune ristourne n'a éte trouvée à cette période</h2>
    </div>

<?php }?>



