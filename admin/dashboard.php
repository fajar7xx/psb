<?php

// print_r($_SESSION);
// require '../functions/query.php';
$q_jmlpsb = "SELECT count(no_reg) AS jml_psb FROM psb";
$s_jmlpsb = mysqli_query($conn, $q_jmlpsb)or die("Error : " . mysqli_error($conn));
$d_jmlpsb = mysqli_fetch_assoc($s_jmlpsb);
$jml_psb = $d_jmlpsb['jml_psb'];
$verifikasi = query("SELECT count(status_verifikasi) AS jml_ver FROM psb WHERE status_verifikasi = 'Sudah'");
$verifikasi = $verifikasi['jml_ver'];
$usm = query("SELECT count(no_ujian) AS jml_usm FROM ujian_masuk");
$usm = $usm['jml_usm'];
$blm_ujian = query("SELECT count(no_ujian) AS jml_blmujian FROM ujian_masuk WHERE ket_ujian = 'Belum'");
$blm_ujian = $blm_ujian['jml_blmujian'];
$lulus = query("SELECT count(no_ujian) AS jml_lulus FROM ujian_masuk WHERE ket_ujian = 'Lulus'");
$lulus = $lulus['jml_lulus'];
$gagal = query("SELECT count(no_ujian) AS jml_gagal FROM ujian_masuk WHERE ket_ujian = 'Tidak'");
$gagal = $gagal['jml_gagal'];
?>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-6 col-md-6 mb-6">
      <div class="card border-left-primary shadow h-100 py-2">
        <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah PSB <i class="fas fa-external-link-alt"></i></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jml_psb;?> Murid</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-6">
      <div class="card border-left-success shadow h-100 py-2">
        <a href="3" class="text-decoration-none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Verifikasi <i class="fas fa-external-link-alt"></i></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$verifikasi;?> Murid</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah USM <i class="fas fa-external-link-alt"></i></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$usm;?> Murid</div>
                
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Belum Ujian <i class="fas fa-external-link-alt"></i></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$blm_ujian;?> Murid</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lulus Ujian <i class="fas fa-external-link-alt"></i></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$lulus;?> Murid</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tidak Lulus <i class="fas fa-external-link-alt"></i></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$gagal;?> Murid</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4" style="height: 26rem">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Welcome</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <p>Selamat datang di halaman administrator. <br>
            Gunakan fitur-fitur yang tersedia di halaman ini untuk meningkatkan mutu pelayanan <br>
          terhadap calon siswa baru.</p>
        </div>
      </div>
    </div>
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
          <!-- <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div> -->
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart"></canvas>
          </div>
          <div class="mt-4 text-center small">
            <span class="mr-2">
              <i class="fas fa-circle text-primary"></i> Direct
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-success"></i> Social
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-info"></i> Referral
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<!--   <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
        </div>
        <div class="card-body">
          <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div> -->

</div>
<!-- /.container-fluid -->