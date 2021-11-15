<?php

    include("db.php");

    if($_POST["editpp"]) {
        // $uploaddir = "../storage/powerpoints/";
        // $uploadfile = $uploaddir . basename($_FILES['ppfile']['name']);    
        session_start();

        $sql = "UPDATE powerpoints SET title = '" . $_POST['title'] . "', tinyinfo = '" . $_POST['desc'] . "' WHERE author LIKE " . $_SESSION["account"] . ";";
        
        // 
        // $sql .= "'".$_SESSION["account"]."'";
        //

        /*$sqluser = "SELECT id FROM users where username LIKE '" . $_SESSION["account"] . "';";

        echo $sqluser;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql .= $row["id"];
                echo $row["id"];
            }
        }*/


        // $sql .= ",'".basename($_FILES['ppfile']['name'])."');";

        if ($mysqli->query($sql) == TRUE) {
            echo '<script>alert("PowerPoint wurde aktualisiert"); window.location.replace("../profile.php");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
    } else {
        echo "fail";
    }

?>