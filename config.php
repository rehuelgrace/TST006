<?php
/*header('Status: 301 Moved Permanently', false, 301);
header('Location: profile.php');*/
$servername = "localhost";
$database = "dbtst";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>