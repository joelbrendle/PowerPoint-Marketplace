<?php

    include("db.php");

    if($_POST["register"]) {

        $sql = "INSERT INTO users (username, mail, password) VALUES ('" . $_POST['username'] . "','" . $_POST['mail'] . "','" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "');";

        if ($mysqli->query($sql) == TRUE) {
            echo "nice register";
            header("Location: ../profile.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
    } else {
        echo "fail";
    }

?>