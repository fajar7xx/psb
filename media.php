<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Website Aplikasi Penerimaan Siswa Baru">
		<meta name="author" content="fajar siagian">
		<link rel="icon" href="assets/ico/favicon.ico">

		<title>Portal Pendaftaran Siswa Baru Online</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

		<!-- main css -->
		<!-- <link rel="stylesheet" href="css/starter-template.css"> -->
		<link rel="stylesheet" href="css/sticky-footer-navbar.css">
		<!-- <link rel="stylesheet" href="css/theme.css"> -->

		<!-- datatables -->
		<link rel="stylesheet" href="bower_components/datatables/media/css/dataTables.bootstrap4.min.css">

		<!-- securimage dilewatkan dlu arena tidak menggunkan PDO -->
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="home" class="navbar-brand">
				PSB Online
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="home" class="nav-link">
							Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="tentang-kami.html" class="nav-link">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a href="cara-daftar.html" class="nav-link">Cara Mendaftar</a>
					</li>
					<li class="nav-item">
						<a href="kontak.html" class="nav-link">Kontak</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action active">Link Terkait</a>
						<a href="registrasi.html" class="list-group-item list-group-item-action">Pendaftaran Siswa Baru</a>
						<a href="daftar-casis-lolos-ver.html" class="list-group-item list-group-item-action">Daftar Calon Siswa Lolos Verifikasi</a>
						<a href="daftar-casis-lulus-ujian.html" class="list-group-item list-group-item-action">Daftar Calon Siswa Lulus USM</a>
					</div>

					<div class="list-group mt-4">
						<a href="#" class="list-group-item list-group-item-action active">Login Calon Siswa</a>
						<a href="casis/sign-in.html" class="list-group-item list-group-item-action">Sign In</a>
						<a href="aktifasi.html" class="list-group-item list-group-item-action">Aktifasi Akun</a>
					</div>
				</div>
				<div class="col-sm-8">
					<?php 
						include "open_file.php";
					?>
				</div>
			</div>
		</div>
		
		<div id="footer" class="bg-dark">
			<div class="container">
				<p class="text-muted">Copyright 2019. All right reserved. FajarSiagian.</p>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

		<!-- datatables -->
		<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="bower_components/datatables/media/js/dataTables.bootstrap4.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#tabel').DataTable();
			});
		</script>
	</body>
</html>