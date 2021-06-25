<?php

    include("db.php");

    $downloads = 0;
    $filename = "";

    if($_POST["download"]) {

        $sql = "SELECT * FROM powerpoints WHERE id LIKE '". $_POST['id'] . "';";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $downloads = (int) $row["downloads"] + 1;
                $filename = $row["filename"];
            }
        }

        $sql = "UPDATE powerpoints SET downloads = " . $downloads . " WHERE id LIKE ". $_POST['id'] . ";";

        if ($mysqli->query($sql) == TRUE) {
            $file_url = 'storage/powerpoints/'.$filename;
            header('Content-Type: application/vnd.ms-powerpoint');
            header("Content-Transfer-Encoding: Binary"); 
            header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_url));
            flush(); // Flush system output buffer
            readfile($file_url); 

            echo "<script>history.go(-1);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
    } else {
        echo "fail";
    }

?>