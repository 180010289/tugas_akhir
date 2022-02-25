
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Daftar Pengguna</title>
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

      <h2 class="alert-primary text-center mt-5">DAFTAR PENGGUNA SITUS</h2>
      <small><center><b>Dibawah ini adalah daftar pengguna yang terdaftar.</small></center></b>
      


      <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col" align="center">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Hak Akses</th>
      <th scope="col">Telepon</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>

<?php
include "koneksi.php";
$no=1;

$ambildata = mysqli_query($koneksi, "select * from user");



while ($tampil = mysqli_fetch_array($ambildata)){
echo "
  <tbody>
  <tr>
  <td>$no</td>
    <td>$tampil[nama]</td>
    <td>$tampil[username]</td>
    <td>$tampil[password]</td>
    <td>$tampil[level]</td>
    <td>$tampil[telepon]</td>
    <td>$tampil[alamat]</td>
    <td>
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
