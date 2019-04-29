<script type="text/javascript">
	function validasi(){
		var img_kk = (form1.dok_kk.value);
		if(img_kk == ""){
			alert("Pilih file dokumen kartu keluarga.");
			document.form1.dok_kk.focus();
			return false;
		}
	}
</script>

<div class="card">
	<div class="card-header">
		<h6>Upload Foto</h6>
	</div>
	<div class="card-body">
		<form action="media.php?page=simpanfoto" method="post" enctype="multipart/form-data" onsubmit="return validasi()" name="form1">
			<div class="form-group">
				<label for="foto"></label>
				<input type="file" name="gambar" id="foto" class="form-control-file">
			</div>

			<div class="form-group">
				<a href="unggah" class="btn btn-warning">Batal</a>
				<button type="submit" name="simpan" class="btn btn-primary">Upload</button>
			</div>
		</form>
	</div>
</div>