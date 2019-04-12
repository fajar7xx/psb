<?php  
// session_start();

?>

<script type="text/javascript">
	function validasi(){
		var kompetensi = (form1.kompetensi.value);
		if(kompetensi == 0){
			alert("Pilih Bidang Kompetensi.");
			document.form1.kompetensi.focus();
			return false;
		}
	}
</script>


<div class="card py-1 px-2">
	<div class="alert alert-info">
		<p class="text-center">Lengkapi formulir blanko pendaftaran siswa dibawah ini.</p>
	</div>

	<form role="form1" name="form1" action="aksi-registrasi.html" method="post" onsubmit="return validasi()">
		<div class="form-group">
			<label for="nisn">NISN</label>
			<input type="text" name="nisn" placeholder="Masukkan NISN" class="form-control" id="nisn" required>
		</div>

		<div class="form-group">
			<label for="nama">Nama Lengkap Siswa</label>
			<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" id="nama" required>
		</div>
		<div class="form-group">
			<label for="asal">Asal Sekolah</label>
			<input type="text" name="asal" placeholder="Asal Sekolah" class="form-control" id="asal" required>
		</div>
		<div class="form-group">
			<label for="email">Email Siswa</label>
			<input type="email" name="email" placeholder="alamat email" class="form-control" id="email" required>
		</div>

		<div class="form-group">
			<label for="kompetensi">Kompetensi</label>
			<select class="form-control" name="kompetensi" id="kompetensi">
				<option value="">pilih bidang kompetensi</option>
				<?php 
				include "config/koneksi.php";

				$aktif = "Y";
				$query = "SELECT * FROM kompetensi WHERE aktif = '$aktif' ORDER BY id_kompetensi";
				$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

				while($data = mysqli_fetch_assoc($sql)):
				?>
					<option value="<?=$data['id_kompetensi'];?>"><?=$data['bid_kompetensi'];?></option>
				<?php  
				endwhile;
				?>
			</select>
		</div>

		<div class="float-right">
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</div>
	</form>
</div>
