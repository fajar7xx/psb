<?php
require_once "config/koneksi.php";
require_once "config/library.php";

if(isset($_POST['submit'])){
	
	// anti XSS dan SQL Injection
	function antiInjection($data){
		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
		// $filter_sql = mysqli_real_escape_string($data);

		return $filter_sql;
	}

	$nisn = mysqli_real_escape_string($conn, antiInjection($_POST['nisn']));
	$nama = mysqli_real_escape_string($conn, antiInjection($_POST['nama']));
	$asal = mysqli_real_escape_string($conn, antiInjection($_POST['asal']));
	$email = mysqli_real_escape_string($conn, antiInjection($_POST['email']));
	$kompetensi = mysqli_real_escape_string($conn, antiInjection($_POST['kompetensi']));

	// untuk kebutuhan tabel ujian
	// nomor otomatis ujian
	$kode = "USM";

	// baca current date tahun dan bulan
	$today = date("ym");

	$query_ujian = "SELECT MAX(no_ujian) AS LAST FROM ujian_masuk
					WHERE no_ujian LIKE '$kode%'";
	$sql_ujian = mysqli_query($conn, $query_ujian) or die(mysqli_error($conn));
	$data_ujian = mysqli_fetch_assoc($sql_ujian);

	// dicek dlu kebenaran datanya
	$lastTest = $data_ujian['LAST'];

	// baca no urut ujian dari yang terakhir
	$lastNotes = substr($lastTest, 7, 4);

	// nomor urut ujian di tambah 1
	$nextNo = $lastNotes + 1;

	// membuat format nomor urut usm berikutnya
	$nextTestNo = $kode.$today.sprintf('%04s', $nextNo);



	// no otomatis registrasi
	$kd = "PSB";

	$query_reg = "SELECT MAX(no_reg) AS LAST FROM psb
				WHERE no_reg LIKE '$kd%'";
	$sql_reg = mysqli_query($conn, $query_reg)or die(mysqli_error($conn));
	$data_reg = mysqli_fetch_assoc($sql_reg);

	$lastReg = $data_reg['LAST'];

	// baca no urus reg dari yang terakhir
	$lastReg = substr($lastReg, 7, 4);

	// nomor urut reg ditambah 1
	$nextReg = $lastReg + 1;

	// membuat format nomor reg
	$nextRegNo = $kd.$today.sprintf('%04s', $nextReg);


	// cek regisrasi
	$query_cek_regis = "SELECT nisn, email_siswa FROM psb
					WHERE nisn = '$nisn' OR email_siswa = '$email'";
	$cek_regis = mysqli_query($conn, $query_cek_regis);

	if(mysqli_num_rows($cek_regis) > 0){
		echo "<script>alert('NISN atau email siswa telah terdaftar, coba menggunakan yang lain.')</script>";
		echo "<meta http-equiv='refresh' content='0;url=registrasi.html'>";
		exit();
	}
	else{
		// cek apakah berhasil
		// echo "<script>alert('pendaftaran berhasil')</script>";
		// set password peserta
		
		$password_baru = substr(md5(uniqid(rand(),1)),3,10);


		// debug fungsi ini
		// ganti pek ini https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string/13733588#13733588
		// https://stackoverflow.com/questions/2593807/md5uniqid-makes-sense-for-random-unique-tokens
		// fungsi acak kode
		function randomCode($len="10"){
			global $pass;
			global $lchar;
			$code = NULL;

			for($i=0; $i<=$len; $i++){
				$char = chr(rand(48, 122));
				while(!preg_match("[a-zA-Z0-9]", $char)){
					if($char == $lchar){
						continue;
					}
					$char = chr(rand(48,90));
				}
				$pass .= $char;
				$lchar .= $char;
			}

			return $pass;
		}

		// kirim notif aktifasi ke email peserta
		$kode_aktifasi = randomCode();
		// $password_baru = substr(md5(uniqid(rand(),1)), 3, 10);
		$tujuan = $email;
		$subjek = "PSB Online Sekolah Medan - Kode Aktifasi dan password login calon siswa.";
		$link = "http://localhost/psb/aktifasi.php?code='$kode_aktifasi'";
		$pesan = "Selamat, Anda Telah Terdaftar sebagai calon Siswa di Sekolah. klik link tautan berikut $link untuk aktifasi akun calon siswa. No Pendaftaran anda adalah $nextRegNo dan password anda adalah $password_baru. Silahkan login menggunakan no. pendaftaran dan password tersebut.";
		$from = "admin@localhost";

		$send_email = mail($tujuan, $subjek, $pesan);


		// menyimpan ke tabel psb
		$query_daftar = "INSERT INTO psb(
						    no_reg,
						    tgl_daftar,
						    jam_daftar,
						    password,
						    kode_aktivasi,
						    id_kompetensi,
						    nisn,
						    nm_siswa,,
						    email_siswa,
						    asal_sekolah,
						    )
						VALUES(
								'$nextRegNo',
								'$tgl_sekarang',
								'$jam_sekarang',
								'$password_baru',
								'$kode_aktifasi',
								'$kompetensi',
								'$nisn',
								'$nm_siswa',
								'$email',
								'$asal_sekolah'
							)";
		$sql_daftar = mysqli_query($conn, $query_daftar)or die(mysqli_connect_error($conn));

		// menyimpan ke tabel ujian masuk
		$query_ujian = "INSERT INTO ujian_masuk(
						    no_ujian,
						    no_reg,
						    tgl_ujian
						)
						VALUES(
						    '$nextTestNo',
						    '$nextRegNo',
						    '$tglujian'
						)";
		$sql_ujian = mysqli_query($conn, $query_ujian)or die(mysqli_connect_error($conn));

		if($send_email){
			echo "<script>alert('Pendaftaran telah berhasil. kode aktifasi dan password login sudah dikirim ke email anda. harap mengeceknya di kotak email anda.')</script>";
		}
		echo "<meta http-equiv='refresh' content='0;url=home'>";
	}
}