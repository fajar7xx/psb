<?php

require '../../../config/koneksi.php';
include '../../../functions/query.php';

$id = $_GET['id'];

// cek akun
$data = query("SELECT * FROM admin WHERE id_admin = '$id'");
$username = $data['username'];

if($username == $_SESSION['user']['username']){
	echo "<script>
			alert('Anda TIdak dapat menonaktifkan akun anda sendiri');
			document.location.href='../../usman';
		</script>";
}
else{
	$query_disable = "UPDATE admin SET aktif_admin = 'N' WHERE id_admin = '$id'";
	$sql_disable = mysqli_query($conn, $query_disable)or die("Error: " . mysqli_error($conn));

	if($sql_disable){
		echo "<script>
				alert('User Telah Dinonaktifkan');
				document.location.href='../../usman'
			</script>";
		exit();
	}
}
?>