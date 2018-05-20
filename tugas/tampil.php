<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DAFTAR PEGAWAI PT. MANTAP</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/dataTables.bootstrap.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 " >
                    <br><br>
					<h2 align="center">DATA PEGAWAI PT.MANTAP</h2>
                    <br><br>
                    <a href="tampildivisi.php" class="btn btn-primary pull-left" > Tampilkan Sesuai Divisi</a>
                    <a href="pegawaibaru.php" class="btn btn-primary pull-right" > Tambah Pegawai Baru</a>
					<div class="box-body table-responsive" style="margin-top:50px;">
                <table id="example1" class="table table-bordered table-striped test">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Pegawai</th>
                            <TH>Nama</TH>
                            <th>JK</th>
                            <th>Divisi</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include_once'koneksi.php';
                            $proses=$mysqli->query("SELECT pegawai.id_pegawai, pegawai.nama, pegawai.jenis_kelamin, divisi.nama_divisi, pegawai.alamat, pegawai.kontak FROM pegawai, divisi WHERE pegawai.id_divisi=divisi.id_divisi ORDER BY id_pegawai ASC");
                            $no=1;
                            while ($data=$proses->fetch_object()) {
                         ?>   
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data->id_pegawai; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->jenis_kelamin; ?></td>
                            <td><?php echo $data->nama_divisi; ?></td>
                            <td><?php echo $data->alamat; ?></td>
                            <td><?php echo $data->kontak; ?></td>
                            <td>
                            <a class="btn btn-info" href="edit.php?id_pegawai=<?php echo $data->id_pegawai ?>">UPDATE</a>
                            <a class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data ini?')" href="delete.php?id_pegawai=<?php echo $data->id_pegawai ?>">DELETE</a>
                            </td>
                        </tr> 
                        <?php } ?>
                                                              
                    </tbody>
                </table>
            </div>
		</div>
	</div>
</div>


		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>	
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
	</body>
</html>