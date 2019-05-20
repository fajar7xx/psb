<?php

require '../../../config/koneksi.php';

$id = $_GET['id'];

$query_delete = "DELETE FROM mapel WHERE id_mapel = '$id'";
$sql_delete = mysqli_query($conn, $query_delete)or die("Error: " . mysqli_error($conn));

if($sql_delete){
	echo "<script>
			alert('Mata Pelajaran berhasil hapus');
			document.location.href='../../mapel';
		</script>";
	exit();
}

?>