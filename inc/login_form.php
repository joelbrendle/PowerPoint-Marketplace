<?php

    include("db.php");

    if($_POST["login"]) {

        session_start();

        $sql = "SELECT * FROM users WHERE (username LIKE '". $_POST['username'] . "' AND password LIKE '" . $_POST['password']. "') "./*OR (username LIKE '". $_POST['mail'] . "' AND password LIKE '" . $_POST['password']. "')*/";";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION["account"] = $_POST["username"];
            header("Location: ../profile.php");
        } else {
            echo "wrong login details";
        }
        
    } else {
        echo "fail";
    }

?>