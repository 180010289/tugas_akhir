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

            <?php
           // include 'koneksi.php';
           //  $sql = "SELECT * FROM tabel_form";
           //  $data = mysqli_query($koneksi,$sql);
           //  var_dump(mysqli_num_rows($data), "test");
           //  $result = mysqli_fetch_array($data);
           //  var_dump($result);
           //  $i=0;
           //  while ($i < count($data = $result)) {
           //  echo $data["jenis_surat"];
           //  $i++;
           //  }

           //  foreach ($result as $key => $item) {
           //      echo " <a href='surat_keterangan_kurang_mampu.php'<button type='button' class='btn btn-primary btn-lg btn-block'>$result[jenis_surat]</button></a>";
           //    var_dump($item);
           //    echo $result["jenis_surat"];
           //    echo $key;

            // }

            ?>

            <a href="surat_keterangan_tidak_mampu_fix.php"<button type="button" class="btn btn-primary btn-lg btn-block">SURAT KETERANGAN TIDAK MAMPU</button></a>
           <a href="surat_keterangan_meninggal.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN MENINGGAL</button></a>
           <a href="surat_keterangan_belum_pernah_menikah.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN BELUM PERNAH KAWIN/NIKAH</button></a>
           <a href="surat_keterangan_usaha.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN USAHA</a></button> 
           <a href="surat_keterangan_lahan_belum_sertifikat.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN LAHAN BELUM BERSERTIFIKAT</a></button> 
           <a href="surat_keterangan_kelahiran.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN KELAHIRAN</a></button> 
           <a href="surat_keterangan_ahli_waris.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN AHLI WARIS</a></button> 
           <a href="surat_keterangan_bepergian.php"<button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN BEPERGIAN</a></button> 

           
           <!-- <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN TINGGAL SEMENTARA</button>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN BERKELAKUAN BAIK</button>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN PINDAH</button>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN KELAHIRAN </button>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN BEPERGIAN</button>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN BELUM PERNAH MENIKAH </button>
            
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN ALIAS</button>          
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN JAMKESMAS</button>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-3">SURAT KETERANGAN AHLI WARIS</button>   -->
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
</div>
</body>
	</body>
</html>

