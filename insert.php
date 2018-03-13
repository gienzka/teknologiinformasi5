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

$sql = "INSERT INTO pengajuanformulir(nama, email, usia, alamat, status) VALUES ('" .$_POST["nama"]. "','".$_POST["email"]."','".$_POST["usia"]."','".$_POST["alamat"]."','".$_POST["status"]."')";

echo $sql;
$result = $conn->query($sql);

$conn->close();
?>
<br>
                     <input type="button" value="Back" onclick="location='index.php'" />