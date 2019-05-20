<?php
require '../../../config/koneksi.php';

$id = $_GET['id'];


$query = "UPDATE kompetensi SET aktif = 'Y' WHERE id_kompetensi = '$id'";
$sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));

if($sql){
	echo "<script>
			alert('Kompetensi Telah Diaktifkan');
			document.location.href='../../kompetensi';
		</script>";
	exit();
}
?>