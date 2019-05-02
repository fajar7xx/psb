<script type="text/javascript">
  // validasi form
  function validasi(){
    var mapel = (form1.mapel.value);
    if(mapel == 0){
      alert("Silahkan Pilih Mata Pelajaran Terlebih Dahulu.");
      document.form1.mapel.focus();
      return false;
    }
  }
</script>


<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Mapel</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="alert alert-warning" role="alert">
          Input mata pelajaran untuk selanjutnya menginputkan nilai rapot dari masing-masing mata pelajaran yang tersedia. <br>
          Untuk masing-masing mata pelajaran yang sudah dipilih, akan langsung ditampilkan pada <b>Menu Input Nilai Rapor</b>
        </div>
        <form method="post" action="media.php?page=simpanmapel" role="form1" name="form1" onsubmit="return validasi()">
          <div class="form-group">
            <select class="form-control" name="mapel">
              <option value="0" selected>Silahkan Pilih Mata Pelajaran</option>
              <?php
              $qMapel = "SELECT * FROM mapel WHERE aktif_mapel = 'Y' ORDER BY id_mapel";
              $sMapel = mysqli_query($conn, $qMapel)or die(mysqli_error($conn));
              while($data = mysqli_fetch_assoc($sMapel)):
              ?>
              <option value="<?=$data['id_mapel'];?>"><?=$data['mapel'];?></option>
              <?php  
              endwhile;
              ?>
            </select>
          </div>
          <div class="form-group">
            <a href="home" class="btn btn-warning">Batal</a>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>