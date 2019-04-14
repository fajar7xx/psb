<?php  
date_default_timezone_set('Asia/Jakarta');

$seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

$tgl_sekarang_lengkap = ("Y-m-d");
$tgl_sekarang = ("d");
$bln_sekarang = ("m");
$thn_sekarang = ("Y");

$jam_sekarang = ("H:i:s");

$nama_bulan = array(1=> "Januari", "Februari", "Maret", "April", 
						"Mei", "Juni", "Juli", "Agustus", 
						"September", "Oktober", "November", "Desember");

// menambahkan 3 hari kedepan pada variabel sekarang
$btstgl = strtotime(' + 3 day', strtotime($tgl_sekarang_lengkap));

// memanggil var bstgl
$tgl_ujian = date('Y-m-j', $btstgl);

?>