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
        $selectedDate = $_GET['date'];
        $selectedDate = date('Y/m/d', strtotime($selectedDate));
    }
    $sqlSelect = "  SELECT 
                        fa_client,
                        fa_code,
                        fa_phone,
                        SUM(pr_prix_vente*fa_quantite) AS prix,
                        (SELECT SUM(pr_prix_vente*fa_quantite) 
                        FROM tsb_factures 
                        WHERE fa_status='Pay' AND fa_date = '$selectedDate') AS prix_total
                    FROM 
                        tsb_factures 
                    WHERE 
                        fa_status='Pay' AND fa_date = '$selectedDate'
                    GROUP BY 
                        fa_client,
                        fa_code,
                        fa_phone";
    

    $result = $bdd->selectEtu($sqlSelect); 
    

    if (! empty($result)) {

        $total = $result[0]['prix_total'];
        foreach ($result as $row) {
?>

<li>
    <div class="item">
        <div class="in">
            <div>
                <?php  echo $row['fa_client']; ?>, Tel : <?php  echo $row['fa_phone']; ?> <br>
                <code><?php  echo $row['prix']; ?> XAF</code>
                <p class=" text-muted">
                    <?php  echo $row['fa_code']; ?>
                </p>
                <input type="hidden" name="fa_client_pay_no_print"  value="<?php  echo $row['fa_client']; ?>">
            </div>

            <span class="badge badge-danger">
                
                <a href="<?php echo "bar_etat_vente_detail.php?fa_code=$row[fa_code]";?>" class="btn"  style="color:#fff">
                    details
                </a>
            </p>
            
            
        </div>
    </div>

</li>




<?php }?>


<div class="listview-title mt-2 badge-primary" style="color:#fff"><code></code> <?php echo $total;?> XAF</div>

<?php } else {?>  


    
    <div class="error-page">
        <div class="icon-box text-danger">
            <ion-icon name="alert-circle"></ion-icon>
        </div>
        <h2 class="title">Aucune facture cloturée</h2>
    </div>

<?php }?>



