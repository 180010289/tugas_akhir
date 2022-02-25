<?php 
include "koneksi.php";

if (isset($_POST['ajukan'])){
$id_user = (int) $_POST["id_user"];
$id_form = (int) $_POST["id_form"];

var_dump('masuk id form', $id_form);

mysqli_query($koneksi, "INSERT INTO sk_meninggal set
    nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    tempat_lahir = '$_POST[tempat_lahir]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    kewarganegaraan = '$_POST[kewarganegaraan]',
    pekerjaan = '$_POST[pekerjaan]',
    agama = '$_POST[agama]',
    alamat = '$_POST[alamat]',
    nik = '$_POST[nik]',
    content = '$_POST[content]',
    meninggal_karena = '$_POST[meninggal_karena]',
    tanggal_meninggal = '$_POST[tanggal_meninggal]',
    id_user = $id_user,
    id_form = $id_form"
);

echo "<script>alert('Permohonan Surat Berhasil!');history.go(-1);</script>";
header('Location: out_dari_form.php');


exit();
}  
?>
