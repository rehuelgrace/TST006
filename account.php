<?php

session_start();

if (empty($_SESSION['username'])){
	die('You have to be logged in to visit this page');
}

header('Location: home.php');