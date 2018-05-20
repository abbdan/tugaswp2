<?php
include_once 'koneksi.php';
$id_pegawai=$_GET['id_pegawai'];
$proses=$mysqli->query("delete from pegawai where id_pegawai='$id_pegawai'");
if($proses) {
	echo "<script> alert ('Pegawai berhasil dihapus'); document.location='tampil.php'</script>";
}
else{
	echo "<script> alert ('Pegawai guagal dihapus'); document.location='tampil.php'</script>";
}
?>