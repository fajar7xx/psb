<?php  
$id = $_GET['id'];
$query_foto = "SELECT * FROM dok_foto WHERE no_reg = '$noreg'";
$sql_foto = mysqli_query($conn, $query_foto)or die(mysqli_error($conn));
$data_foto = mysqli_fetch_assoc($sql_foto);
$foto = $data_foto['pic_foto'];


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
		<h6>Edit Foto</h6>
	</div>
	<div class="card-body">
		<img src="<?=base_url($foto);?>" class="img-thumbnail">
		<form action="media.php?page=simpanfoto" method="post" enctype="multipart/form-data" onsubmit="return validasi()" name="form1">
			<input type="hidden" name="id" value="<?=$data_foto['id_dok_foto'];?>">
			<div class="form-group">
				<label for="foto"></label>
				<input type="file" name="gambar" id="foto" class="form-control-file">
			</div>

			<div class="form-group">
				<a href="unggah" class="btn btn-warning">Batal</a>
				<button type="submit" name="edit" class="btn btn-primary">Upload</button>
			</div>
		</form>
	</div>
</div>