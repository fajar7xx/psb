<?php  
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch($page){

	// dashboard.php
	case 'home';
	if(!file_exists("dashboard.php")) die("File tidak ditemukan");
	include "dashboard.php";
	break;

	

}


?>