<?php  
require '../../../config/koneksi.php';
require '../../../functions/nodos.php';

if(isset($_POST['simpan'])){
	$kompetensi = noDos($_POST['kompetensi']);
	$aktifasi = noDos($_POST['aktif']);

	$query = "INSERT INTO kompetensi (bid_kompetensi, aktif) VALUES('$kompetensi', '$aktifasi')";
	$sql = mysqli_query($conn, $query)or die("error: " . mysqli_error($conn));

	if($sql){
		echo "<script>
				alert('Kompetensi Berhasil Ditambahkan');
				document.location.href='../../kompetensi';
			</script>";
		exit();
	}
}

elseif(isset($_POST['ubah'])){
	$id = noDos($_POST['id']);
	$kompetensi = noDos($_POST['kompetensi']);
	$aktifasi = noDos($_POST['aktif']);

	$query = "UPDATE kompetensi 
				SET
					bid_kompetensi = '$kompetensi',
					aktif = '$aktifasi'
				WHERE
					id_kompetensi = '$id'";
	$sql = mysqli_query($conn, $query)or die("error: " . mysqli_error($conn));

	if($sql){
		echo "<script>
				alert('Kompetensi Berhasil diubah');
				document.location.href='../../kompetensi';
			</script>";
		exit();
	}
}

?>