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
/*echo "Connected successfully";*/
/*$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$desc = $_POST['desc'];
$sql = "INSERT INTO t_profile (name, email, birthday, description) VALUES ('$name','$email','$birthday','$desc')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
?>