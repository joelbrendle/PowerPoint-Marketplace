<?php

    include("db.php");

    if($_POST["login"]) {

        session_start();
        
        $sql = "SELECT * FROM users WHERE (username LIKE '". $_POST['username'] . "') "./*OR (username LIKE '". $_POST['mail'] . "' AND password LIKE '" . $_POST['password']. "')*/";";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if (password_verify($_POST['password'], $row['password'])) {
                    $_SESSION["account"] = $row["id"];
                } else {
                    echo "wrong login details";
                }
            }
            header("Location: ../profile.php");
        } else {
            echo "wrong login details";
        }
        
    } else {
        echo "fail";
    }

?>