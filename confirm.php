<?php
session_start();

if (empty($_GET['token']) || empty($_GET['email'])){
	header('Location: signup.php');
}
if (empty($_SESSION['token'])){
	$_SESSION['messages'][] = 'Token has been expired!';
	header('Location: signup.php');
}

$token = $_GET['token'];
$email = $_GET['email'];

if($_SESSION['token']==$token){
	$dsn = "mysql:dbname=dbtst;host=localhost";
	$dbUser = "tst006";
	$dbPassword = "";

	try{
		$conn = new PDO($dsn, $dbUser, $dbPassword);
	} catch (PDOException $exception){
		$_SESSION['messages'][]='Connection failed: '. $exception->getMessage();
		header('Location: signup.php');
		exit;
	}
	$stat = $conn->prepare('SELECT * FROM users WHERE email = :email');
	$stat->execute([':email' => $email]);
	$result = $stat->fetchAll(PDO::FETCH_ASSOC);

	if (empty($result)){
		$_SESSION['messages'][] = 'No such user!';
		header('Location: signup.php');
		exit;
	}

	$stat = $conn->prepare('UPDATE users SET active = :active WHERE email = :email');
	$result = $stat->execute([':active'=>1,':email' => $email]);

	echo "You have been successfully confirmed your registration <br/>";
	echo "<a href=login.php>Login</a>";

	unset($_SESSION['token']);
} else{
	$_SESSION['messages'][]='Token has been expired';
	header('Location: signup.php');
	exit;
}