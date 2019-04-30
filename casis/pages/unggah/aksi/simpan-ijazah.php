<?php
require "../functions/upload.php";
// print_r($_FILES);
if(isset($_POST['simpan'])){
	// print_r($_FILES);
	// echo "<br>";
	// echo $noreg;
	// $errors = [];

	// $namaFile = $_FILES['dok_kk']['name'];
	// $ukuranFile = $_FILES['dok_kk']['size'];
	// $tmpFile = $_FILES['dok_kk']['tmp_name'];
	// $tipeFile = $_FILES['dok_kk']['type'];
	
	// $path = base_url("img/img_kk/");
	$path = $_SERVER['DOCUMENT_ROOT'].'/psb/img/img_ijazah/';
	$namaFile = upload($path);
	$namaFile = 'img/img_ijazah/'.$namaFile;

	// echo $namaFile;
	$tgl = date("y-m-d");

	$query_simpan_ijazah = "INSERT INTO dok_ijazah(no_reg, tgl_up_ijazah, pic_dok_ijazah) VALUES('$noreg', '$tgl', '$namaFile')";
	$sql_simpan_ijazah = mysqli_query($conn, $query_simpan_ijazah)or die(mysqli_error($conn));

	if($sql_simpan_ijazah){
		echo "<script>alert('Image KK siswa telah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=unggah'>";
	}


}

if(isset($_POST['edit'])){
	$id = $_POST['id'];

	$path = $_SERVER['DOCUMENT_ROOT'].'/psb/img/img_ijazah/';
	$namaFile = upload($path);
	$namaFile = 'img/img_ijazah/'.$namaFile;

	// echo $namaFile;
	$tgl = date("y-m-d");

	$qe_ijz = "UPDATE dok_ijazah set tgl_up_ijazah = '$tgl', pic_dok_ijazah = '$namaFile' WHERE id_dok_ijazah = '$id'";
	$se_ijz = mysqli_query($conn, $qe_ijz)or die(mysqli_error($conn));

	if($se_ijz){
		echo "<script>alert('Image Ijazah siswa telah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=unggah'>";
	}
}

?>