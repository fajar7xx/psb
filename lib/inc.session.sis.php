<?php  

if(empty($_SESSION['noreg'])){
	echo "<script>
				alert('Akses Ditolak silahkan login dengan no pendaftaran dan password yang diberikan oleh sistem');
				window.location = 'sign-in.html';
			</script>";
	// echo "<meta http-equiv='refresh' content='0';url=sign_in.php>";
	// window.location = '../aktifasi.html';
	// header("Location: sign-in.html");
	exit();		
}

?>