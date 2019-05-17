<?php  
$no_ujian = $_GET['id'];
$query = "SELECT
                  ujian_masuk.*,
                  psb.nm_siswa
              FROM
                  `ujian_masuk`
              LEFT JOIN psb USING(no_reg)
              WHERE
                no_ujian = '$no_ujian'";
$sql = mysqli_query($conn, $query)or die("ERROR: " . mysqli_error($conn));
$data = mysqli_fetch_assoc($sql);

if($data['ket_ujian'] == "Belum"){
  $ket = "Belum Ujian";
}
elseif($data['ket_ujian'] == "Lulus"){
  $ket = "Lulus Ujian";
}
elseif($data['ket_ujian'] == "Tidak"){
  $ket = "Tidak Lulus Ujian";
}

?>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ujian Saringan Masuk</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Detail Peserta USM</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/usm/update.php');?>" method="post">
            <!-- <input type="hidden" name="noreg" value="<?=$data['no_reg'];?>"> -->
            <div class="form-group">
              <label for="noujian">No. Ujian</label>
              <input type="text" name="noujian" id="noujian" value="<?=$data['no_ujian'];?>" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="nopend">No. Pendaftaran</label>
              <input type="text" name="nopend" id="nopend" value="<?=$data['no_reg'];?>" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="nama">Nama Siswa</label>
              <input type="text" name="nama" id="nama" value="<?=$data['nm_siswa'];?>" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="tgl">Tanggal Ujian</label>
              <input type="text" name="tgl" id="tgl" value="<?=tgl_indo($data['tgl_ujian']);?>" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="waktu">Waktu Ujian</label>
              <input type="time" class="form-control" name="waktu" id="waktu">
            </div>
            <div class="form-group">
              <label for="ruang">Ruang Ujian</label>
              <input type="text" class="form-control" name="ruang" id="ruang">
            </div>
            <div class="form-group">
              <label for="hasil">Hasil Ujian</label>
              <input type="number" class="form-control" name="hasil" id="hasil" min="1" max="100">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan UJian</label>
              <input type="text" name="keterangan" id="keterangan" value="<?=$ket;?>" readonly class="form-control">
            </div>
            <div class="float-right">
              <?php if($data['ket_ujian'] === "Lulus"): ?>
                <a href="usm" class="btn btn-warning">Kembali</a>
              <?php elseif($data['ket_ujian'] === "Belum"): ?>
                <a href="usm" class="btn btn-warning">Kembali</a>
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
              <?php endif; ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->