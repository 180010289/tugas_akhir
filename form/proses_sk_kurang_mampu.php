<?php 
    include "koneksi.php";

    if (isset($_POST['ajukan'])){
    $id_user = (int) $_POST["id_user"];
    $id_form = (int) $_POST["id_form"];
mysqli_query($koneksi, "INSERT INTO sk_kurang_mampu set
    nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    tempat_lahir = '$_POST[tempat_lahir]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    kewarganegaraan = '$_POST[kewarganegaraan]',
    pekerjaan = '$_POST[pekerjaan]',
    agama = '$_POST[agama]',
    alamat = '$_POST[alamat]',
    nik = '$_POST[nik]',

    nama_anak = '$_POST[nama_anak]',
    jk_anak = '$_POST[jk_anak]',
    tempat_lahir_anak = '$_POST[tempat_lahir_anak]',
    tanggal_lahir_anak = '$_POST[tanggal_lahir_anak]',
    kewarganegaraan_anak = '$_POST[kewarganegaraan_anak]',
    pekerjaan_anak = '$_POST[pekerjaan_anak]',
    agama_anak = '$_POST[agama_anak]',
    alamat_anak = '$_POST[alamat_anak]',
    nik_anak = '$_POST[nik_anak]',
    jumlah_saudara = '$_POST[jumlah_saudara]',
    keterangan_anak = '$_POST[keterangan_anak]',
    content = '$_POST[content]',
    
    id_user = $id_user,
    id_form = $id_form
    ");

echo "<script>alert('Permohonan Surat Berhasil!');history.go(-1);</script>";
header('Location: out_dari_form.php');

exit();
}  
?>
