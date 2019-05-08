<?php  
$data = query("SELECT * FROM cara_daftar LIMIT 1");
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cara Pendaftaran</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Cara Pendaftaran</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/cara_pendaftaran/simpan_cara_pendaftaran.php');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="deskripsi1">deskripsi</label>
              <textarea name="deskripsi1" id="deskripsi1" class="form-control" rows="5"><?=$data['deskripsi'];?></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="aktif">Aktif Cara Registrasi</label>
                <select name="aktif" id="aktif" class="form-control">
                  <option value="Y" <?=$data['aktif_caradft'] == 'Y' ? 'selected':'';?>>Aktif</option>
                  <option value="N" <?=$data['aktif_caradft'] == 'N' ? 'selected':'';?>>Non Aktif</option>
                </select>
              </div>
              <!-- <div class="form-group col-md-6">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file">
              </div> -->
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
    CKEDITOR.replace( 'deskripsi1' );
  </script>