<?php  
require '../../../config/koneksi.php';
require '../../../functions/nodos.php';
require '../../../functions/upload.php';
require '../../../config/library.php';
// require '../../../functions/output_errors.php';


if(isset($_POST['tambah'])){
	// print_r($_POST);
	// echo "<br>";
	// print_r($_FILES);

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


	// error handling jika tidak ada error baru 
	// bisa masukkan data ke database

	$qc_user = "SELECT * FROM admin WHERE username = '$username' OR email_admin = '$email'";
	$sc_user = mysqli_query($conn, $qc_user)or die("Error: " . mysqli_error($conn));

	// check email or username already exist
	if(mysqli_num_rows($sc_user) != 0){
		echo "<script>
				alert('username atau emai lsudah digunakan. harap menggunakan yang lainnya.');
			</script>";
		exit();
	}
	elseif($pass1 != $pass2){
		echo "<script>
				alert('Password tidak cocok.');
			</script>";
		exit();
	}
	elseif(strlen($pass1) < 8){
		echo "<script>
				alert('Minimal panjang karakter Password 8 karakter.');
			</script>";
		exit();
	}
	else{

			// karena tidak ada error
		// maka data dapat di masukkan
		// ke database

		$password = md5($pass1);

		// upload photo
		$path = $_SERVER['DOCUMENT_ROOT'] . '/psb/img/user/';
		$namaFile = upload($path);
		$photo = 'img/user/' . $namaFile;

		$query_simpan = "INSERT INTO admin(
							username,
							password,
							password_origin,
							nm_lengkap,
							alamat_admin,
							email_admin,
							aktif_admin,
							status_admin,
							pic_admin,
							dt_last_akses,
							tm_last_akses	
						)
						VALUES(	
							'$username',
							'$password',
							'$pass1',
							'$nama',
							'$alamat',
							'$email',
							'$aktifasi',
							'$status',
							'$photo',
							'$tgl_sekarang_lengkap',
							'$jam_sekarang'
						)";
		$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));


		}
	

	if($sql_simpan){
		echo "<script>
				alert('User berhasil di perbaharui');
				document.location.href='../../usman'
			</script>";
		exit();
	}
}
elseif(isset($_POST['edit'])){

	$id = $_POST['id'];
	// $username = noDos($_POST['username']);
	// $email = noDos($_POST['email']);
	$pass1 = noDos($_POST['password1']);
	$pass2 = noDos($_POST['password2']);
	$nama = noDos($_POST['nama']);
	$alamat = noDos($_POST['alamat']);
	$aktifasi = noDos($_POST['aktifasi']);
	$status = noDos($_POST['status']);

	if($pass1 != $pass2){
		echo "<script>
				alert('Password tidak cocok.');
			</script>";
		exit();
	}
	elseif(strlen($pass1) < 8){
		echo "<script>
				alert('Minimal panjang karakter Password 8 karakter.');
			</script>";
		exit();
	}
	else{

		// karena tidak ada error
		// maka data dapat di masukkan
		// ke database

		$password = md5($pass1);

		// upload photo
		$path = $_SERVER['DOCUMENT_ROOT'] . '/psb/img/user/';
		$namaFile = upload($path);
		$photo = 'img/user/' . $namaFile;

		$query_simpan = "UPDATE admin SET
							password = '$password',
							password_origin = '$pass1',
							nm_lengkap = '$nama',
							alamat_admin = '$alamat',
							aktif_admin = '$aktifasi',
							status_admin = '$status',
							pic_admin = '$photo'
						WHERE
							id_admin = '$id'";
		$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));
		}
	

	if($sql_simpan){
		echo "<script>
				alert('User berhasil di perbaharui');
				document.location.href='../../usman'
			</script>";
		exit();
	}

}

?>