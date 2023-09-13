<?php 

    include '../../../functions/config.php';
	if (isLogged() == 0) {
		 echo "
        <script type='text/javascript'>document.location.replace('http://localhost/bragherstudio.togetsuite.com/pages/user_login.php');</script>";
        exit();	
	}
?>

<?php
    use Phppot\DataSource;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

    require_once '../../../functions/config.php';
    require_once '../../../functions/DataSource.php';
    $bdd = new DataSource();
    $conn = $bdd->getConnection();
    //require_once ('functions/vendor/autoload.php');


?>

<?php
    if (isset($_GET['date'])) {
        // Récupérer la date sélectionnée
        $selectedDate = $_GET['date'];
        // $selectedDate = date('Y/m/d', strtotime($selectedDate));
    }
    $con = new mysqli('localhost','root','','togetsuite_bar');
        $result = $con->query("  SELECT * FROM avarie_depense 
                    WHERE type = 'depense' AND date = '$selectedDate'");

    if ($result != "") {
        foreach ($result as $row) {
?>

<tr>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['pr_prix_vente']) ?></td>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['quantite']) ?> </td>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['valeur']) ?> </td>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['motif']) ?> </td>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['date']) ?> </td>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['type']) ?> </td>
    <td style='padding: 10px; font-size: 14px; border-bottom: 1px solid #ddd;'> <?php echo htmlspecialchars($row['pr_designation']) ?> </td>
</tr>

<?php }?>


<?php } else {?>  
    <div class="error-page">
        <div class="icon-box text-danger">
            <ion-icon name="alert-circle"></ion-icon>
        </div>
        <h2 class="title">Aucune facture cloturée</h2>
    </div>
<?php }?>



