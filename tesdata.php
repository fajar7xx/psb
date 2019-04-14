<?php  
require 'config/koneksi.php';

$kode = "USM";

	// baca current date tahun dan bulan
	$today = date("ym");

	// baca nisn dari nisn siswa
	// $nisn = $nisn;

	// cari no ujian yang berawalan dari tanggal hari ini
	// $query_ujian = "SELECT MAX(no_ujian) AS LAST FROM ujian_masuk
	// 				WHERE no_ujian LIKE '$kode%' 
	// 				AND '$today%'";

	$query_ujian = "SELECT MAX(no_ujian) AS LAST FROM ujian_masuk
					WHERE no_ujian LIKE '$kode%'";
	$sql_ujian = mysqli_query($conn, $query_ujian) or die(mysqli_error($conn));
	$data_ujian = mysqli_fetch_assoc($sql_ujian);


	// dicek dlu kebenaran datanya
	$lastTest = $data_ujian['LAST'];
	// var_dump($data_ujian);
	// print_r($data_ujian);

	// baca no urut ujian dari yang terakhir
	$lastNotes = substr($lastTest, 8, 4);
	echo $lastNotes;
	// // nomor urut ujian di tambah 1
	$nextNo = $lastNotes + 1;
	echo "<br>";
	echo $nextNo;

	// // membuat format nomor urut usm berikutnya
	$nextTestNo = $kode.$today.sprintf('%04s', $nextNo);
	echo "<br>";
	echo $nextTestNo;

	// function randomCode($len="10"){
	// 	global $pass;
	// 	global $lchar;
	// 	$code = NULL;

	// 	for($i=0; $i<=$len; $i++){
	// 		$char = chr(rand(48, 122));
	// 		while(!preg_match("[a-zA-Z0-9]", $char)){
	// 			if($char == $lchar){
	// 				continue;
	// 			}
	// 			$char = chr(rand(48,90));
	// 		}
	// 		$pass .= $char;
	// 		$lchar .= $char;
	// 	}

	// 	return $pass;
	// }

	// // kirim notif aktifasi ke email peserta
	// // $kode_aktifasi = randomCode();
	// $kode_aktifasi = md5(uniqid(rand("[a-zA-Z0-9]")));

	// echo "<br>";
	// echo $kode_aktifasi;

	function crypto_rand_secure($min, $max)
	{
		$range = $max - $min;
	    if ($range < 1) return $min; // not so random...
	    $log = ceil(log($range, 2));
	    $bytes = (int) ($log / 8) + 1; // length in bytes
	    $bits = (int) $log + 1; // length in bits
	    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
	    do {
	    	$rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
	        $rnd = $rnd & $filter; // discard irrelevant bits
	    } while ($rnd > $range);
	    return $min + $rnd;
	}

	function getToken($length)
	{
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet.= "0123456789";
	    $max = strlen($codeAlphabet); // edited

	    for ($i=0; $i < $length; $i++) {
	    	$token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
	    }

	    return $token;
	}

	echo "<br>";
	$code = getToken(12);
	echo "$code";

?>