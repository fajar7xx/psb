<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Password Pengguna</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Management password</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/changepass/proses.php');?>" method="post">
            <input type="hidden" name="id" value="<?=$_SESSION['user']['id_admin'];?>">
            <div class="form-group">
              <label for="passlama">Current Password</label>
              <input type="password" name="passlama" id="passlama" class="form-control">
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="newpass1">New Password</label>
                  <input type="password" name="newpass1" id="newpass1" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="newpass2">Retype New Password</label>
                  <input type="password" name="newpass2" id="newpass2" class="form-control">
                </div>
              </div>
            </div>
            <div class="float-right">
              <a href="dashboard" class="btn btn-warning">Batal</a>
              <button type="submit" name="simpan" class="btn btn-success" onclick="return confirm('Apakah anda yakin mengganti password saat ini')">simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->