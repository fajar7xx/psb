<?php  
date_default_timezone_set('Asia/Jakarta');

$seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

<<<<<<< HEAD
$tgl_sekarang_lengkap = date("Y-m-d");
$tgl_sekarang = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
=======
$tgl_sekarang_lengkap = ("Y-m-d");
$tgl_sekarang = ("d");
$bln_sekarang = ("m");
$thn_sekarang = ("Y");
>>>>>>> master

$jam_sekarang = date("H:i:s");

$nama_bulan = array(1=> "Januari", "Februari", "Maret", "April"						,"Mei", "Juni", "Juli", "Agustus", 
						"September", "Oktober", "November", "Desember");

// menambahkan 7 hari kedepan pada variabel sekarang
$btstgl = strtotime(' +7 days', strtotime($tgl_sekarang_lengkap));

// memanggil var bstgl
$tgl_ujian = date('Y-m-j', $btstgl);

?>