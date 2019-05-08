<?php  
require '../../../config/koneksi.php';
require '../../../functions/autentikasi.php';

if(isset($_POST['submit'])){
	$deskripsi = trim(mysqli_real_escape_string($conn, $_POST['deskripsi1']));
	$aktif = $_POST['aktif'];

	$query_simpan = "UPDATE
						cara_daftar
					SET
						deskripsi = '$deskripsi',
						aktif_caradft = '$aktif'
					WHERE
						id_caradft = 1";
	$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));

	if($sql_simpan){
		echo "<script>
				alert('data telah berhasil di perbaharui');
				document.location.href='../../dashboard'
			</script>";
	}
	else{
		echo "<script>alert('Data Gagal diperbaharui');</script>";
		echo "<meta http-equiv='refresh' content='0;url=cara-pendaftaran'>";
	}
}


?>