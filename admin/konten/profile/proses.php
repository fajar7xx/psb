<?php  
require '../../../config/koneksi.php';
require '../../../functions/nodos.php';
require '../../../functions/upload.php';
require '../../../config/library.php';
// require '../../../functions/output_errors.php';

if(isset($_POST['simpan'])){

	$id = $_POST['id'];
	// $username = noDos($_POST['username']);
	// $email = noDos($_POST['email']);
	$nama = noDos($_POST['nama']);
	$alamat = noDos($_POST['alamat']);

	// karena tidak ada error
	// maka data dapat di masukkan
	// ke database

	// upload photo
	$path = $_SERVER['DOCUMENT_ROOT'] . '/psb/img/user/';
	$namaFile = upload($path);
	$photo = 'img/user/' . $namaFile;

	$query_simpan = "UPDATE admin SET
						nm_lengkap = '$nama',
						alamat_admin = '$alamat',
						pic_admin = '$photo'
					WHERE
						id_admin = '$id'";
	$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));	

	if($sql_simpan){
		echo "<script>
				alert('Profile berhasil di perbaharui');
				document.location.href='../../dashboard'
			</script>";
		exit();
	}

}

?>