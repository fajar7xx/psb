<?php
require '../../../config/koneksi.php';

$id = $_GET['id'];


$query_disable = "UPDATE kompetensi SET aktif = 'N' WHERE id_kompetensi = '$id'";
$sql_disable = mysqli_query($conn, $query_disable)or die("Error: " . mysqli_error($conn));

if($sql_disable){
	echo "<script>
			alert('Kompetensi Telah Dinonaktifkan');
			document.location.href='../../kompetensi';
		</script>";
	exit();
}
?>