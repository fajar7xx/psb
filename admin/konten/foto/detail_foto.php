<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">FotoL</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Detail IFoto</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <?php  
          $noreg = $_GET['id'];

          $query = "SELECT
                        dok_foto.*,
                        psb.nm_siswa,
                        psb.nisn
                    FROM
                        dok_foto
                    LEFT JOIN psb USING(no_reg)
                    WHERE
                        no_reg = '$noreg'";
          $sql = mysqli_query($conn, $query)or die("error: " . mysqli_error($conn));
          $sql1 = mysqli_query($conn, $query)or die("error: " . mysqli_error($conn));
          $data = mysqli_fetch_assoc($sql);

          // echo $noreg;
          ?>
          <div class="alert alert-info" role="alert">
            <table>
              <tr>
              <td>Nama</td>
              <td>: <?=$data['nm_siswa'];?></td>
            </tr>
            <tr>
              <td>No Registrasi</td>
              <td>: <?=$data['no_reg'];?></td>
            </tr>
            <tr>
              <td>Tanggal Unggah</td>
              <td>: <?=tgl_indo($data['tgl_up_foto']);?></td>
            </tr>
            </table>
          </div>
          
          <img src="<?=base_url($data['pic_foto']);?>" class="img-thumbnail img-fluid rounded mx-auto d-block">
          
          <hr>

          <a href="kk" class="btn btn-warning float-right">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->