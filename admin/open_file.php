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
}

?>