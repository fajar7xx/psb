<?php  
$pg = isset($_GET['page'])? $_GET['page'] : '';

switch($pg){

	// main
	case 'home':
		if(!file_exists("main.php")) die("file main tidak tersedia.");
		include "main.php";
		break;

	// cara pendaftaran
	case 'cara-daftar':
		if(!file_exists("cara_daftar.php")) die("file cara pendaftaran tidak tersedia");
		include "cara_daftar.php";
		break;

	// tentang kami
	case 'tentang-kami':
		if(!file_exists("tentang_kami.php")) die("file tentang kami tidak tersedia");
		include "tentang_kami.php";
		break;

	// kontak
	case 'kontak':
		if(!file_exists("kontak.php")) die("file kontak tidak tersedia");
		include "kontak.php";
		break;

	// ==========================================================================

	// registrasi siswa
	case 'registrasi-siswa':
		if(!file_exists("registrasi_siswa.php")) die("file registrasi siswa tidak tersedia");
		include "registrasi_siswa.php";
		break;

	// aktifasi akun
	case 'aktifasi':
		if(!file_exists("aktifasi.php")) die("file tidak tersedia");
		include "aktifasi.php";
		break;

	// aksi registrasi siswa
	case 'aksi-registrasi':
		if(!file_exists("aksi_regis.php")) die("file aksi registrasi tidak tersedia");
		include "aksi_regis.php";
		break;
	
	// daftar siswa/i lolos verifikasi
	case 'daftar-casis-lolos-ver':
		if(!file_exists("daftar_siswa.php")) die("file calon siswa lolos verifikasi tidak tersedia");
		include "daftar_siswa.php";
		break;

	// daftar siswa/i lolos ujian
	case 'daftar-casis-lulus-ujian':
		if(!file_exists("pdb.php")) die("file calon siswa lulus ujian tidak tersedia");
		include "pdb.php";
		break;

}
?>