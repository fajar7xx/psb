<?php  
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch($page){

	// dashboard.php
	case 'home':
	if(!file_exists("dashboard.php")) die("File tidak ditemukan");
	include "dashboard.php";
	break;

	// profil siswa
	case 'profil-siswa':
	if(!file_exists("pages/profil_siswa/profil_siswa.php"))die("File Tidak Ditemukan");
	include "pages/profil_siswa/profil_siswa.php";
	break;

	// data siswa
	case 'data-profil':
	if(!file_exists("pages/profil_siswa/data_profil.php"))die("file tidak ditemukan");
	include "pages/profil_siswa/data_profil.php";
	break;

	// update profil
	case 'update-profil':
	if(!file_exists("pages/profil_siswa/update_profil.php"))die("file tidak ditemukan");
		include("pages/profil_siswa/update_profil.php");
		break;
	
	// dokumen
	case 'unggah':
	if(!file_exists("pages/unggah/unggah_dok.php"))die("File Tidak Ditemukan");
	include "pages/unggah/unggah_dok.php";
	break;

	// unggah dokumen kk
	case 'unggahkk':
	if(!file_exists("pages/unggah/unggah_kk.php"))die("File tidak ditemukan");
	include "pages/unggah/unggah_kk.php";
	break;	

	case 'simpankk':
	if(!file_exists("pages/unggah/aksi/simpan-kk.php"))die("File tidak ditemukan");
	include "pages/unggah/aksi/simpan-kk.php";
	break;

	case 'editkk':
	if(!file_exists("pages/unggah/edit_kk.php"))die("file tidak ditemukan");
	include "pages/unggah/edit_kk.php";
	break;

	case 'unggahijazah':
	if(!file_exists("pages/unggah/unggah_ijazah.php"))die("File tidak ditemukan");
	include "pages/unggah/unggah_ijazah.php";
	break;

	case 'simpanijazah':
	if(!file_exists("pages/unggah/aksi/simpan-ijazah.php"))die("File tidak ditemukan");
	include "pages/unggah/aksi/simpan-ijazah.php";
	break;

	case 'editijz':
	if(!file_exists("pages/unggah/edit_ijazah.php"))die("File tidak ditemukan");
	include "pages/unggah/edit_ijazah.php";
	break;

	case 'unggahfoto':
	if(!file_exists("pages/unggah/unggah_foto.php"))die("File tidak ditemukan");
	include "pages/unggah/unggah_foto.php";
	break;

	case 'simpanfoto':
	if(!file_exists("pages/unggah/aksi/simpan-foto.php"))die("File tidak ditemukan");
	include "pages/unggah/aksi/simpan-foto.php";
	break;

	case 'editfoto';
	if(!file_exists("pages/unggah/edit_foto.php"))die("File tidak ditemukan");
	include "pages/unggah/edit_foto.php";
	break;

	// mapel
	case 'mapel':
	if(!file_exists("pages/mapel/tambah_mapel.php"))die("file tidak ditemukan");
	include "pages/mapel/tambah_mapel.php";
	break;

	// nilai rapor
	case 'nilai-rapor':
	if(!file_exists("pages/nilai/nilai_rapor.php"))die("File tidak ditemukan");
	include "pages/nilai/nilai_rapor.php";
	break;

	// ujian
	case 'ujian':
	if(!file_exists("pages/ujian/ujian.php"))die("file tidak ditemukan");
	include "pages/ujian/ujian.php";
	break;

}


?>