<?php  
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page){
	
	case 'dashboard':
	if(!file_exists("dashboard.php"))die("file tidak ditemukan");
	include "dashboard.php";
	break;

	case 'identitas':
	if(!file_exists("konten/website/identitas.php"))die("File tidak ditemukan");
	include "konten/website/identitas.php";
	break;

	case 'cara-pendaftaran':
	if(!file_exists("konten/cara_pendaftaran/cara_pendaftaran.php"))die("file tidak ditemukan");
	include "konten/cara_pendaftaran/cara_pendaftaran.php";
	break;

	case 'informasi-psb':
	if(!file_exists("konten/informasi_psb/informasi_psb.php"))die("file tidak ditemukan");
	include "konten/informasi_psb/informasi_psb.php";
	break;

	case 'psb':
	if(!file_exists("konten/psb/psb.php"))die("file tidak ditemukan");
	include "konten/psb/psb.php";
	break;

	case 'detail-psb':
	if(!file_exists("konten/psb/detail_psb.php"))die("File tidak ditemukan");
	include "konten/psb/detail_psb.php";
	break;

	case 'nilai':
	if(!file_exists("konten/nilai/nilai_tampil.php"))die("File tidak ditemukan");
	include "konten/nilai/nilai_tampil.php";
	break;

	case 'detail-nilai':
	if(!file_exists("konten/nilai/detail_nilai.php"))die("file tidak ditemukan");
	include "konten/nilai/detail_nilai.php";
	break;

	case 'backupdb':
	if(!file_exists("konten/utility/backupdb.php"))die("File tidak di temukan");
	include "konten/utility/backupdb.php";
	break;

	case 'kk':
	if(!file_exists("konten/kk/kk.php"))die("file tidak ditemukan");
	include "konten/kk/kk.php";
	break;

	case 'detail-kk':
	if(!file_exists("konten/kk/detail_kk.php"))die("file tidak ditemukan");
	include "konten/kk/detail_kk.php";
	break;

	case 'ijazah':
	if(!file_exists("konten/ijazah/ijazah.php"))die("file tidak ditemukan");
	include "konten/ijazah/ijazah.php";
	break;

	case 'detail-ijazah':
	if(!file_exists("konten/ijazah/detail_ijazah.php"))die("file tidak ditemukan");
	include "konten/ijazah/detail_ijazah.php";
	break;

	case 'foto':
	if(!file_exists("konten/foto/foto.php"))die("file tidak ditemukan");
	include "konten/foto/foto.php";
	break;

	case 'detail-foto':
	if(!file_exists("konten/foto/detail_foto.php"))die('File tidak ditemukan');
	include "konten/foto/detail_foto.php";
	break;

	case 'usm':
	if(!file_exists("konten/usm/usm.php"))die("file tidak ditemukan");
	include "konten/usm/usm.php";
	break;

	case 'detail-usm':
	if(!file_exists("konten/usm/detail_usm.php"))die("file tidak ditemukan");
	include "konten/usm/detail_usm.php";
	break;

	case 'usman':
	if(!file_exists("konten/user_management/user_management.php"))die("File tidak ditemukan");
	include "konten/user_management/user_management.php";
	break;
}

?>