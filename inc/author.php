<?php

    function getAuthor($id) {
        
        include("db.php");

        if(isset($id)) {

            $sql = "SELECT * FROM users WHERE id LIKE ".$id." LIMIT 1;";

            $result = $mysqli->query($sql);

            while ($row = $result->fetch_assoc()) {
                return $row["username"];   
            }
   
        } else {
            return "unknown";
        }


    }

?>