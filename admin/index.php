<?php  
require_once '../config/koneksi.php';

if(isset($_SESSION['user'])){
	echo "<script>window.location='dashboard'</script>";
	// echo 'masuk pak ekhooo';
}
else{
	echo "<script>window.location='login'</script>";	
}
?>