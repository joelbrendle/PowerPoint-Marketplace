<?php

if($_GET["id"]) {

    include("db.php");

    $sql = "DELETE FROM powerpoints WHERE id = ".$_GET["id"].";";

    if ($mysqli->query($sql) == TRUE) {
        header("Location: ../profile.php");

        // echo "<script>history.go(-1);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    


}


?>