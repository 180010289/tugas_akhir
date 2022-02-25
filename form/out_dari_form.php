
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Out Form</title>
  </head>
  <body>
    <div class="container">

      <?php 
      session_start();
    
      // cek apakah yang mengakses halaman ini sudah login
      if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
      }
    
      ?>



<div class="jumbotron">
  <h1 class="display-4">Pengajuan Berhasil !</h1>
  <p class="lead">Pengajuan Surat Keterangan Telah Berhasil, Silahkan Menunggu Approval Dari Admin Desa Belimbing.</p>
  <hr class="my-4">
  <p>Silahkan Klik OK Untuk Melihat Status Pengajuan Surat Anda !</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="pengajuansurat.php" role="button">OK</a>
  </p>
</div>



    </body>
    <p align=center><b>Anda Login Sebagai  <b><?php echo $_SESSION['username']; ?></b> <a href="logout.php"> (Logout)</a>
	<center><footer>Copyright © 180010289. All Rights Reserved  </center></footer>
</div>
    </html>