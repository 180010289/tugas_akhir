<html>

<head>

 <title>Nyobak Gen</title>

   <link rel="icon" type="image/png" href="img/icon.png">

  <meta charset="utf-8">

      <meta name="description" content="Buat Surat Izin Sekolah Kamu disini dijamin Cepat dan Mudah">

  <meta name="keywords" content="Bikin SUrat,surat,surat izin,make surat izin,surat sekolah,contoh surat sekolah,surat sekolah generator,surat izin generator,surat izin tidak masuk sekolah,surat sekolah,surat tdk masuk,surat izin tdk sekolah">

  <meta name="author" content="Ahmad Ansori">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<style>

body {font-family: arial;

}

div.a {text-align: right;

}

</style>

<body>

<br><br><br><br><br>

<div class='a'>

 <?php echo $_GET["nama_lengkap"]; ?>, <?php echo $_GET["nik"]; ?><br><br>

Kepada Yth, <br>

Bapak/Ibu Guru Wali Kelas <?php echo $_GET["kewarganegaraan"]; ?><br>

<?php echo $_GET["alamat"]; ?><br><br><br>

</div>

Assalamualaikum Warahmatullahi Wabarakatuh<br><br>

Dengan Hormat,<br>

Dengan Ini saya selaku Orang Tua/Wali Murid dari:<br><br>

Nama: <?php echo $_GET["nama_lengkap"]; ?><br>

Tempat Tanggal Lahir : <?php echo $_GET["tempat_lahir"]; ?> <?php echo $_GET["tanggal_lahir"]; ?><br>

Alamat: <?php echo $_GET["alamat"]; ?><br><br>

Memberitahukan bahwa anak saya tersebut tidak dapat mengikuti pelajaran seperti biasa pada hari <?php echo $_GET["hari"]; ?> <?php echo $_GET["tanggal"]; ?> dikarenakan <u><?php echo $_GET["alasan"]; ?></u>. <br>Oleh karena itu, Kami memohon

Bapak/Ibu Guru Wali kelas <?php echo $_GET["nama_lengkap"]; ?> agar memberikan izin.<br><br>

Demikian yang dapat kami sampaikan. Atas perhatian Bapak/Ibu kami ucapkan terimakasih.<br><br>

Wassalamualaikum Warahmatullahi Wabarakatuh<br><br>

<div class='a'>

Hormat Kami,<br>

Orang Tua/Wali Murid<br><br><br><br><br>



(<?php echo $_GET["nama_lengkap"]; ?>)

</div>

<script>

  window.print();

 </script>

 </body>

</html> 