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
          <div class="table-responsive-md">
          	<table class="table table-bordered" id="psb">
          		<thead>
          			<tr>
          				<th class="text-center">No</th>
          				<th>No Registrasi</th>
          				<th>NISN</th>
          				<th>Nama Siswa</th>
          				<th>Aksi</th>
          			</tr>
          		</thead>
          		<tbody>
          			<?php
                $no = 1;  
                $query = " SELECT * FROM psb ORDER BY no_reg DESC";
                $sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
                while($data = mysqli_fetch_assoc($sql)):
                ?>
                  <tr>
                    <td class="text-center"><?=$no++;?></td>
                    <td><?=$data['no_reg'];?></td>
                    <td><?=$data['nisn'];?></td>
                    <td><?=$data['nm_siswa'];?></td>
                    <td>
                      <a href="media.php?page=detail-nilai&id=<?=$data['no_reg'];?>" class="btn btn-success btn-sm">
                        <i class="fas fa-external-link-alt"></i> 
                        Detail
                      </a>
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