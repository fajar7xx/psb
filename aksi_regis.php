<?php
require_once "config/koneksi.php";
require_once "config/library.php";

if(isset($_POST['submit'])){
	
	// anti XSS dan SQL Injection
	function antiinjection($data){
		$filter_sql = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));

		return $filter_sql;
	}

	$nisn = antiinjection($_POST['nisn']);
	$nama = antiinjection($_POST['nama']);
	$asal = antiinjection($_POST['asal']);
	$email = antiinjection($_POST['email']);
	$kompetensi = antiinjection($_POST['kompetensi']);

	// untuk kebutuhan tabel ujian
	// nomor otomatis ujian
	$kode = "USM";

	// baca current date
	$today = date("ym");

	// baca nisn dari nisn siswa
	$nisn = $nisn;

	// cari no ujian yang berawalan dari tanggal hari ini
	$query_ujian = "SELECT MAX(no_ujian) AS LAST FROM ujian_masuk
					WHERE no_ujian LIKE '$kode%' 
					AND '$today%'";
	$sql_ujian = mysqli_query($conn, $query_ujian) or die(mysqli_error($conn));
	$data_ujian = mysqli_fetch_assoc($sql_ujian);


	// dicek dlu kebenaran datanya
	$lastTest = $data_ujian['last'];

	// baca no urut ujian dari yang terakhir
	$lastNotes = substr($lastTest, 8, 4);

	// nomor urut ujian di tambah 1
	$nextNo = $lastNotes + 1;

	// membuat format nomor urut usm berikutnya
	$nextTestNo = $kode.$today.sprintf('%04s', $nextNo);


	// no otomatis registrasi
	$kd = "PSB";

	$query_reg = "SELECT MAX(no_reg) AS LAST FROM siswa_baru
				WHERE no_reg LIKE '$kd%' AND '$today%'";
	$sql_reg = mysqli_query($conn, $$query_reg)or die(mysqli_error($conn));
	$data_reg = mysqli_fetch_assoc($sql_reg);

	$lastReg = $data_reg['last'];

	// baca no urus reg dari yang terakhir
	$lastReg = substr($lastReg,8,4);

	// nomor urut reg ditambah 1
	$nextReg = $lastReg + 1;

	// membuat format nomor reg
	$nextRegNo = $kd.$today.sprintf('04s', $nextReg);

	
}
?>