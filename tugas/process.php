<?php
if (isset($_POST['simpan'])) {
$nama              = $_POST['nama']; 
$jenis_kelamin     = $_POST['jenis_kelamin'];
$id_divisi         = $_POST['id_divisi']; 
$alamat            = $_POST['alamat'];  
$kontak            = $_POST['kontak'];
include_once 'koneksi.php';
$proses = $mysqli->query("INSERT INTO pegawai (nama, jenis_kelamin, id_divisi, alamat, kontak) values('$nama','$jenis_kelamin','$id_divisi','$alamat','$kontak')");

//lakukan validasi jika inputan behasil menggunakan if

if ($proses) { //jika isi variable $proses bernilai true maka
  echo "<script>alert('Data pegawai Berhasil Disimpan');document.location = 'tampil.php'</script>";
} else { //jika isi variable $proses bernilai false maka
  echo "<script>alert('Data pegawai Gagal Disimpan')".$mysqli->error."</script>";
}
}
 ?>