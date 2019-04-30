<?php
require "../functions/upload.php";
// print_r($_FILES);
if(isset($_POST['simpan'])){
	// print_r($_FILES);
	// echo "<br>";
	// echo $noreg;
	$errors = [];

	// $namaFile = $_FILES['dok_kk']['name'];
	// $ukuranFile = $_FILES['dok_kk']['size'];
	// $tmpFile = $_FILES['dok_kk']['tmp_name'];
	// $tipeFile = $_FILES['dok_kk']['type'];
	
	// $path = base_url("img/img_kk/");
	$path = $_SERVER['DOCUMENT_ROOT'].'/psb/img/img_kk/';
	$namaFile = upload($path);
	$namaFile = 'img/img_kk/'.$namaFile;

	// echo $namaFile;
	$tgl = date("y-m-d");

	$query_simpan_kk = "INSERT INTO dok_kk(no_reg, tgl_up_kk, pic_dok_kk)VALUES('$noreg', '$tgl', '$namaFile')";
	$sql_simpan_kk = mysqli_query($conn, $query_simpan_kk)or die(mysqli_error($conn));

	if($sql_simpan_kk){
		echo "<script>alert('Image Ijazah siswa telah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=unggah'>";
	}


}

if(isset($_POST['edit'])){
	$id = $_POST['id'];
	// print_r($_FILES);
	$path = $_SERVER['DOCUMENT_ROOT'].'/psb/img/img_kk/';
	$namaFile = upload($path);
	$namaFile = 'img/img_kk/'.$namaFile;

	// echo $namaFile;
	$tgl = date("y-m-d");

	$qe_kk = "UPDATE dok_kk set tgl_up_kk = '$tgl', pic_dok_kk = '$namaFile' WHERE id_dok_kk = '$id'";
	$se_kk = mysqli_query($conn, $qe_kk)or die(mysqli_error($conn));

	if($se_kk){
		echo "<script>alert('Image Kartu keluarga siswa telah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=unggah'>";
	}
}

?>