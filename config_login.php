<?php

session_start();

$data = $_POST;

$username = $data['username'];
$password = $data['password'];

$dsn = "mysql:dbname=dbtst;host=localhost";
$dbUser = "root";
$dbPassword = "";

try{
	$conn = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $exception){
	$_SESSION['messages'][]='Connection failed: '. $exception->getMessage();
	header('Location: login.php');
	exit;
}

$stat = $conn->prepare('SELECT * FROM users WHERE username = :username');
$stat->execute([':username'=> $username]);
$result = $stat->fetchAll(PDO::FETCH_ASSOC);

if(empty($result)){
	die("No such user with the username!");
}
$user = array_shift($result);
if($user['username']==$username && $user['password']==$password){
	echo "You have been successfully logged in!" . "<br/>";
	echo '<a href="account.php">Go to</a> my account.';
	$_SESSION['username'] = $user['username'];
} else {
	die('Incorrect username or password!');
}