<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Anggota Baru | ARMY World</title>
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
              TAMBAH ANGGOTA BARU
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                
                <div class="form-group">
                  <label>ID ANGGOTA</label>
                  <input type="text" name="id" placeholder="Masukkan ID Anggota" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="name" placeholder="Masukkan Nama Anggota" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="feedback-email" placeholder="Masukkan Email Anggota" required />
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="birthday"></input>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="address" placeholder="Masukkan Alamat Anggota" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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