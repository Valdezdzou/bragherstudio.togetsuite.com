<?php 	
	session_start();
	
	$dbhost = 'localhost';
	$dbname = 'togetsuite_bar';
	$dbuser = 'root';
	$dbpswd = '';


	try {
		$bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8 ', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));		
	} catch (PDOException $e) {
		die("Une erreur est survenue lors de la connexion à la base de donnees");		
	}

	function isLogged(){
		if (isset($_SESSION['togetsuite_bar'])) {
			$logged = 1;
		}else{
			$logged = 0;
		}
		return $logged;
	}

   function search($search_term) {

        $pdo = new PDO('mysql:host=localhost;dbname=togetsuite_bar', 'root', '');
        $query = $pdo->prepare('SELECT * FROM fa_Code WHERE colonne LIKE :search_term');
        
        $search_term = '%' . $search_term . '%';
    
        // Lier la variable $search_term au paramètre :search_term de la requête préparée
        $query->bindParam(':search_term', $search_term, PDO::PARAM_STR);
    
        // Exécuter la requête
        $query->execute();
    
        // Récupérer les résultats de la requête sous forme d'un tableau associatif
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
        // Retourner les résultats de la recherche
        return $results;
    }
   
	setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');


	$stmt = $bdd->query("
                        SELECT 
                            COUNT(pr_id) AS total_produit_bar
                        FROM 
                            tsb_produits");
   
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_produit_bar = $data->total_produit_bar;
    }
    

	$stmt = $bdd->query("
                        SELECT 
                            COUNT(pr_id) AS total_produit_bar
                        FROM 
                            tsb_produits");
   
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_produit_bar = $data->total_produit_bar;
    }


	//Magasin
	$stmt = $bdd->query("
                        SELECT 
                            SUM(st_quantite) AS total_stock_bar
                        FROM 
                            tsb_stocks");
   
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_stock_bar = $data->total_stock_bar;
    }


	$stmt = $bdd->query("
                        SELECT 
                            SUM(st_quantite*st_prix_achat) AS total_stock_prix
                        FROM 
                            tsb_stocks");
   
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_stock_prix = $data->total_stock_prix;
    }

	// Comptoir
	$stmt = $bdd->query("
                        SELECT 
                            SUM(stc_quantite) AS total_stock_comptoir
                        FROM 
                            tsb_stocks");
   
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_stock_comptoir = $data->total_stock_comptoir;
    }
   

    //Total factures 
	$stmt = $bdd->query("
                        SELECT 
                            SUM(pr_prix_vente * fa_quantite) AS total_factures_open
                        FROM 
                            tsb_factures
                        WHERE
                            fa_status='Open'");
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_factures_open = $data->total_factures_open;
    }

    $stmt = $bdd->query("
                        SELECT 
                            SUM(pr_prix_vente * fa_quantite) AS total_factures_pay
                        FROM 
                            tsb_factures
                        WHERE
                            fa_status='Pay'");
    while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      	$total_factures_pay = $data->total_factures_pay;
    }



    
