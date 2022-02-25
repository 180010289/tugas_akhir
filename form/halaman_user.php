<!doctype html>
<html lang="en">
  <head>
  	<title>Pilihan Surat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <div class="container">
    <img src="images/blb.png" align="right" width="150" height="150">
    <img src="images/tbn.png" align="left" width="120" height="120">
        </head>
        <body class="img js-fullheight" style="background-image: url(images/bg1.png);">
        <section class="ftco-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">SELAMAT DATANG</h2>
                <div class="p-3 mb-2 bg-info text-white">SILAHKAN PILIH LAYANAN</div>
              </div>
            </div>
            </div>

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

            <a href="pilihan_surat_1.php"<button type="button" class="btn btn-primary btn-lg btn-block">PENGAJUAN SURAT KETERANGAN</button></a>
            <a href="pengajuansurat.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">STATUS PENGAJUAN SURAT</button></a>
            <br/>
            <br/>
              </p>
            </div>
            </div>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
  <p align=center><b>Anda Login Sebagai  <b><?php echo $_SESSION['username']; ?></b> <a href="logout.php"> (Logout)</a>


	<center><footer>Copyright © 180010289. All Rights Reserved  </center></footer>
</div>
</div>
</div>
</body>
	</body>
</html>

