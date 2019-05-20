<?php

require '../../../config/koneksi.php';

$id = $_GET['id'];

$query_delete = "DELETE FROM kompetensi WHERE id_kompetensi = '$id'";
$sql_delete = mysqli_query($conn, $query_delete)or die("Error: " . mysqli_error($conn));

if($sql_delete){
	echo "<script>
			alert('Kompetensi berhasil hapus');
			document.location.href='../../kompetensi';
		</script>";
	exit();
}

?>