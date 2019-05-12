<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nilai</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Nilai Calon Murid</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <?php  
          $noreg = $_GET['id'];

          $query = "SELECT
                        nilai_raport.*,
                        mapel,
                        psb.nm_siswa AS nama,
                        psb.no_reg AS noreg
                    FROM
                        nilai_raport
                    LEFT JOIN mapel USING(id_mapel)
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
              <td>: <?=$data['nama'];?></td>
            </tr>
            <tr>
              <td>No Registrasi</td>
              <td>: <?=$data['noreg'];?></td>
            </tr>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Mata Pelajaran</th>
                  <th>Semester 1</th>
                  <th>Semester 2</th>
                  <th>Semester 3</th>
                  <th>Semester 4</th>
                  <th>Semester 5</th>
                  <th>Total Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                while($detail = mysqli_fetch_assoc($sql1)):
                ?>
                  <tr>
                    <td class="text-center"><?=$no++;?></td>
                    <td><?=$detail['mapel'];?></td>
                    <td><?=$detail['nil1'];?></td>
                    <td><?=$detail['nil2'];?></td>
                    <td><?=$detail['nil3'];?></td>
                    <td><?=$detail['nil4'];?></td>
                    <td><?=$detail['nil5'];?></td>
                    <td><?=$detail['nil_ratarata'];?></td>
                  </tr>
                <?php  
                endwhile;
                ?>
              </tbody>
            </table>
            <a href="nilai" class="btn btn-warning float-right">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->