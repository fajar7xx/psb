<?php  
if(isset($_POST['submit'])){
	// print_r($_POST);

	$id_mapel = noDos($_POST['mapel']);

	// cek apakah data sudah ada di masukkan?
	$query_cek_mp = "SELECT * FROM nilai_raport WHERE no_reg = '$noreg' AND id_mapel = '$id_mapel'";
	$sql_cek_mp = mysqli_query($conn, $query_cek_mp)or die(mysqli_error($conn));

	if(mysqli_num_rows($sql_cek_mp)){
		echo "<script>alert('Mata Pelajaran Sudah Ada Sebelumnya. SIlahkan Masukkan Mata pelajaran lainnya');</script>";
		echo "<meta http-equiv='refresh' content='0;url=mapel'>";
	}
	else{
		$qs_mapel = "INSERT INTO nilai_raport(no_reg, id_mapel) VALUES('$noreg', '$id_mapel')";
		$sql_mapel = mysqli_query($conn, $qs_mapel)or die(mysqli_error($conn));

		echo "<script>alert('Mata Pelajaran Telah Ditambahkan');</script>";
		echo "<meta http-equiv='refresh' content='0;url=nilai-rapor'>";
	}


	// if($sql_mapel){
	// 	echo "<script>alert('Mata Pelajaran Telah Ditambahkan');</script>";
	// 	echo "<meta http-equiv='refresh' content='0;url=nilai-rapor'>";
	// }
	// else{
	// 	echo "<script>alert('Gagal');</script>";
	// }

}

?>
