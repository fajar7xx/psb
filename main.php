<?php  
include "config/koneksi.php";

$query = "SELECT * FROM informasi LIMIT 1";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
?>

<div class="jumbotron">
	<h1 class="display-4"><?=$data['judul_info'];?></h1>
	<p class="lead">
		<?=$data['deskripsi'];?>
	</p>
	<hr class="my-4">
	<a href="#" class="btn btn-primary" role="button">Learn More</a>
</div>