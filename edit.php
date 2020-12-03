<?php 
  
  include('config.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM t_profile WHERE id = $id LIMIT 1";

  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data Anggota</title>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="data.php">Data Anggota</a></li>
            </ul>
    </div>
    <br><br>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA ANGGOTA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                <!-- buat id -->
                <div class="form-group">
                  <label>ID Anggota</label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Masukkan ID Anggota" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <!-- buat nama yang mau diubah -->
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Masukkan Nama Lengkap Anggota" class="form-control">
                </div>
                <!-- buat alamat yang mau diubah -->
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="address" value="<?php echo $row['address'] ?>" placeholder="Masukkan Alamat Anggota" class="form-control">
                </div>
                      
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

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