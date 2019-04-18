<?php  
require "../config/koneksi.php";
require "../helper/helper.php";

if(isset($_POST['submit'])){

	// print_r($_POST);
	// exit();

	$nopend = noInjetction($_POST['nopend']);
	$nopend = mysqli_real_escape_string($conn, $nopend);

	$pass = noInjetction($_POST['pass']);
	$pass = mysqli_real_escape_string($conn, $pass);

	$qCek = "SELECT * FROM psb WHERE no_reg = '$nopend' AND password = '$pass' AND status_aktivasi = 'Y'";
	$sCek = mysqli_query($conn, $qCek)or die(mysqli_error($conn));
	$data = mysqli_fetch_assoc($sCek);

	if(mysqli_num_rows($sCek)){

		// session_start();
		$_SESSION['noreg'] = $data['no_reg'];
		$_SESSION['pass'] = $data['password'];

		// print_r($_SESSION);
		header("Location: home");
	}
	else{
		echo "<script>
				alert('Gagal Masuk. anda belum melakukan aktifasi akun. silahkan melaukan aktifasi akun');
				document.location.href = '../aktifasi.html';
			</script>";
	}
}

?>