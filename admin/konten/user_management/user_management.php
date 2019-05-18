<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Daftar Pengguna</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data User Management</h6>
          <div class="float-right">
            <a href="user-add" class="btn btn-primary">Tambah Pengguna</a>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="table-responsive-md">
          	<table class="table table-bordered" id="psb">
          		<thead>
          			<tr>
          				<th class="text-center">No</th>
          				<th>Nama</th>
          				<th>Username</th>
          				<th>Email</th>
                  <th>Status</th>
                  <th>Log</th>
          				<th>Aksi</th>
          			</tr>
          		</thead>
          		<tbody>
          			<?php
                $no = 1;  
                $query = "SELECT
                              *
                          FROM
                              admin
                          ORDER BY
                              status_admin
                          ASC";
                $sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
                while($data = mysqli_fetch_assoc($sql)):
                ?>
                  <tr>
                    <td class="text-center"><?=$no++;?></td>
                    <td><?=$data['nm_lengkap'];?></td>
                    <td><?=$data['username'];?></td>
                    <td><?=$data['email_admin'];?></td>
                    <td><?=$data['status_admin'];?></td>
                    <td><?=tgl_indo($data['dt_last_akses']);?></td>

                    <td>
                      <a href="#" class="btn btn-warning btn-sm" onclick="return confirm('apakah anda ingin menonaktifkan user tersebut')">Disable</a>
                      <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda ingin mmenghapus user tersebut')">Delete</a>
                      <a href="#>" class="btn btn-success btn-sm">Edit</a>
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