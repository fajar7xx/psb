<?php  
$data = query("SELECT * FROM identitas_web LIMIT 1");
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Identitas Website</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Identitas Websites</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/website/simpan_identitas.php');?>" method="post">
            <div class="form-group">
              <label for="website">Nama Website</label>
              <input type="text" name="website" id="website" class="form-control" value="<?=$data['nm_website'];?>" placeholder="Nama Website Sekolah">
            </div>
            <div class="form-group">
              <label for="sekolah">Nama Sekolah</label>
              <input type="text" name="sekolah" id="sekolah" class="form-control" value="<?=$data['nm_sekolah'];?>" placeholder="Nama Sekolah">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control" rows="5"><?=$data['alamat'];?></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="pos">Kode Pos</label>
                <input type="text" name="pos" id="pos" class="form-control" value="<?=$data['kode_pos'];?>" placeholder="Nama Website Sekolah">
              </div>
              <div class="form-group col-md-6">
                <label for="telp">no telp</label>
                <input type="text" name="telp" id="telp" class="form-control" value="<?=$data['telp'];?>" placeholder="Nama Website Sekolah">
              </div>
            </div> 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email Sekolah</label>
                <input type="email" name="email" id="email" class="form-control" value="<?=$data['email'];?>" placeholder="Nama Website Sekolah">
              </div>
              <div class="form-group col-md-6">
                <label for="url">URL Website Sekolah</label>
                <input type="text" name="url" id="url" class="form-control" value="<?=$data['url'];?>" placeholder="Nama Website Sekolah">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" id="facebook" class="form-control" value="<?=$data['facebook'];?>" placeholder="Nama Website Sekolah">
              </div>
              <div class="form-group col-md-4">
                <label for="twitter">Twitter</label>
                <input type="text" name="twitter" id="twitter" class="form-control" value="<?=$data['twitter'];?>" placeholder="Nama Website Sekolah">
              </div>
              <div class="form-group col-md-4">
                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" id="instagram" class="form-control" value="<?=$data['instagram'];?>" placeholder="Nama Website Sekolah">
              </div>
            </div>
            <div class="form-group">
              <label for="profil">Profil Website</label>
              <textarea name="profil" id="profil" class="form-control" rows="10"><?=$data['profil'];?></textarea>
            </div>
            <div class="form-group">
              <label for="deskripsi">Meta Deskripsi</label>
              <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?=$data['meta_deskripsi'];?>" placeholder="Nama Website Sekolah">
            </div>
            <div class="form-group">
              <label for="keyword">Meta Keyword</label>
              <input type="text" name="keyword" id="keyword" class="form-control" value="<?=$data['meta_keyword'];?>" placeholder="Nama Website Sekolah">
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