<?php  
$query_kk = "SELECT * FROM dok_kk WHERE no_reg = '$noreg'";
$sql_kk = mysqli_query($conn, $query_kk)or die(mysqli_error($conn));
$data_kk = mysqli_fetch_assoc($sql_kk);
$kk = $data_kk['pic_dok_kk'];
$dir_kk = 'img/img_kk/';

$query_ijazah ="SELECT * FROM dok_ijazah WHERE no_reg = '$noreg'";
$sql_ijazah = mysqli_query($conn, $query_ijazah)or die(mysqli_error($conn));
$data_ijazah = mysqli_fetch_assoc($sql_ijazah);
$ijazah = $data_ijazah['pic_dok_ijazah'];
$dir_ijazah = 'img/img_ijazah/';

$query_foto = "SELECT * FROM dok_foto WHERE no_reg = '$noreg'";
$sql_foto = mysqli_query($conn, $query_foto)or die(mysqli_error($conn));
$data_foto = mysqli_fetch_assoc($sql_foto);
$foto = $data_foto['pic_foto'];
$dir_foto = 'img/img_foto';
?>

<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Unggah Dokumen</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="alert alert-info" role="alert">
          <h5 class="alert-heading">Keterangan</h5>
          <p>unggah kelangkapan dokumen calon siswa <br>
          file dokumen yang di unggah harus dalam format *.JPG *.JPEG  *.PNG dengan ukuran maksimal 2MB
          </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="card">
                <div class="card-header bg-primary text-white justify-content-between">
                  <h6>Dokumen Kartu Keluarga</h6>
                </div>
                <div class="card-body">
                  <?php  
                  if(!empty($kk)):
                  ?>
                    <img src="<?=base_url($kk);?>" class="img-fluid">
                  <?php  
                  else:
                  ?>
                    <img src="<?=base_url('img/no-image.jpg');?>" class="img-fluid">
                  <?php  
                  endif;
                  ?>
                  
                </div>
                <div class="card-footer">
                  <?php  
                  if(!empty($kk)):
                  ?>
                    <a href="media.php?page=editkk&id=<?=$data_kk['id_dok_kk'];?>" class="btn btn-primary btn-block">Edit</a>
                  <?php  
                  else:
                  ?>
                    <a href="unggahkk" class="btn btn-success btn-block">Unggah</a>
                  <?php  
                  endif;
                  ?>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="card">
                <div class="card-header bg-primary text-white justify-content-between">
                  <h6>Dokumen Ijazah/SKHUN/SKL</h6>
                </div>
                <div class="card-body">
                  <?php  
                  if(!empty($ijazah)):
                  ?>
                    <img src="<?=base_url($ijazah);?>" class="img-fluid">
                  <?php  
                  else:
                  ?>
                    <img src="<?=base_url('img/no-image.jpg');?>" class="img-fluid">
                  <?php  
                  endif;
                  ?>
                </div>
                <div class="card-footer">
                  <?php  
                  if(!empty($ijazah)):
                  ?>
                    <a href="media.php?page=editijz&id=<?=$data_ijazah['id_dok_ijazah'];?>" class="btn btn-primary btn-block">Edit</a>
                  <?php  
                  else:
                  ?>
                    <a href="unggahijazah" class="btn btn-success btn-block">Unggah</a>
                  <?php  
                  endif;
                  ?>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="card">
                <div class="card-header bg-primary text-white justify-content-between">
                  <h6>Dokumen Photo</h6>
                </div>
                <div class="card-body">
                  <?php  
                  if(!empty($foto)):
                  ?>
                    <img src="<?=base_url($foto);?>" class="img-fluid">
                  <?php  
                  else:
                  ?>
                    <img src="<?=base_url('img/user.png');?>" class="img-fluid">
                  <?php  
                  endif;
                  ?>
                </div>
                <div class="card-footer">
                  <?php  
                  if(!empty($foto)):
                  ?>
                    <a href="media.php?page=editfoto&id=<?=$data_foto['id_dok_foto'];?>" class="btn btn-primary btn-block">Edit</a>
                  <?php  
                  else:
                  ?>
                    <a href="unggahfoto" class="btn btn-success btn-block">Unggah</a>
                  <?php  
                  endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>