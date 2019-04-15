<?php
require_once "config/koneksi.php";

$kode_aktifasi = $_GET['code'];

echo "ini kode aktifasi nya" . $kode_aktifasi;

$query_psb = "SELECT * FROM psb WHERE kode_aktifasi = '$kode_aktifasi'";
$sql_psb = mysqli_query($conn, $query_psb)or die(mysqli_error($conn));

$data = mysqli_fetch_assoc($sql_psb);

$nama = $data ['nm_siswa'];
$noreg = $data ['no_reg'];
$pass = $data ['password'];
$nisn = $data ['nisn'];
$email = $data ['email_siswa'];

?>