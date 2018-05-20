<?php
include("koneksi.php");
if (isset($_GET['id_pegawai'])){
$id_pegawai=$_GET['id_pegawai'];
$proses=$mysqli->query("select * from pegawai where id_pegawai='$id_pegawai'");
$data=$proses->fetch_object();
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>	
	<body >
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-success" style="margin-top:50px">
					<div class="panel-body">
						<div class="page-header">
							<h3 align="center"><b>--Halaman Edit Pegawai--</b></h3>
						</div>
						<form action="proses_edit.php" method="POST" role="form" enctype="multipart/form-data">
							<div class="form-group">
								<label>Divisi</label>
								<select name="id_divisi" id="input" class="form-control"required="required">
								        <?php  
								         include'koneksi.php';
				                        $proses=$mysqli->query("SELECT * FROM divisi");

				                        while ($divisi=$proses->fetch_object()) {
				                        ?>  
				                        <!--Jika pegawai.id_divisi di tabel pegawai sama dengan id_divisi di tabel divisi maka select-->
				                        <option value="<?php echo $divisi->id_divisi ?>"
				                          <?php 
				                          	if ($data->id_divisi==$divisi->id_divisi) {
					                        	echo "SELECTED";
					                        } 
					                      ?>
				                        >

				                        <?php echo $divisi->nama_divisi ?> 

				                        </option>
				                        <?php } ?>
							</div>
							<div class="form-group">
								<label>Nama Pegawai</label>
								<input name="nama" type="text" value="<?php echo $data->nama;?>" class="form-control" id="" placeholder="Masukan Nama" required="required">
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="jenis_kelamin" value="<?php echo $data->jenis_kelamin;?>"id="" class="form-control" placeholder="Pilih Jenis Kelamin" required="required">
								<option value="L" >Laki Laki</option>
								<option value="P" >Perempuan</option>	
								</select>
							<div class="form-group">
								<label>Alamat</label>
								<input name="alamat" value="<?php echo $data->alamat;?>" type="text" class="form-control" id="" placeholder="Masukan alamat" required="required">
							</div>
							<div class="form-group">
								<label>Kontak</label>
								<input name="kontak" value="<?php echo $data->kontak;?>" type="text" class="form-control" id="" placeholder="Masukan kontak" required="required">
							</div>	
							<input type="hidden" value="<?php echo $data->id_pegawai; ?>"name="id_pegawai">			
							<button name="edit" type="submit" class="btn btn-primary">SIMPAN</button> &nbsp; <button type="cancel" class="btn btn-warning">BATAL</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Bootstrap JavaScript -->
	</body>
</html>