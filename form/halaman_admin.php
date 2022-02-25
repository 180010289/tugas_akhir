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
          
            ?>
      
            <a href="permintaan_surat.php"<button type="button" class="btn btn-primary btn-lg btn-block">PERMINTAAN PERSETUJUAN SURAT</button></a>
            <a href="rekapan.php" <button type="button" class="btn btn-primary btn-lg btn-block mt-3">REKAPAN SURAT TERCETAK</button></a>
            <a href="daftar_pengguna.php" <button type="button" class="btn btn-primary btn-lg btn-block mt-3">DAFTAR PENGGUNA</button></a>
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