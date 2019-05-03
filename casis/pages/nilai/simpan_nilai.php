<?php  
if(isset($_POST['simpan'])){
	// print_r($_POST);
	// echo "<br>";

	$idmapel = $_POST['idmapel'];
	$nil1 = isset($_POST['nil1']) ? $_POST['nil1'] : '';
	$nil2 = isset($_POST['nil2']) ? $_POST['nil2'] : '';
	$nil3 = isset($_POST['nil3']) ? $_POST['nil3'] : '';
	$nil4 = isset($_POST['nil4']) ? $_POST['nil4'] : '';
	$nil5 = isset($_POST['nil5']) ? $_POST['nil5'] : '';

	$jml = count($idmapel);
	// echo "jumlah data : " . $jml;

	for($x=0; $x<$jml; $x++){

		if(($nil1[$x]) == "" or !is_numeric($nil1[$x]) or
			($nil2[$x]) == "" or !is_numeric($nil2[$x]) or
			($nil3[$x]) == "" or !is_numeric($nil3[$x]) or
			($nil4[$x]) == "" or !is_numeric($nil4[$x]) or
			($nil5[$x]) == "" or !is_numeric($nil5[$x])){
				echo "<script>alert('Nilai semester hanya dapat di isi oleh angka.');</script>";
				echo "<meta http-equiv='refresh' content='0;url=nilai-rapor'>";
				exit();

		}
		else{
			$rata[$x] = ($nil1[$x] + $nil2[$x] + $nil3[$x] + $nil4[$x] + $nil5[$x]) / 5;

			// foreach($rata as $r){
			// 	echo $r . "<br>";
			// }
			$qu_nilai = "UPDATE nilai_raport 
							SET 
								nil1 = '$nil1[$x]',
								nil2 = '$nil2[$x]',
								nil3 = '$nil3[$x]',
								nil4 = '$nil4[$x]',
								nil5 = '$nil5[$x]',
								nil_ratarata = '$rata[$x]'
							WHERE
								id_mapel = '$idmapel[$x]' AND
								no_reg = '$noreg'
							";
			$su_nilai = mysqli_query($conn, $qu_nilai)or die(mysqli_error($conn));

			if($su_nilai){
				echo "<script>alert('Nilai Mata Pelajaran Telah Ditambahkan');</script>";
				echo "<meta http-equiv='refresh' content='0;url=home'>";
			}
			else{
				echo "<script>alert('Gagal');</script>";
			}
		}
	}
}

?>