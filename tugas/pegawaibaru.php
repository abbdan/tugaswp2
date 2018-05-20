	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>pegawai baru</title>

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
							<br><br>
							<h3 align="center"><b>--Halaman Pegawai Baru--</b></h3>
							<br><br>
						</div>
						<form action="process.php" method="POST" role="form" enctype="multipart/form-data">

							<div class="form-group">
								<label>Nama Pegawai</label>
								<input name="nama" type="text" class="form-control" id="" placeholder="Masukan Nama" required="required">
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="jenis_kelamin" id="select" class="form-control" placeholder="Pilih Jenis Kelamin" required="required">
								<option value="L" >Laki Laki</option>
								<option value="P" >Perempuan</option>	
								</select>
							<div class="form-group">
								<label>Divisi</label>
								<select name="id_divisi" id="select" class="form-control" placeholder="Pilih divisi" required="required">
								<option value="1" >IT</option>
								<option value="2" >Keuangan</option>
								<option value="3" >Kebersihan</option>
								<option value="4" >Kantor</option>
								<option value="5" >Marketing</option>
								<option value="6" >Development</option>	
								</select>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input name="alamat" type="text" class="form-control" id="" placeholder="Masukan alamat" required="required">
							</div>
							<div class="form-group">
								<label>Kontak</label>
								<input name="kontak" type="" class="form-control" id="" placeholder="Masukan kontak" required="required">
							</div>
									
							<button name="simpan" type="submit" class="btn btn-primary">SIMPAN</button> &nbsp; <button type="cancel" class="btn btn-warning">BATAL</button>
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