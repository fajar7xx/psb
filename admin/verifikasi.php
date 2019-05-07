<?php  
require_once '../config/koneksi.php';
require_once '../functions/nodos.php';
require_once '../config/library.php';


if(isset($_POST['login'])){
	// print_r($_POST);
	// login kali ini mengugnakan email dlu
	$user = noDos($_POST['user']);
	$pass = noDos($_POST['pass']);
	$pass = md5($pass);

	$query_cek = "SELECT * 
					FROM 
						admin 
					WHERE
						(username = '$user' OR email_admin = '$user')
					AND
						password = '$pass'
					AND
						aktif_admin = 'Y'";
	$sql_cek = mysqli_query($conn, $query_cek)or die(mysqli_error($conn));

	$user = mysqli_fetch_assoc($sql_cek);
	
	$username = $user['username'];
	$email = $user['email_admin'];

	if(mysqli_num_rows($sql_cek)){
		
		// print_r($_SESSION);
		// echo 'berhasil masuk';

		$query_log = "UPDATE admin
						SET
							dt_last_akses = '$tgl_sekarang_lengkap',
							tm_last_akses = '$jam_sekarang'
						WHERE
							username = '$username'";
		$sql_log = mysqli_query($conn, $query_log)or die(mysqli_error($conn));

		// set session
		$_SESSION['user'] = $user;

		echo "<script>
				window.location = 'dashboard';
			</script>";

		exit();

	}
	else{
		echo "<script>
				alert('Akses Ditolak');
				document.location.href = 'login';
			</script>";
	}
}


?>