<div class="card">
	<div class="card-header">
		<h6>Upload Kartu Keluarga</h6>
	</div>
	<div class="card-body">
		<form action="unggah/aksi/simpan-kk.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="file" name="kk" class="form-control-file">
			</div>
			<div class="form-group">
				<a href="unggah" class="btn btn-warning">Batal</a>
				<button type="submit" name="simpan" class="btn btn-primary">Upload</button>
			</div>
		</form>
	</div>
</div>