<?php  
include "config/koneksi.php";

$query = "SELECT * FROM identitas_web LIMIT 1";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
?>

<div class="jumbotron">
	<h1 class="display-4"><?=$data['nm_sekolah'];?></h1>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">Alamat : <?=$data['alamat'];?></li>
		<li class="list-group-item">Kode Pos : <?=$data['kode_pos'];?></li>
		<li class="list-group-item">Telepon : <?=$data['telp'];?></li>
		<li class="list-group-item">Email : <?=$data['email'];?></li>
	</ul>
	<hr class="my-4">
</div>