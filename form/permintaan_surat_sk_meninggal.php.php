<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pengajuan Surat Elektronik</title>
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
      <small><center><b>Cek surat sebelum di tanda tangani, sesuaikan dengan dokumen pendukung !</small></center></b>
      
      <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col" align="center">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Unduh Surat</th>
      <th scope="col">Dokumen Pendukung</th>
      <th scope="col">Upload</th>
      <th scope="col">Tolak Permohonan</th>
    </tr>
  </thead>

<?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi, "select * from sk_meninggal");

while ($tampil = mysqli_fetch_array($ambildata)){
echo "
  <tbody>
  <tr>
  <td>$no</td>
    <td>$tampil[createdAt]</td>
    <td>$tampil[nama]</td>
    <td>$tampil[id_form]</td>
    <td><button>Unduh Surat</button></td>
    <td>$tampil[content]</td>
    <td><button>Upload Surat</button></td>
    <td><button>Tolak Pengajuan</button></td>
  </tr>";
  $no++;

}

?>
  </tbody>
</table>



</div>
</div>
</div>

</body>

</html>
<p align=center><b>Anda Login Sebagai  <b><?php echo $_SESSION['username']; ?></b> <a href="logout.php"> (Logout)</a>
	<center><footer>Copyright © 180010289. All Rights Reserved  </center></footer>
	</body>
