<?php

    include("db.php");

    if($_POST["username"]) {
        echo $_POST["username"];
    }

    $sql = "SELECT * FROM powerpoints";

    $result = $mysqli->query($sql);

?>