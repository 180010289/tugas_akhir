<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Surat Keterangan Ahli Waris</title>
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

      <h2 class="alert-primary text-center mt-5">FORMULIR SURAT KETERANGAN AHLI WARIS</h2>
      <small><center><b>Isilah Data Formulir Berikut Sesuai Dengan Data Pada Kartu Keluarga Anda !</small></center></b>
      
      <form action="proses_sk_ahli_waris.php" method="post">
        <input type="number" name="id_form" value="3" hidden>
        <input type="number" name="id_user" value="<?php echo $_SESSION['user_id']; ?>" hidden>
        <div class="form-group mt-10">
          <label><b>Nama</label></b>
          <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama">
          </div> 

          <div class="form-group">
          <label>Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option> - Pilih Jenis Kelamin</option>
            <option> Laki - Laki</option>
            <option> Perempuan</option>
          </select>
        </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                </div>
            </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control">
              <small>* tanggal-bulan-tahun</small>
              </div>
          </div>
        </div>

   <div class="form-group">
          <label>Agama</label>
          <select class="form-control" name="agama">
            <option> - Pilih Agama</option>
            <option> Islam</option>
            <option> Hindu</option>
            <option> Kristen</option>
            <option> Khatolik</option>
            <option> Konghucu</option>
            <option> Lainnya</option>

          </select>
        </div>

        <div class="form-group">
          <label>Kewarganegaraan</label>
          <select class="form-control" name="kewarganegaraan">
            <option> - Pilih Kewarganegaraan</option>
            <option> Indonesia</option>
            <option> WNA</option>
          </select>
        </div>

    <div class="form-group">
          <label>Pekerjaan</label>
          <select class="form-control" name="pekerjaan">
            <option> - Pilih Pekerjaan</option>
            <option> Wiraswasta</option>
            <option> Karyawan Swasta</option>
            <option> Petani</option>
            <option> Pegawai Negeri Sipil (PNS)</option>
            <option> Buruh</option>
            <option> Lainnya</option>
          </select>
        </div>

      <div class="form-group" name="alamat">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat"></textarea>
      </div>

      <div class="form-group">
        <label>Nomor Kartu Identitas (NIK)</label>
        <input type="number" name="nik" class="form-control" placeholder="Masukan NIK">
        </div>

       
              <div class="form-group" name="ahli_waris">
        <label>Ahli Waris Dari</label>
        <textarea class="form-control" name="ahli_waris"></textarea>
      </div>


      <div class="form-group">
        <label>Upload Dokumen</label>
        <input type="file" class="form-control-file" name="content">
        <small>Ukuran Upload File Maksimal 2 MB</small>
      </div>
     <button type="reset" class="btn btn-warning mt-3">Reset Formulir</button>

     
     <div class="countainer">
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
   <!-- konten modal-->
   <div class="modal-content">
     <!-- heading modal -->
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Modal</h4>
     </div>
     <!-- body modal -->
     <div class="modal-body">
       <p>bagian body modal.</p>
     </div>
     <!-- footer modal -->
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
     </div>
   </div>
    </div>
 </div>
<!-- Button trigger modal -->
<div class="container">
<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
Ajukan
</div>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ?</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
  Permohonan akan dikirim, menunggu untuk Approval admin.
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    <input class="btn btn-success" name="ajukan"type="submit">

   </div>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>

      </form>
    </div>
  </div>
<p align=center><b>Anda Login Sebagai  <b><?php echo $_SESSION['username']; ?></b> <a href="logout.php"> (Logout)</a>
	<center><footer>Copyright © 180010289. All Rights Reserved  </center></footer>
  </div>
  </div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>