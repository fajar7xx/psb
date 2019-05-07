<?php  

// versi sandhika galih
// function query($query){
// 	global $conn;

// 	$sql = mysqli_query($conn, $query)or die("Error : " . mysqli_error($conn));

// 	$rows = [];

// 	while($row = mysqli_fetch_assoc($sql)){
// 		$rows[] = $row;
// 	}

// 	return $rows;
// }

// versi  fajar
function query($query){
	global $conn;

	$sql = mysqli_query($conn, $query)or die("Error : " . mysqli_error($conn));

	$data = mysqli_fetch_assoc($sql);

	return $data;
}
?>