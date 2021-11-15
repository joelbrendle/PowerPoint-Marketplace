<?php

    include("db.php");

    if($_POST["uploadpp"]) {
        $uploaddir = "../storage/powerpoints/";
        $uploadfile = $uploaddir . basename($_FILES['ppfile']['name']);    

        $sql = "INSERT INTO powerpoints (title, tinyinfo, fach, filename, created, author, img) VALUES ('" . $_POST['title'] . "','" . $_POST['desc'] . "','" . $_POST['fach'] . "','" . basename($_FILES['ppfile']['name']) . "','" . date('Y:m:d') . "',";
        
        session_start();
        $sql .= "'".$_SESSION["account"]."'";
        //

        /*$sqluser = "SELECT id FROM users where username LIKE '" . $_SESSION["account"] . "';";

        echo $sqluser;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql .= $row["id"];
                echo $row["id"];
            }
        }*/


        $sql .= ",'".basename($_FILES['ppfile']['name'])."');";

        if ($mysqli->query($sql) == TRUE) {
            if (move_uploaded_file($_FILES['ppfile']['tmp_name'], $uploadfile)) {
                echo '<script>alert("PowerPoint wurde erstellt"); window.location.replace("../profile.php");</script>';
                //header("Location: ../profile.php");
            } else {
                echo "Möglicherweise eine Dateiupload-Attacke!\n";
            }
        
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
    } else {
        echo "fail";
    }

?>