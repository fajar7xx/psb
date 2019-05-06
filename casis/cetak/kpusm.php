<?php  
include_once '../../config/koneksi.php';
include_once '../../functions/tanggal.php';
include_once '../../functions/base_url.php';
include_once '../../functions/tanggal.php';

// print_r($_SESSION);
$noreg = $_SESSION['noreg'];


$query_usm = "SELECT * FROM psb LEFT JOIN ujian_masuk USING(no_reg) WHERE no_reg = '$noreg'";
$sql_usm = mysqli_query($conn, $query_usm)or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql_usm);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Kartu Peserta USM</title>
		<link rel="stylesheet" href="<?=base_url('bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
	</head>
	<body>
		<div class="row my-3">
			<div class="col"></div>
			<div class="col-6">
				<div class="jumbotron">
				<div class="card">
					<div class="card-body" style="height: 10cm">
						<h5 class="card-title text-center">Kartu Ujian Saringan Masuk</h5>
						<hr>
						<p class="card-text text-center" style="font-size: 22px;">
							<b><?=$data['nm_siswa'];?></b><br>
							<b><?=$data['no_reg'];?></b><br>
							<b><?=$data['ruang_ujian'];?></b><br>
							<b><?=tgl_indo($data['tgl_ujian']). ' , ' .$data['jam_ujian'];?></b><br>
							<b><?=$data['ruang_ujian'];?></b>
						</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col"></div>
			
		</div>
		<script src="<?=base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
		<script src="<?=base_url('bower_components/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
	</body>
</html>