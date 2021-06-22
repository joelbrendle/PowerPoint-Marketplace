<?php

    include("db.php");

    if($_POST["register"]) {

        $sql = "INSERT INTO users (username, mail, password) VALUES ('" . $_POST['username'] . "','" . $_POST['mail'] . "','" . $_POST['password'] . "');";

        if ($mysqli->query($sql) == TRUE) {
            echo "nice register";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
    } else {
        echo "fail";
    }

?>