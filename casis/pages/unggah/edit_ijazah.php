<?php  
$id = $_GET['id'];
$query_ijazah ="SELECT * FROM dok_ijazah WHERE no_reg = '$noreg'";
$sql_ijazah = mysqli_query($conn, $query_ijazah)or die(mysqli_error($conn));
$data_ijazah = mysqli_fetch_assoc($sql_ijazah);
$ijazah = $data_ijazah['pic_dok_ijazah'];

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
		<h6>Edit Ijazah</h6>
	</div>
	<div class="card-body">
		<img src="<?=base_url($ijazah);?>" class="img-thumbnail">
		<form action="media.php?page=simpanijazah" method="post" enctype="multipart/form-data" onsubmit="return validasi()" name="form1">
			<input type="hidden" name="id" value="<?=$data_ijazah['id_dok_ijazah'];?>">
			<div class="form-group">
				<label for="ijazah"></label>
				<input type="file" name="gambar" id="ijazah" class="form-control-file">
			</div>

			<div class="form-group">
				<a href="unggah" class="btn btn-warning">Batal</a>
				<button type="submit" name="edit" class="btn btn-primary">Upload</button>
			</div>
		</form>
	</div>
</div>