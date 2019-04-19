<?php  
	$query_profil = "SELECT
						psb.no_reg,
					    psb.nisn,
					    psb.nm_siswa,
					    psb.asal_sekolah,
					    psb.status_verifikasi,
					    kompetensi.bid_kompetensi
					FROM
					    psb
					LEFT JOIN kompetensi USING(id_kompetensi)
					WHERE
    					no_reg = '$noreg'";
	$sql_profil = mysqli_query($conn, $query_profil)or die(mysqli_error($conn));
	$datap = mysqli_fetch_assoc($sql_profil);

?>

<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Profil Calon Siswa</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
      	<div class="alert alert-info" role="alert">
      		<strong>Perhatian</strong>
      		<ul>
      			<li>Lengkapi Data Siswa dengan mengklik tombol berwarna Hijau <b>(Lengkapi Data Siswa)</b></li>
      			<li>Apabila data siswa telah dilengkapi dan di verifikasi oleh panitia. maka tombol akan berubah menjadi berwarna biru <b>(Cek Data Siswa)</b>. calon siswa dapat merubah data siswa dengan mengklik tombol ini</li>
      			<li>klik <b>Cetak</b> untuk mencetak data siswa sebagai <b>Bukti pendaftaran siswa online</b> yang akan dilampirkan kepada pihak sekolah ketika melakukan proses registrasi ulang.</li>
      		</ul>
      	</div>
		<div class="row mt-2">
			<div class="col-md-4 font-weight-bold">NISN</div>
			<div class="col-md-12"><?=$datap['nisn'];?></div>
		</div>
		<hr>
		<div class="row mt-2">
			<div class="col-md-4 font-weight-bold">Nama</div>
			<div class="col-md-12"><?=$datap['nm_siswa'];?></div>
		</div>
		<hr>
		<div class="row mt-2">
			<div class="col-md-4 font-weight-bold">Asal Sekolah</div>
			<div class="col-md-12"><?=$datap['asal_sekolah'];?></div>
		</div>
		<hr>
		<div class="row mt-2">
			<div class="col-md-4 font-weight-bold">Kompetensi</div>
			<div class="col-md-12"><?=$datap['bid_kompetensi'];?></div>
		</div>
		<hr>
		<div class="row mt-2">
			<div class="col-md-4 font-weight-bold">Status verifikasi</div>
			<div class="col-md-12"><?=$datap['status_verifikasi'];?></div>
		</div>
		<hr>
		<?php 
		if($datap['status_verifikasi'] == "Belum" OR $datap['status_verifikasi'] == "Batal"):
		?>
			<div class="float-right">
				<a href="media.php?page=data-profil&reg=<?=$datap['no_reg'];?>" class="btn btn-success">Lengkapi Data Siswa</a>
			</div>
		<?php  
		elseif($datap['status_verifikasi'] == "Sudah"):
		?>
			<div class="float-right">
				<a href="#" class="btn btn-primary">Cek Data Siswa</a>
				<a href="#" class="btn btn-secondary" target="blank">Cetak</a>
			</div>
		<?php  
		endif;
		?>
      </div>
    </div>
  </div>
</div>