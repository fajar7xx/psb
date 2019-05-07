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
}

?>