<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Daftar USM</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Murid yang akan mengikuti USM</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="table-responsive-md">
          	<table class="table table-bordered" id="psb">
          		<thead>
          			<tr>
          				<th class="text-center">No</th>
          				<th>No Ujian</th>
          				<th>Nama Siswa/i</th>
          				<th>Tanggal Ujian</th>
                  <th>Waktu</th>
                  <th>Ruang</th>
                  <th>Keterangan</th>
          				<th>Aksi</th>
          			</tr>
          		</thead>
          		<tbody>
          			<?php
                $no = 1;  
                $query = "SELECT
                              ujian_masuk.*,
                              psb.nm_siswa
                          FROM
                              `ujian_masuk`
                          LEFT JOIN psb USING(no_reg)
                          ORDER BY
                              no_ujian
                          DESC";
                $sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
                while($data = mysqli_fetch_assoc($sql)):
                ?>
                  <tr>
                    <td class="text-center"><?=$no++;?></td>
                    <td><?=$data['no_ujian'];?></td>
                    <td><?=$data['nm_siswa'];?></td>
                    <td><?=tgl_indo($data['tgl_ujian']);?></td>
                    <td><?=$data['jam_ujian'];?></td>
                    <td><?=$data['ruang_ujian'];?></td>
                    <td><?=$data['ket_ujian'];?></td>

                    <td>
                      <a href="media.php?page=detail-usm&id=<?=$data['no_ujian'];?>" class="btn btn-success btn-sm">
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