
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Rekap Pengajuan Surat Elektronik</title>
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

<div class="head">
      <img src="images/kop.png" align="center">
    </div>

      <h2 class="alert-primary text-center mt-5">REKAPAN PENGAJUAN SURAT</h2>
      <small><center><b>Daftar Pengajuan Surat</small></center></b>
      


      <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col" align="center">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Nomor Surat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> Tanggal</td>
      <td> Nama Pemohon</td>
      <td> Jenis Surat</td>
      <td> Nomor Surat</td>
    </tr>

    <th scope="row">2</th>
      <td> Tanggal</td>
      <td> Nama Pemohon</td>
      <td> Jenis Surat</td>
      <td> Nomor Surat</td>
    </tr>
    
  </tbody>
</table>

<button type="button" class="btn btn-primary btn-lg btn-block mt-5">Cetak</button>

</div>
</div>
</div>

</body>

</html>
<p align=center><b>Anda Login Sebagai  <b><?php echo $_SESSION['username']; ?></b> <a href="logout.php"> (Logout)</a>
	<center><footer>Copyright © 180010289. All Rights Reserved  </center></footer>
	</body>
