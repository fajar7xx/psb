<?php
require '../../../config/koneksi.php';
require '../../../functions/autentikasi.php';
require '../../../functions/nodos.php';
require '../../../functions/base_url.php';


if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$sts_verif = $_POST['verifikasi'];

	$query_simpan = "UPDATE 
						psb
					SET
						status_verifikasi = '$sts_verif'
					WHERE
						no_reg = '$id'";

	$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));

	if($sql_simpan){
		echo "<script>
				alert('data telah berhasil di perbaharui');
				document.location.href='../../dashboard'
			</script>";
	}
	else{
		echo "<script>alert('Data Gagal diperbaharui');</script>";
		echo "<meta http-equiv='refresh' content='0;url=psb'>";
	}
}

//javascript function to open in the same window   
    // echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
   

?>