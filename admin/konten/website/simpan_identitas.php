<?php
require '../../../config/koneksi.php';
require '../../../functions/autentikasi.php';
require '../../../functions/nodos.php';
require '../../../functions/base_url.php';

if(isset($_POST['submit'])){
	// print_r($_POST);

	$website = noDos($_POST['website']);
	$sekolah = noDos($_POST['sekolah']);
	$alamat = noDos($_POST['alamat']);
	$pos = noDos($_POST['pos']);
	$telp = noDos($_POST['telp']);
	$email = noDos($_POST['email']);
	$url = noDos($_POST['url']);
	$facebook = noDos($_POST['facebook']);
	$twitter = noDos($_POST['twitter']);
	$instagram = noDos($_POST['instagram']);
	$profil = trim(mysqli_real_escape_string($conn, $_POST['profil'] ));
	$deskripsi = noDos($_POST['deskripsi']);
	$keyword = noDos($_POST['keyword']);

	$query_simpan = "UPDATE 
						identitas_web
					SET
						nm_website = '$website',
						nm_sekolah = '$sekolah',
						alamat = '$alamat',
						kode_pos = '$pos',
						telp = '$telp',
						email = '$email',
						url = '$url',
						facebook = '$facebook',
						twitter = '$twitter',
						instagram = '$instagram',
						profil = '$profil',
						meta_deskripsi = '$deskripsi',
						meta_keyword = '$keyword'
					WHERE
						id_identitas = 1";


	$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error : " . mysqli_error($conn));
	
	if($sql_simpan){
		echo "<script>
				alert('data telah berhasil di perbaharui');
				document.location.href='../../dashboard'
			</script>";
	}
	else{
		echo "<script>alert('Data Gagal diperbaharui');</script>";
		echo "<meta http-equiv='refresh' content='0;url=identitas'>";
	}
}


?>