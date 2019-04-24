<?php  
if(isset($_POST['submit'])){
	// print_r($_POST);

	$no_regis = noDos($_POST['no_regis']);
	$nama = noDos($_POST['nama']);
	$tempat = noDos($_POST['tempat']);
	$lahir = noDos($_POST['lahir']);
	$jk = noDos($_POST['jk']);
	$agama = noDos($_POST['agama']);
	$anakke = noDos($_POST['anakke']);
	$jmlsaudara = noDos($_POST['jmlsaudara']);
	$statusanak = noDos($_POST['statusanak']);
	$tinggibdn = noDos($_POST['tinggibdn']);
	$beratbdn = noDos($_POST['beratbdn']);
	$goldarah = noDos($_POST['goldarah']);
	$alamat = noDos($_POST['alamat']);
	$kotakab = noDos($_POST['kotakab']);
	$kodepos = noDos($_POST['kodepos']);
	$nohp = noDos($_POST['nohp']);
	$notel = noDos($_POST['notel']);
	$email = noDos($_POST['email']);
	$statusrmh = noDos($_POST['statusrmh']);
	$kendaraan = noDos($_POST['kendaraan']);
	$asal_sekolah = noDos($_POST['asal_sekolah']);
	$alamat_sekolah = noDos($_POST['alamat_sekolah']);
	$no_ijazah = noDos($_POST['no_ijazah']);
	$tgl_ijazah = noDos($_POST['tgl_ijazah']);
	$thn_ijazah = noDos($_POST['thn_ijazah']);
	$nilai_un = noDos($_POST['nilai_un']);
	$prestasi_akd = noDos($_POST['prestasi_akd']);
	$prestasi_olg = noDos($_POST['prestasi_olg']);
	$prestasi_seni = noDos($_POST['prestasi_seni']);
	$nama_ayah = noDos($_POST['nama_ayah']);
	$pek_ayah = noDos($_POST['pek_ayah']);
	$peng_ayah = noDos($_POST['peng_ayah']);
	$peng_ayah = str_replace('.', '', $peng_ayah);
	$nama_ibu = noDos($_POST['nama_ibu']);
	$pek_ibu = noDos($_POST['pek_ibu']);
	$peng_ibu = noDos($_POST['peng_ibu']);
	$peng_ibu = str_replace('.', '', $peng_ibu);
	$hp_ortu = noDos($_POST['hp_ortu']);
	$nama_wali = noDos($_POST['nama_wali']);
	$pek_wali = noDos($_POST['pek_wali']);
	$peng_wali = noDos($_POST['peng_wali']);
	$peng_wali = str_replace('.', '', $peng_wali);
	$alamat_wali = noDos($_POST['alamat_wali']);
	$hp_wali = noDos($_POST['hp_wali']);
	$penanggung_jawab = noDos($_POST['penanggung_jawab']);
	
	$query_update = "UPDATE psb SET
					nm_siswa = '$nama',
					tmp_lahir = '$tempat',
					tgl_lahir= '$lahir',
					jns_kelamin = '$jk',
					agama = '$agama',
					anak_ke='$anakke',
					jml_saudara='$jmlsaudara',
					status_anak='$statusanak',
					tinggi_badan='$tinggibdn',
					berat_badan='$beratbdn',
					gol_darah='$goldarah',
					alamat_siswa='$alamat',
					kota_kab='$kotakab',
					kode_pos='$kodepos',
					hp_siswa='$nohp',
					tlp_siswa='$notel',
					email_siswa ='$email',
					status_rumah_siswa='$statusrmh',
					kendaraan = '$kendaraan',
					asal_sekolah='$asal_sekolah',
					alamat_sekolah='$alamat_sekolah',
					no_ijazah='$no_ijazah',
					tgl_ijazah='$tgl_ijazah',
					thn_ijazah='$thn_ijazah',
					nilai_un='$nilai_un',
					prestasi_akademik='$prestasi_akd',
					prestasi_olahraga='$prestasi_olg',
					prestasi_kesenian='$prestasi_seni',
					nm_orangtua_ayah='$nama_ayah',
					pekerjaan_ayah='$pek_ayah',
					penghasilan_ayah='$peng_ayah',
					nm_orangtua_ibu='$nama_ibu',
					pekerjaan_ibu='$pek_ibu',
					penghasilan_ibu='$peng_ibu',
					hp_orgtua='$hp_ortu',
					nm_wali='$nama_wali',
					pekerjaan_wali='$pek_wali',
					penghasilan_wali='$peng_wali',
					alamat_wali='$alamat_wali',
					hp_wali='$hp_wali',
					penanggung_biaya='$penanggung_jawab'
					WHERE
						no_reg = '$no_regis'";
	$sql_update = mysqli_query($conn, $query_update)or die(mysqli_error($conn));

	if($sql_update){
		echo "<script>alert('Data calon siswa telah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=media.php?page=profil-siswa'>";
	}
}



?>