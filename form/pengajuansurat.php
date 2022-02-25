
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

            include 'koneksi.php';

            $username=$_SESSION['username'];
            $query = "SELECT * FROM user WHERE username='$username'";
            $result = mysqli_query($koneksi, $query);
           
           $id_author=$_SESSION['id_user'];
           $query = "SELECT * FROM sk_belum_pernah_menikah WHERE id_user='$id_author";
           $res = mysqli_query($koneksi, $query);
           ?>

            <?php
            if (mysqli_num_rows($result)>0) {
              $data_user = mysqli_fetch_array($result);
              $_SESSION["id_user"] = $data_user["id_user"];
              $_SESSION["nama"] = $data_user["nama"];
              $_SESSION["telepon"] = $data_user["telepon"];
              $_SESSION["level"] = $data_user["level"];
              $_SESSION["alamat"] = $data_user["alamat"];
             
            }
            ?>

<div class="head">
      <img src="images/kop.png" align="center">
    </div>

      <h2 class="alert-primary text-center mt-5">STATUS PENGAJUAN SURAT</h2>
      <small><center><b>Cek pengajuan surat Anda pada tabel di bawah ini !</small></center></b>
      


      <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col" align="center">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Status Surat</th>
      <th scope="col">Unduh Surat</th>

    </tr>
  </thead>
  <?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi, "select * from sk_belum_pernah_menikah");
while ($tampil = mysqli_fetch_array($ambildata)){
echo "
  <tbody>
  <tr>
  <td>$no</td>
    <td>$tampil[createdAt]</td>
    <td>$tampil[id_form]</td>
    <td><button>Surat disetujui</button></td>
    <td><button>Unduh Surat</button></td>
    
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
