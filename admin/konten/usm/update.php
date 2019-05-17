<?php 
require '../../../config/koneksi.php';
// require '../../../functions/nodos.php';
require '../../../helper/helper.php';


if(isset($_POST['submit'])){
	$noreg = noDos($_POST['nopend']);
	$no_ujian = noDos($_POST['noujian']);
	$waktu = noDos($_POST['waktu']);
	$ruang = noDos($_POST['ruang']);
	$hasil = $_POST['hasil'];
	// $ket = noDos($_POST['keterangan']);

	if($hasil >= 70){
		$ket = "Lulus";
	}
	elseif($hasil = 0){
		$ket = "Belum";
	}
	else{
		$ket = "Tidak";
	}

	// generate nis
	$nis = getNis($noreg);

	// echo $nis;
	
	$qu_ujian = "UPDATE
					ujian_masuk
				SET
					jam_ujian = '$waktu',
					ruang_ujian = '$ruang',
					hasil_ujian = '$hasil',
					ket_ujian = '$ket'
				WHERE
					no_ujian = '$no_ujian'";
	$su_ujian = mysqli_query($conn, $qu_ujian)or die("Error: " . mysqli_error($conn));

	if($ket == "Lulus"){
		$qu_psb = "UPDATE
						psb
					SET
						nis = '$nis'
					WHERE
						no_reg = '$noreg'";
		$su_psb = mysqli_query($conn, $qu_psb)or die('Error: ' . mysqli_error($conn));
	}

	echo "<script>
			alert('Data ujian saringan masuk siswa baru telah di update.');
			document.location.href='../../usm';
			</script>";

}
?>