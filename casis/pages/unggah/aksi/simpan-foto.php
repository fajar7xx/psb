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
	$path = $_SERVER['DOCUMENT_ROOT'].'/psb/img/img_foto/';
	$namaFile = upload($path);
	$namaFile = 'img/img_foto/'.$namaFile;

	// echo $namaFile;
	$tgl = date("y-m-d");

	$query_simpan_foto = "INSERT INTO dok_foto(no_reg, tgl_up_foto, pic_foto)VALUES('$noreg', '$tgl', '$namaFile')";
	$sql_simpan_foto = mysqli_query($conn, $query_simpan_foto)or die(mysqli_error($conn));

	if($sql_simpan_foto){
		echo "<script>alert('foto siswa telah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=unggah'>";
	}


}

?>