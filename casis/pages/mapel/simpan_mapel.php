<?php  
if(isset($_POST['submit'])){
	// print_r($_POST);

	$id_mapel = $_POST['mapel'];

	$qs_mapel = "INSERT INTO nilai_raport(no_reg, id_mapel) VALUES('$noreg', '$id_mapel')";
	$sql_mapel = mysqli_query($conn, $qs_mapel)or die(mysqli_error($conn));

	if($sql_mapel){
		echo "<script>alert('Mata Pelajaran Telah Ditambahkan');</script>";
		echo "<meta http-equiv='refresh' content='0;url=nilai-rapor'>";
	}
	else{
		echo "<script>alert('Gagal');</script>";
	}

}

?>
