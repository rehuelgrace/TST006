<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Home | ARMY World"?></title>
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
</head>
<body>
	<div id="latar">
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
				<img src="img/tulisan ARMY.png">
			</div>
			<ul>
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="data.php">Data Anggota</a></li>
			</ul>
		</div>
		<div class="about">
			<h1>Welcome to ARMY WORLD</h1>
			<br><br><br>
			<a href="logout.php">Logout</a>
		</div>
		<!-- 		<div class="button">
			<a href="#" class="btn">WELCOME</a>
			<a href="#" class="btn">ARMY KINGDOM</a>
		</div> -->
	</div>
</body>
</html>