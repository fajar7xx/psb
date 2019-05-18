<?php  
require_once '../config/koneksi.php';
require_once '../functions/base_url.php';
require_once 'autentikasi.php';
require_once '../functions/query.php';
require '../functions/tanggal.php';

$username = $_SESSION['user']['username'];
$admin = query("SELECT * FROM admin WHERE username = '$username'");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi penerimaan Siswa/i baru untuk tingkat SMA dan SMK di kota medan">
  <meta name="author" content="Fajar Siagian">

  <title>Dashboard PSB SMK Medan</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url();?>/admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url();?>/admin/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <script src="<?=base_url('bower_components/ckeditor/ckeditor.js');?>"></script>

  <!-- datatable -->
  <link href="<?=base_url('bower_components/datatables/media/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon mx-2">
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Admininstrator</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWebsite" aria-expanded="true" aria-controls="collapseWebsite">
          <i class="fab fa-chrome"></i>
          <span>Konten Website</span>
        </a>
        <div id="collapseWebsite" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Website Settings:</h6>
            <a class="collapse-item" href="identitas">Identitas Website</a>
            <a class="collapse-item" href="cara-pendaftaran">Cara Pendaftaran</a>
            <a class="collapse-item" href="informasi-psb">Informasi PSB</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManajemen" aria-expanded="true" aria-controls="collapseManajemen">
          <i class="fas fa-tasks"></i>
          <span>Manajemen</span>
        </a>
        <div id="collapseManajemen" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manajemen Settings:</h6>
            <a class="collapse-item" href="psb">Penerimaan Siswa Baru</a>
            <a class="collapse-item" href="nilai">Nilai Raport Siswa</a>
            <a class="collapse-item" href="usm">Ujian Saringan Masuk</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDokumen" aria-expanded="true" aria-controls="collapseDokumen">
          <i class="fas fa-file-alt"></i>
          <span>Kelengkapan Dokumen</span>
        </a>
        <div id="collapseDokumen" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Dokumen Settings:</h6>
            <a class="collapse-item" href="kk">Kartu Keluarga</a>
            <a class="collapse-item" href="ijazah">Ijazah/SKHUN/SKL</a>
            <a class="collapse-item" href="foto">Foto</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
          <i class="fas fa-cogs"></i>
          <span>Settings</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">All Settings:</h6>
            <?php if($_SESSION['user']['status_admin'] === "Admin"): ?>
              <a class="collapse-item" href="usman">User Management</a>
            <?php endif; ?>
            <a class="collapse-item" href="#">Change Password</a>
            <a class="collapse-item" href="#">Profile</a>
            <a class="collapse-item" href="#">Website Settings</a>
             <a class="collapse-item" href="#">Kompetensi</a>
              <a class="collapse-item" href="#">Mata Pelajaran</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utility</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilities:</h6>
            <a class="collapse-item" href="backupdb">Backup database</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$admin['nm_lengkap'];?></span>
                <img class="img-profile rounded-circle" src="<?=base_url($admin['pic_admin']);?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php  
          include 'open_file.php';
        ?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PSB Sekolah Medan 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url();?>/admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url();?>/admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url();?>/admin/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?=base_url();?>/admin/assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=base_url();?>/admin/assets/js/demo/chart-area-demo.js"></script>
  <script src="<?=base_url();?>/admin/assets/js/demo/chart-pie-demo.js"></script>
  
  <script>
    CKEDITOR.replace( 'profil' );
    CKEDITOR.replace( 'deskripsi1' );
  </script>

  <!-- datatable -->
  <script src="<?=base_url('bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
  <script src="<?=base_url('bower_components/datatables/media/js/dataTables.bootstrap4.min.js');?>"></script>
  <script>
    $(document).ready(function() {
      $('#psb').DataTable({
        "ordering" : false
      });
    } );
  </script> 

  <!-- matuang? -->
 <script src="<?=base_url('bower_components/jquery-mask-plugin/dist/jquery.mask.min.js');?>"></script>
  <script>
    // format uang
    $('.angka').mask('#.##0', {reverse:true});
  </script>

  <!-- file browser fo bs4 -->
  <script src="<?=base_url('node_modules/bs-custom-file-input/dist/bs-custom-file-input.min.js');?>"></script>
  <script>
    $(document).ready(function () {
      bsCustomFileInput.init()
    });
  </script>
  
  <!-- show/hide password -->
  <script src="<?=base_url('bower_components/hideshowpassword/hideShowPassword.min.js');?>"></script>
  <script>
    // $('#password1').hideShowPassword(true, true);
    // $('#password2').hideShowPassword(true, true);
    // $('#password2').showPassword('focus', {
    //   toggle: { className: 'my-toggle' }
    // });
    // 
    $('#password2').hidePassword(true);
    $('#password1').hidePassword(true);
  </script>
</body>

</html>
