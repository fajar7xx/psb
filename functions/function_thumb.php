<?php  
// upload dokumen kk
function uploadkk($image){
	// direktori gambar
	$dir_upload = "../img/img_kk/";
	$file_upload = $dir_upload . $image;
	$image_type = $_FILES['dok_kk']['type'];
	$image_name = $_FILES['dok_kk']['name'];

	// simpan gambar dalam ukuran sehenarnya
	move_uploaded_file($image_name, $file_upload);

	// identitas file asli
	switch($image_type){
		case "image/pjpeg":
		case "image/jpeg":
		case "image/jpg":
			$img_src = imagecreatefromjpeg($file_upload);
			break;
		case "image/png":
		case "image/x-png":
			$img_src = imagecreatefrompng($file_upload);
			break;
	}

	$src_width = imagesx($img_src);
	$src_height = imagesy($img_src);

	// simpan dalam versi small 500px
	// set ukuran gambar hasil perubahan
	if($src_width >= 500){
		$dst_width = 500;
	}
	else{
		$dst_width = $src_width;
	}
	$dst_height = ($dst_width/$src_width)*$src_height;

	// proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width, $dst_height);
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	// simpan gambar
	switch($image_type){
		case "image/pjpeg":
		case "image/jpeg":
		case "image/jpg";
			imagejpeg($im, $dir_upload . "small_" . $image);
			break;
		case "image/png":
		case "image/x-png":
			imagepng($im, $dir_upload . "small_" . $image);
			break;
	} 

	// hapus gambar
	imagedestroy($im_src);
	imagedestroy($im);
}

?>