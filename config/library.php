<?php  
date_default_timezone_set('Asia/Jakarta');

// pengaturan waktu, jam, hari
$seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];


$tgl_sekarang_lengkap = date("Y-m-d");
$tgl_sekarang = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");

$jam_sekarang = date("H:i:s");

$nama_bulan = array(1=> "Januari", "Februari", "Maret", "April"						,"Mei", "Juni", "Juli", "Agustus", 
						"September", "Oktober", "November", "Desember");

// menambahkan 7 hari kedepan pada variabel sekarang
$btstgl = strtotime(' +7 days', strtotime($tgl_sekarang_lengkap));

// memanggil var bstgl
$tgl_ujian = date('Y-m-j', $btstgl);

?>