<?php 
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>document.location.replace('../pages/user_login.php');</script>";
    exit();	
?> 