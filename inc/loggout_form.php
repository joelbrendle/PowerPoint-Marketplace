<?php

    if($_POST["loggout"]) {

        session_start();

        unset($_SESSION["account"]);

        header("Location: ../login.php");
        
    } else {
        echo "fail";
    }

?>