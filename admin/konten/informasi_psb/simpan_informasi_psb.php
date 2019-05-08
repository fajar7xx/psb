<?php  
require '../../../config/koneksi.php';
require '../../../functions/autentikasi.php';

if(isset($_POST['submit'])){
	$judul = trim(mysqli_real_escape_string($conn, $_POST['judul']));
	$deskripsi = trim(mysqli_real_escape_string($conn, $_POST['deskripsi']));
	$aktif = $_POST['aktif'];

	$query_simpan = "UPDATE
						informasi
					SET
						judul_info = '$judul',
						deskripsi = '$deskripsi',
						aktif_info = '$aktif'
					WHERE
						id_info = 1";
	$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));

	if($sql_simpan){
		echo "<script>
				alert('data telah berhasil di perbaharui');
				document.location.href='../../dashboard'
			</script>";
	}
	else{
		echo "<script>alert('Data Gagal diperbaharui');</script>";
		echo "<meta http-equiv='refresh' content='0;url=informasi-psb'>";
	}
}


?>