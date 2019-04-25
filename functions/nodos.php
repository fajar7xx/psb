<?php  

// versi 2
function noDos($data){
	// diambil dari file koneksi.php
	global $conn;

	$sql = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
	$sql = mysqli_real_escape_string($conn, $sql);

	return $sql;
}

?>