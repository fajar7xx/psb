<?php  
require_once 'config/koneksi.php';
require_once 'config/library.php';
require 'helper/helper.php';

if(isset($_POST['submit'])){
	
	
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
		
		// set password baru dengan panjang 10 karakter
		$set_password_baru = substr(md5(uniqid(rand(),1)),1,10);
		// var_dump($set_password_baru);
		$kodeAktifasi = getKodeAktifasi(10);

		$jam = date("His");
		$query_psb = "INSERT INTO psb(
					    no_reg,
					    tgl_daftar,
					    jam_daftar,
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
					    '$tgl_sekarang_lengkap',
					    '$jam',
					    '$set_password_baru',
					    '$kodeAktifasi',
					    '$kompetensi',
					    '$nisn',
					    '$nama',
					    '$email',
					    '$asal')";
		$sql_psb = mysqli_query($conn, $query_psb)or die(mysqli_error($conn));

		$query_ujian = "INSERT INTO ujian_masuk(
							no_ujian, 
							no_reg,
							tgl_ujian
							)
							VALUES(
							    '$no_ujian',
							    '$no_pendaftaran',
								'$tgl_ujian')";
		$sql_ujian = mysqli_query($conn, $query_ujian)or die(mysqli_error($conn));

		if($sql_psb == TRUE && $sql_ujian == TRUE){
			$_SESSION['kode_aktivasi'] = $kodeAktifasi;
			header('Location: cetak_registrasi.php');
			// echo "<script>
			// 	alert('pendaftaran telah berhasil. silahkan cek email anda. dan tunggu proses verifikasi data dari panitia kami');
			// 	document.location.href='cetak_registrasi.php?code=$kodeAktifasi';
			// </script>";		
		}
		else{
			echo "<script>
				alert('terdapat kesalahan silahkan ulangi kembali pendaftaran.');
				document.location.href='registrasi.html'
			</script>";
		}
	}
}
?>