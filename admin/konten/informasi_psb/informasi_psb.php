<?php  
$data = query("SELECT * FROM informasi LIMIT 1");
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Informasi PSB</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Informasi PSB</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/informasi_psb/simpan_informasi_psb.php');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="judul">Judul Informasi</label>
              <input type="text" name="judul" id="judul" value="<?=$data['judul_info'];?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi">deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5"><?=$data['deskripsi'];?></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="aktif">Aktif Cara Registrasi</label>
                <select name="aktif" id="aktif" class="form-control">
                  <option value="Y" <?=$data['aktif_info'] == 'Y' ? 'selected':'';?>>Aktif</option>
                  <option value="N" <?=$data['aktif_info'] == 'N' ? 'selected':'';?>>Non Aktif</option>
                </select>
              </div>
            </div> 
            <div class="float-right">
              <a href="dashboard" class="btn btn-warning">Batal</a>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

  <script>
    CKEDITOR.replace( 'deskripsi' );
  </script>