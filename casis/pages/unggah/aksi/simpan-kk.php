<?php  
// print_r($_FILES);
if(isset($_POST['simpan'])){
	// print_r($_FILES);
	// echo "<br>";
	// echo $noreg;

	$errors = [];

	$namaFile = $_FILES['dok_kk']['name'];
	$ukuranFile = $_FILES['dok_kk']['size'];
	$tmpFile = $_FILES['dok_kk']['tmp_name'];
	$tipeFile = $_FILES['dok_kk']['type'];
	


}

?>