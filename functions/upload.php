<?php  
function upload($path){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	// cek apakah tidak ada gambar yang di upload
	if($error === 4){
		echo "
			<script>
				alert('Pilih Gambar Terlebih dahulu, gambar belum di upload');
			</script>
		";
		return false;
	}
	// cek yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg' , 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "
			<script>
				alert('Harap upload gambar.');
			</script>
		";
		return false;
	}
	// cek jika ukuran terlalu besar dari 1MB
	if($ukuranFile > 1000000){
		echo "
			<script>
				alert('Ukuran File terlalu besar. Ukuran Maks 1MB');
			</script>
		";
		return false;
	}
	// lolos pengecekan, gambar siap upload
	// generate nama baru 
	
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;	
	move_uploaded_file($tmpName, $path.$namaFileBaru);
	return $namaFileBaru;
}


?>