<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '1';
    $dbname = 'powerpointmarketplace';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    if($mysqli->connect_errno ) {
    // printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
    }
    // printf('Connected successfully.<br />');(

    function getCurrentUsername() {
        
        $userid = $_SESSION['account'];
        
        $sql = "SELECT * FROM users WHERE id LIKE " . $userid . ";";
		
        global $mysqli;

		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                return $row["username"];
            }
        }
    }

    function getUsernameByID($getuserid) {
        
        if(isset($getuserid)) {
            $userid = $getuserid;
                
            $sql = "SELECT * FROM users WHERE id LIKE " . $userid . ";";

            global $mysqli;

            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    return $row["username"];
                }
            }
        } else {
            return "unbekannt";
        }
    }

?>

<?php


?>
