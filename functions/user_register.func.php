<?php 

    require_once '../functions/config.php';

    if (isLogged() == 1) {
        echo "
    <script type='text/javascript'>document.location.replace('../index.php');</script>";
    exit();	
    }
    
    if (isset($_POST['save'])) {
        $us_phone = htmlspecialchars($_POST['us_phone']);
        $user_name = htmlspecialchars($_POST['user_name']);
        $user_email = htmlspecialchars($_POST['user_email']);
        $user_activity = htmlspecialchars($_POST['user_activity']);
        $us_password = sha1($_POST['us_password']);
        

        $req = $bdd->query("SELECT us_phone FROM tsb_users WHERE us_phone = '$us_phone'");
		$count_us_phone = $req->rowCount(); 


        if ($count_us_phone == 0 ) { 

            $req = $bdd->prepare("INSERT INTO tsb_users(
                us_phone,
                user_name,
                user_email,
                user_activity,
                us_password) 
                                VALUES(
                                    '$us_phone',
                                    '$user_name',
                                    '$user_email',
                                    '$user_activity',
                                    '$us_password')");
            $req->execute(array(
                'us_phone' => $us_phone,
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_activity' => $user_activity,
                'us_password' => $us_password
            ));
            $_SESSION['togetsuite_bar'] = $us_phone;
            echo "
            <script type='text/javascript'>document.location.replace('../index.php');</script>";
            exit();	

        } else {
            $erreur = 'Le numéro ' .$us_phone. ' est déjà utilisé.';
        }
            
    } 