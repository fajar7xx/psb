<?php

require '../../../config/koneksi.php';

$id = $_GET['id'];

$query_delete = "DELETE FROM admin WHERE id_admin = '$id'";
$sql_delete = mysqli_query($conn, $query_delete)or die("Error: " . mysqli_error($conn));

if($sql_delete){
	echo "<script>
			alert('User berhasil hapus');
			document.location.href='../../usman'
		</script>";
	exit();
}

?>