<?php
if (isset($_POST['edit'])) {
$nama              = $_POST['nama']; 
$jenis_kelamin     = $_POST['jenis_kelamin'];
$id_divisi         = $_POST['id_divisi']; 
$alamat            = $_POST['alamat'];  
$kontak            = $_POST['kontak'];
$id_pegawai      = $_POST['id_pegawai'];

include_once 'koneksi.php';
$proses = $mysqli->query("UPDATE pegawai SET  nama='$nama', jenis_kelamin='$jenis_kelamin', id_divisi='$id_divisi', alamat='$alamat',kontak='$kontak' where id_pegawai='$id_pegawai' ");

if ($proses) {
		echo "<script> alert('Data berhasil di edit'); document.location='tampil.php' </script>";
	}
	else{
		echo "<script> alert('Data gagal di edit'); document.location='tampil.php' </script>";
	}
}
?>