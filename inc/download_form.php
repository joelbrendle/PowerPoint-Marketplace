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
            $file_url = '../storage/powerpoints/'.$filename;

            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file_url).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_url));
            readfile($file_url);
            exit;

            // echo "<script>history.go(-1);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
    } else {
        echo "fail";
    }


?>