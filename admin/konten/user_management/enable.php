<?php

require '../../../config/koneksi.php';

$id = $_GET['id'];


$query_enable = "UPDATE admin SET aktif_admin = 'Y' WHERE id_admin = '$id'";
$sql_enable = mysqli_query($conn, $query_enable)or die("Error: " . mysqli_error($conn));

if($sql_enable){
	echo "<script>
			alert('User Telah Diaktifkan');
			document.location.href='../../usman'
		</script>";
	exit();
}
?>