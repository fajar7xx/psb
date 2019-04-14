<?php  
require_once 'config/koneksi.php';
require_once 'config/library.php';
require 'helper/helper.php';

if(isset($_POST['submit'])){
	
	// debug $_POST 
	// var_dump($_POST);
	// print_r($_POST);
	
	$nisn = noInjetction($_POST['nisn']);
	$nisn = mysqli_real_escape_string($conn, $nisn);

	$nama = noInjetction($_POST['nama']);
	$nama = mysqli_real_escape_string($conn, $nama);

	$asal = noInjetction($_POST['asal']);
	$asal = mysqli_real_escape_string($conn, $asal);

	$email = noInjetction($_POST['email']);
	$email = mysqli_real_escape_string($conn, $email);

	$kompetensi = noInjetction($_POST['kompetensi']);
	$kompetensi = mysqli_real_escape_string($conn, $kompetensi);


	// debug apakah jalan mendapatkan noujian dan no registrasi
	// echo "No ujian anda " . getNoUjian();
	// echo "<br>";
	// echo "No Registrasi anda " . getNoReg();

	$query_cek = "SELECT
					    *
					FROM
					    psb
					WHERE
					    nisn = '$nisn' OR email_siswa = '$email'";
	$sql_cek = mysqli_query($conn, $query_cek)or die(mysqli_error($conn));

	if(mysqli_num_rows($sql_cek)){
		echo "<script>
				alert('NISN atau email siswa telah terdaftar, coba menggunakan yang lain.');
				document.location.href='registrasi.html'
			</script>";
	}
	else{
		$no_pendaftaran = getNoReg();
		$no_ujian = getNoUjian();
		// cek apakah berhasil regis
		// echo "<script>
		// 		alert('selamat. calon peserta berhasil registasi');
		// 		document.location.href='home'
		// 	</script>";
		
		// set password baru dengan panjang 10 karakter
		$set_password_baru = substr(md5(uniqid(rand(),1)),1,10);
		// var_dump($set_password_baru);
		$kodeAktifasi = getKodeAktifasi(10);


		// debug dlu untuk kirim email aktifasi atau cari tutorial untuk membuat aktigasi registrasi di php karena sepertinya ini sedikit bermasalah
		// $sendTo = $email;
		// $subjek = "PSB Online Sekolah Medan - Kode Aktifasi dan password login calon siswa.";
		// $link = "http://localhost/psb/aktifasi.php?code='$kodeAktifasi'";
		// $pesan = "Selamat, Anda Telah Terdaftar sebagai calon Siswa di Sekolah. klik link tautan berikut $link untuk aktifasi akun calon siswa. No Pendaftaran anda adalah $no_pendaftaran dan password anda adalah $set_password_baru. Silahkan login menggunakan no. pendaftaran dan password tersebut.";
		// $from = "admin@localhost";

		// $send_email = mail($sendTo, $subjek, $pesan);

		// if($send_email){
		// 	echo "<script>
		// 		alert('pendaftaran telah berhasil. silahkan konfirmasi email anda');
		// 	</script>";
		// }

		$query_psb = "INSERT INTO psb(
					    no_reg,
					    password,
					    kode_aktivasi,
					    id_kompetensi,
					    nisn,
					    nm_siswa,
					    email_siswa,
					    asal_sekolah
					)
					VALUES(
					    '$no_pendaftaran',
					    '$set_password_baru',
					    '$kodeAktifasi',
					    '$kompetensi',
					    '$nisn',
					    '$nama',
					    '$email',
					    '$asal')";
		$sql_psb = mysqli_query($conn, $query_psb)or die(mysqli_error($conn));

		// tgl ujian titambahkan 7 hari setelah tgl pendaftaran
		$tglujian = date('Y-m-d', strtotime('+7 days', strtotime($tgl_sekarang_lengkap)));
		$query_ujian = "INSERT INTO ujian_masuk(
							no_ujian, 
							no_reg 
							)
							VALUES(
							    '$no_ujian',
							    '$no_pendaftaran')";
		$sql_ujian = mysqli_query($conn, $query_ujian)or die(mysqli_error($conn));

		var_dump($sql_psb);
		echo"<br>";
		var_dump($sql_ujian);
	}

}




?>