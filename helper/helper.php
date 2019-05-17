<?php  
// ketiak memangl helper wajib menyertakan file koneksi

// anti xss dan sql anti injection
function noInjetction($data){
	$filterSql = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));

	return $filterSql;
}

// versi 2
function noDos($data){
	global $conn;

	$sql = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
	$sql = mysqli_real_escape_string($conn, $sql);

	return $sql;
}

// untuk kebutuhan tabel ujian
// no ujian USM
function getNoUjian(){
	// mengambil var $conn dari luar
	global $conn;

	$kode = "USM";
	$sekarang = date("ym");

	$queryUjian = "SELECT
					    MAX(no_ujian) AS terakhir
					FROM
					    ujian_masuk
					WHERE
					    no_ujian LIKE '$kode%'";
	$sqlUjian = mysqli_query($conn, $queryUjian) or die(mysqli_error($conn));
	$data = mysqli_fetch_assoc($sqlUjian);

	$terakhir_ujian = $data['terakhir'];
	$kd_akhir_ujian = substr($terakhir_ujian,7,4);
	$tambah_kd = $kd_akhir_ujian + 1;
	$kd_berikutnya = $kode.$sekarang.sprintf('%04s', $tambah_kd);

	return $kd_berikutnya;
}


// untuk nomor resgistrasi
// PSB
function getNoReg(){
	global $conn;

	$kode = "PSB";
	$sekarang = date("ym");

	$queryReg = "SELECT
				    MAX(no_reg) AS terakhir
				FROM
				    psb
				WHERE
				    no_reg LIKE '$kode%'";
	$sqlReg = mysqli_query($conn, $queryReg)or die(mysqli_error($conn));
	$data = mysqli_fetch_assoc($sqlReg);

	$terakhir_reg = $data['terakhir'];
	$kd_akhir_reg = substr($terakhir_reg, 7, 4);
	$tambah_kd = $kd_akhir_reg + 1;
	$kd_berikutnya = $kode.$sekarang.sprintf('%04s', $tambah_kd);

	return $kd_berikutnya;
}

// untuk nis siswa
// PSB
function getNis($noreg){
	global $conn;

	$query_psb = "SELECT * FROM psb WHERE no_reg = '$noreg'";
	$sql_psb = mysqli_query($conn, $query_psb)or die('Error: ' . mysqli_error($conn));
	$psb = mysqli_fetch_assoc($sql_psb);

	$kompetensi = $psb['id_kompetensi'];

	$sekarang = date("y");



	$query_nis = "SELECT
					    MAX(nis) AS terakhir
					FROM
					    psb
					WHERE
					    nis LIKE '$kompetensi%'";
	$sql_nis = mysqli_query($conn, $query_nis)or die("error: " . mysqli_error($conn));
	$nis = mysqli_fetch_assoc($sql_nis);

	$terakhir_nis = $nis['terakhir'];
	$kd_akhir_nis = substr($terakhir_nis, 5, 4);
	$tambah_nis = $kd_akhir_nis + 1;
	$kd_berikutnya = $kompetensi.$sekarang.sprintf('%04s', $tambah_nis);

	return $kd_berikutnya;
}



// fungsi menggenerate kode aktifasi ketika di kirim ke email
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

function getKodeAktifasi($length)
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

 // fungsi base_url
// function base_url($url = null){
// 	$base_url = "http://localhost/psb";
// 	if($url != null){
// 		return $base_url. "/" .$url;
// 	}
// 	else{
// 		return $base_url;
// 	}
// }
?>
