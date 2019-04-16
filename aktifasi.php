<?php 

include 'config/koneksi.php';
include 'helper/helper.php';

if(isset($_POST['aktifkan'])){
	$noreg = noInjetction($_POST['noreg']);
	$noreg = mysqli_real_escape_string($conn, $noreg);

	$kodeaktifasi = noInjetction($_POST['kodeaktifasi']);
	$kodeaktifasi = mysqli_real_escape_string($conn, $kodeaktifasi);

	// status hanya Y dan N (kapital)
	$status = "N";	

	$query_psb = "SELECT * FROM psb 
					WHERE
					no_reg = '$noreg' AND
					kode_aktivasi = '$kodeaktifasi' AND
					status_aktivasi = '$status'
					";
	$sql_psb = mysqli_query($conn, $query_psb)or die(mysqli_error($conn));
	if(mysqli_num_rows($sql_psb)){
		$query_aktifasi = "UPDATE psb SET status_aktivasi = 'Y'
							WHERE
							no_reg = '$noreg' AND
							kode_aktivasi = '$kodeaktifasi'";
		$sql_aktifasi = mysqli_query($conn, $query_aktifasi)or die(mysqli_error($conn));
		echo "<script>
				alert('Akun calon siswa anda telah aktif. Silahkan login untuk melengkapi data siswa dan nilai.');
				document.location.href='home';
			</script>";
			exit();
	}
	else{
		echo "<script>
				alert('Maaf. Anda telah melakukan aktifasi akun sebelumnya. ');
				document.location.href='home';
			</script>";
			exit();
	}
}

?>


<div class="card py-1 px-2">
	<div class="card-header">
		<h1 class="text-center">Aktifasi Akun</h1> 
	</div>
	<div class="card-body">
		Silahkan Masukkan No registrasi dan kode aktifasi yang telah anda dapatkan pada form ini untuk mengaktifkan akun anda.
		<hr>
		<form action="" method="post">
			<div class="form-group">
				<label for="noreg">No Registrasi</label>
				<input type="text" class="form-control" id="noreg" name="noreg" required>
			</div>
			<div class="form-group">
				<label for="kodeaktifasi">Kode Aktifasi</label>
				<input type="text" class="form-control" id="kodeaktifasi" name="kodeaktifasi" required>
			</div>
			<button type="submit" class="btn btn-block btn-info" name="aktifkan">Aktifasi</button>
		</form>
	</div>
</div>
