<?php  
require '../../../config/koneksi.php';
// require '../../../functions/nodos.php';
require '../../../helper/helper.php';

if(isset($_POST['simpan'])){
	$mapel = noDos($_POST['mapel']);
	$aktifasi = noDos($_POST['aktif']);

	$kd_mapel = getNoMapel();

	// echo $kd_mapel;

	$query = "INSERT INTO mapel (id_mapel, mapel, aktif_mapel) VALUES('$kd_mapel', '$mapel', '$aktifasi')";
	$sql = mysqli_query($conn, $query)or die("error: " . mysqli_error($conn));

	if($sql){
		echo "<script>
				alert('mata pelajaran Berhasil Ditambahkan');
				document.location.href='../../mapel';
			</script>";
		exit();
	}
}

elseif(isset($_POST['ubah'])){
	$id = noDos($_POST['id']);
	$mapel = noDos($_POST['mapel']);
	$aktifasi = noDos($_POST['aktif']);

	$query = "UPDATE mapel 
				SET
					mapel = '$mapel',
					aktif_mapel = '$aktifasi'
				WHERE
					id_mapel = '$id'";
	$sql = mysqli_query($conn, $query)or die("error: " . mysqli_error($conn));

	if($sql){
		echo "<script>
				alert('Mata Pelajaran Berhasil diubah');
				document.location.href='../../mapel';
			</script>";
		exit();
	}
}

?>