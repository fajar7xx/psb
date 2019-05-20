<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mata Pelajaran</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Pelajaran</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/mapel/proses.php');?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="mapel">Mata Pelajaran</label>
                <input type="text" name="mapel" id="mapel" class="form-control" placeholder="masukkan mata pelajaran">
              </div>
              <div class="form-group col-md-6">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="aktif">aktif</label>
                <select name="aktif" id="aktif" class="form-control">
                  <option value="">Pilih Aktifasi</option>
                  <option value="Y">Aktif</option>
                  <option value="N">Nonaktif</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="float-right">
                  <a href="mapel" class="btn btn-warning">Batal</a>
                  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              <div class="form-group col-md-6"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->