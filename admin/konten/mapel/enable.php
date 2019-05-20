<?php
require '../../../config/koneksi.php';

$id = $_GET['id'];


$query = "UPDATE mapel SET aktif_mapel = 'Y' WHERE id_mapel = '$id'";
$sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));

if($sql){
	echo "<script>
			alert('Mata Pelajaran Telah Diaktifkan');
			document.location.href='../../mapel';
		</script>";
	exit();
}
?>