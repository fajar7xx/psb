<?php
require '../../../config/koneksi.php';

$id = $_GET['id'];


$query_disable = "UPDATE mapel SET aktif_mapel = 'N' WHERE id_mapel = '$id'";
$sql_disable = mysqli_query($conn, $query_disable)or die("Error: " . mysqli_error($conn));

if($sql_disable){
	echo "<script>
			alert('Mata Pelajaran Telah Dinonaktifkan');
			document.location.href='../../mapel';
		</script>";
	exit();
}
?>