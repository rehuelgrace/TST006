<?php

session_start();

$data = $_POST;

if ($data['password'] !== $data['password_confirm']){
	die('Password and confirm password should match!');
	/*header('Location: signup.php');*/
	exit;
}

$dsn = "mysql:dbname=dbtst;host=localhost";
$dbUser = "root";
$dbPassword = "";

try{
	$conn = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $exception){
	$_SESSION['messages'][]='Connection failed: '. $exception->getMessage();
	header('Location: signup.php');
	exit;
}

$stat = $conn->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
if($stat){
	$stat->execute([
		':username' => $data['username'],
		':email' => $data['email'],
		]);
	$result = $stat->fetchAll(PDO::FETCH_ASSOC);
	if (!empty($result)){
		die('Username and email already exist!');
		/*header('Location: signup.php');*/
		exit;
	}
}

$stat = $conn->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
if ($stat){
	$result = $stat->execute([
		':username' => $data['username'],
		':email' => $data['email'],
		':password' => $data['password'],
		]);
	if ($result){

		$_SESSION['token'] = hash('sha256',uniqid());
		$email = $data['email'];
		$message = sprintf(
			'Hi %s ! Please confirm registration http://localhost/TST006/confirm.php?%s',
			$data['username'],
				http_build_query([
					'token' => $_SESSION['token'],
					'email' => $email
					])
		);

		$headers = 'From: ARMYWorld@corp.com';
		mail($email, '[ARMY WORLD] User Registration', $message, $headers);
		$_SESSION['messages'][] = 'Registration successfully. Check your email for confirmation';
		header('Location: signup.php');
		exit;
	}
}