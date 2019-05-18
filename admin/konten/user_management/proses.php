<?php  
require '../../../config/koneksi.php';
require '../../../functions/nodos.php';
require '../../../functions/upload.php';
require '../../../config/library.php';


if(isset($_POST['tambah'])){
	print_r($_POST);
	echo "<br>";
	print_r($_FILES);

	// error dikumpulkan
	// 1 cek username exist
	// 2 cek password sama atau gak
	// 3 cek email already
	// proses
	

	$username = noDos($_POST['username']);
	$email = noDos($_POST['email']);
	$pass1 = noDos($_POST['password1']);
	$pass2 = noDos($_POST['password2']);
	$nama = noDos($_POST['nama']);
	$alamat = noDos($_POST['alamat']);
	$aktifasi = noDos($_POST['aktifasi']);
	$status = noDos($_POST['status']);

	$qc_email = "SELECT * FROM admin WHERE email_admin = '$email'";
	$sc_email = mysqli_query($conn, $qc_email)or die("Error: " . mysqli_error($conn));
	if(mysqli_num_rows($sc_email) != 0){
		$error = "email telah terdaftar. coba email lain.";
	}

	$qc_username = "SELECT * FROM admin WHERE username = '$username'";
	$sc_username = mysqli_query($conn, $qc_username)or die("Error: " . mysqli_error($conn));
	if(mysqli_num_rows($sc_username) != 0){
		$error = "Username telah ada silah coba yang lain.";
	}

	if($pass1 != $pass2){
		$error = "password tidak sesuai.";
	}

	if(strlen($pass) < 8){
		$error = "password minimal 8 karakter";
	}

}
elseif(isset($_POST['edit'])){

}



?>