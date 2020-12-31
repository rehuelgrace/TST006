<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Register | ARMY World</title>
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
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Data Anggota</a></li>
			</ul>
    </div>
    <br><br>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Register
            </div>
            <div class="card-body">
              <?php require_once 'messages.php'; ?>
              <form action="config_signup.php" method="POST">
                Username: <br/> <input type="text" name="username" required/><br/><br/>
                Email: <br/> <input type="text" name="email" required/><br/><br/>
                Password: <br/> <input type="text" name="password" required/><br/><br/>
                Confirm Password: <br/> <input type="text" name="password_confirm" required/><br/><br/>
                         
                <button type="submit" class="btn btn-success">REGISTER</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <br><br><a href="login.php"><p> Sudah punya akun? Klik DISINI</p>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </div>
  </body>
</html>