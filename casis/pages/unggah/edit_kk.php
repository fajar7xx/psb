<?php  
$id = $_GET['id'];
$query_kk = "SELECT * FROM dok_kk WHERE id_dok_kk = '$id'";
$sql_kk = mysqli_query($conn, $query_kk)or die(mysqli_error($conn));
$data_kk = mysqli_fetch_assoc($sql_kk);
$kk = $data_kk['pic_dok_kk'];
?>

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
		<h6>Upload Kartu Keluarga Terbaru</h6>
	</div>
	<div class="card-body">
		<img src="<?=base_url($kk);?>" class="img-thumbnail">
		<form action="media.php?page=simpankk" method="post" enctype="multipart/form-data" onsubmit="return validasi()" name="form1">
			<input type="hidden" name="id" value="<?=$data_kk['id_dok_kk'];?>" >
			<div class="form-group">
				<label for="dok_kk"></label>
				<input type="file" name="gambar" id="dok_kk" class="form-control-file">
			</div>

			<div class="form-group">
				<a href="unggah" class="btn btn-warning">Batal</a>
				<button type="submit" name="edit" class="btn btn-primary">Edit</button>
			</div>
		</form>
	</div>
</div>