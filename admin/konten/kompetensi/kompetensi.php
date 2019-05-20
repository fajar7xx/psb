<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kompetensi</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Kompetensi</h6>
          <a href="kompetensi-tambah" class="float-right btn btn-primary">Tambah Kompetensi</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="psb">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Kompetensi</th>
                  <th>Aktif</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                $no = 1;
                $query = "SELECT * FROM kompetensi ORDER BY id_kompetensi DESC";
                $sql = mysqli_query($conn, $query)or die("ERROR: " . mysqli_error($conn));
                while($data = mysqli_fetch_assoc($sql)):
                ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['id_kompetensi'];?></td>
                    <td><?=$data['bid_kompetensi'];?></td>
                    <td>
                      <?php if($data['aktif'] === 'Y'):?>
                        <span class="badge badge-success">Aktif</span>
                      <?php elseif($data['aktif'] === 'N'): ?>
                        <span class="badge badge-danger">Nonaktif</span>
                      <?php endif; ?>
                        
                    </td>
                    <td>
                      <?php if($data['aktif'] === 'Y'):?>
                        <a href="<?=base_url('admin/konten/kompetensi/disable.php?id='. $data['id_kompetensi']);?>" class="btn btn-outline-warning btn-sm" onclick="return confirm('apakah anda yakin ingin menonaktifkan kompetensi ini?')">Disable</a>
                      <?php elseif($data['aktif'] === 'N'): ?>
                        <a href="<?=base_url('admin/konten/kompetensi/enable.php?id='. $data['id_kompetensi']);?>" class="btn btn-outline-success btn-sm" onclick="return confirm('apakah anda yakin ingin mengaktifkan kompetensi ini?')">Enable</a>
                      <?php endif; ?>
                      <a href="<?=base_url('admin/konten/kompetensi/hapus.php?id='. $data['id_kompetensi']);?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('apakah anda ingin mmenghapus kompetensi tersebut')">Hapus</a>
                      <a href="media.php?page=kompetensi-ubah&id=<?=$data['id_kompetensi'];?>" class="btn btn-outline-info btn-sm">Edit</a>
                    </td>
                  </tr>
                <?php  
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->