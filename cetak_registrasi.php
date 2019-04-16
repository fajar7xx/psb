<?php
// ini masih banyak bug jika seseorang mengetahui kode aktifasi
// maka mereka dapat dengan mudah mengakses laman ini
// dan mencuri data yang ada.
// buat penagnannya segera
require_once "config/koneksi.php";

$kode_aktifasi = $_GET['code'];

// echo "ini kode aktifasi nya" . $kode_aktifasi;

$query_psb = "SELECT * FROM psb WHERE kode_aktivasi = '$kode_aktifasi'";
$sql_psb = mysqli_query($conn, $query_psb)or die(mysqli_error($conn));

// print_r($sql_psb);

$data = mysqli_fetch_assoc($sql_psb);


$nama = $data['nm_siswa'];
$noreg = $data['no_reg'];
$pass = $data['password'];
$nisn = $data['nisn'];
$email = $data['email_siswa'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Konfirmasi Aktifasi Akun</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

	
	<div class="container my-4">
		<div class="row">
			<div class="col-12">
				<div class="card w-75 mx-auto d-print-inline" id="pesan">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-md">
								<h2 class="text-center">Konfirmasi Email</h2>
							</div>
						</div>

						<hr class="my-1">

						<div class="row p-5">
							<div class="col-md-12">
								<p>
									Selamat, Anda terdaftar sebagai calon siswa SMK Medan. Silahkan Simpan data ini baik baik. dan bawa pada saat melkukan ujian atau keperluan lainnya yang diminta panitia
									<ul>
										<li>Nomor Registrasi : <?=$noreg;?></li>
										<li>Nama :  <?=$nama;?></li>
										<li>NISN :  <?=$nisn;?></li>
										<li>Email :  <?=$email;?></li>
										<li>Pasword :  <?=$pass;?></li>
										<li>Kode Aktifasi :  <?=$kode_aktifasi;?></li>
										
									</ul>
								</p>
								<p>untuk mengaktifkan akun anda silahkan kunjungi menu aktifasi pada laman utama</p>
							</div>
						</div>

						<div class="d-flex flex-row-reverse bg-dark text-white p-4">
							<div class="py-3 px-5 text-center d-print-none">
								<button class="btn btn-block btn-primary" onclick="cetak()">
								Cetak
								</button>
							</div>
							<div class="py-3 px-5 text-center d-print-none">
								<a href="home" class="btn btn-warning">Kembali</a>
							</div>	
							<div class="py-3 px-5 text-center">
								SMk Medan
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		function cetak(){
			window.print();
		}
	</script>
</body>
</html>


