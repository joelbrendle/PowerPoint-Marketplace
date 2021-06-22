<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'blogjoel_ppmarketplace';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    if($mysqli->connect_errno ) {
    // printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
    }
    // printf('Connected successfully.<br />');(

?>

<?php


?>