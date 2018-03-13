<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "teknologiinformasi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE pengajuanformulir SET status='".$_POST['status']. "' WHERE email='" .$_POST['email']."';";

echo $sql;
$result = $conn->query($sql);
$conn->close();
?>
<br>
                     <input type="button" value="Back" onclick="location='read.php'" />