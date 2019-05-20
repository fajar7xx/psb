<?php  
require '../../../config/koneksi.php';
require '../../../functions/nodos.php';
require '../../../config/library.php';

if(isset($_POST['simpan'])){
	$id = $_POST['id'];
	$passlama = $_POST['passlama'];
	$password = md5($passlama);

	$pass1 = $_POST['newpass1'];
	$pass2 = $_POST['newpass2'];

	$qc = "SELECT * FROM admin WHERE id_admin = '$id' AND password = '$password'";
	$sc = mysqli_query($conn, $qc)or die("Error: " . mysqli_error($conn));

	if(mysqli_num_rows($sc)){
		if(strlen($pass1) >= 8){
			if($pass1 == $pass2){
				$password_baru = md5($pass1);
				$qu_pass = "UPDATE admin 
							SET
								password = '$password_baru',
								password_origin = '$pass1'
							WHERE
								id_admin = '$id'";
				$su_update = mysqli_query($conn, $qu_pass)or die("Error: " . mysqli_error($conn));

				echo "<script>
						alert('password berhasil diubah');
						document.location.href='../../change-pass'
					</script>";
				exit();

			}
			else{
				echo "<script>
						alert('password tidak cocok');
						document.location.href='../../change-pass'
					</script>";
				exit();
			}
		}
		else{
			echo "<script>
						alert('Minimal panjang password 8 karakter');
						document.location.href='../../change-pass'
					</script>";
				exit();
		}
	}
	else{
		echo "<script>
				alert('password tidak sesuai');
				document.location.href='../../change-pass'
			</script>";
		exit();
	}
}

?>