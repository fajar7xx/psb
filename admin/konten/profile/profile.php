<?php  
$id = $_SESSION['user']['id_admin'];
$data = query("SELECT * FROM admin WHERE id_admin = '$id'");
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/profile/proses.php');?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?=$data['id_admin'];?>" readonly>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" value="<?=$data['username'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?=$data['email_admin'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nm_lengkap'];?>" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" rows="5" class="form-control">
                <?=$data['alamat_admin'];?>
              </textarea>
            </div>
            <div class="form-group">
              <img src="<?=base_url($data['pic_admin']);?>" class="img-fluid img-thumbnail mb-2" style="height: 320px; width: auto;">

              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="gambar">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
            
           <div class="float-right">
              <a href="dashboard" class="btn btn-warning">Batal</a>
              <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->