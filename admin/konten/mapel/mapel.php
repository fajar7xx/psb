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
          <h6 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h6>
          <a href="mapel-tambah" class="float-right btn btn-primary">Tambah Mata Pelajaran</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="psb">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Aktif</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                $no = 1;
                $query = "SELECT * FROM mapel ORDER BY id_mapel DESC";
                $sql = mysqli_query($conn, $query)or die("ERROR: " . mysqli_error($conn));
                while($data = mysqli_fetch_assoc($sql)):
                ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['mapel'];?></td>
                    <td>
                      <?php if($data['aktif_mapel'] === 'Y'):?>
                        <span class="badge badge-success">Aktif</span>
                      <?php elseif($data['aktif_mapel'] === 'N'): ?>
                        <span class="badge badge-danger">Nonaktif</span>
                      <?php endif; ?>
                        
                    </td>
                    <td>
                      <?php if($data['aktif_mapel'] === 'Y'):?>
                        <a href="<?=base_url('admin/konten/mapel/disable.php?id='. $data['id_mapel']);?>" class="btn btn-outline-warning btn-sm" onclick="return confirm('apakah anda yakin ingin menonaktifkan mata pelajaran ini?')">Disable</a>
                      <?php elseif($data['aktif_mapel'] === 'N'): ?>
                        <a href="<?=base_url('admin/konten/mapel/enable.php?id='. $data['id_mapel']);?>" class="btn btn-outline-success btn-sm" onclick="return confirm('apakah anda yakin ingin mengaktifkan mata pelajaran ini?')">Enable</a>
                      <?php endif; ?>
                      <a href="<?=base_url('admin/konten/mapel/hapus.php?id='. $data['id_mapel']);?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('apakah anda ingin mmenghapus mata pelajaran tersebut')">Hapus</a>
                      <a href="media.php?page=mapel-ubah&id=<?=$data['id_mapel'];?>" class="btn btn-outline-info btn-sm">Edit</a>
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