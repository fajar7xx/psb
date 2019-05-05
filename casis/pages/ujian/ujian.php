<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Laporan Ujian Calon Siswa</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
		    <div class="alert alert-info" role="alert">
        <b>Perhatian!</b>
        <ul>
          <li>Cetak <b>Kartu Ujian Saringan Masuk</b> sebagai identitas peserta ujian saringan masuk</li>
          <li>datang 30 menit sebelum pelaksanaan ujian untuk melakukan registrasi ulang peserta ujian</li>
          <li>Gunakan Seragam sekolah masing-masing (putih-biru) untuk mengikuti ujian</li>
          <li>infromasi waktu dan ruang ujian akan tampil dalam 1x24 jam terhitung dari tanggal pendaftaran calon siswa</li>
        </ul> 
        </div>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>No Ujian</th>
              <th>Nama Peserta</th>
              <th>Tgl Ujian</th>
              <th>Waktu Ujian</th>
              <th>Ruang Ujian</th>
              <th>Keterangan</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php  
            $query_usm = "SELECT * FROM psb LEFT JOIN ujian_masuk USING(no_reg) WHERE no_reg = '$noreg'";
            $sql_usm = mysqli_query($conn, $query_usm)or die(mysqli_error($conn));
            while($usm = mysqli_fetch_assoc($sql_usm)): 

              if($usm['ket_ujian'] == 'Lulus'):
              ?>

                <div class="alert alert-primary" role="alert">
                 <strong>Selamat, Kamu Lulus</strong>
                  <p>Kamu Diterima Di SMK Medan sebagai Siswa/i Tahun Ajaran Baru</p>
                  <p>NIS kamu adalah <?=$usm['nis'];?></p>
                </div>

              <?php
              endif; 

              if($usm['ket_ujian'] == 'Belum'){
                $ket = 'Belum Ujian';
              }
              elseif($usm['ket_ujian'] == 'Lulus'){
                $ket = 'Lulus Ujian';
              }
              elseif($usm['ket_ujian'] == 'Tidak'){
                $ket = 'Tidak Lulus';
              }
            ?>
              <tr>
                <td>1</td>
                <td><?=$usm['no_ujian'];?></td>
                <td><?=$usm['nm_siswa'];?></td>
                <td><?=tgl_indo($usm['tgl_ujian']);?></td>
                <td>
                  <?php  
                  if($usm['jam_ujian'] != '00:00:00'):
                    echo $usm['jam_ujian'];
                  else:
                  ?>
                    <b>Jam Belum Tersedia</b>
                  <?php  
                  endif;
                  ?>  
                </td>
                <td>
                  <?php  
                  if($usm['ruang_ujian'] != ''):
                    echo $usm['ruang_ujian'];
                  else:
                  ?>
                    <b>Ruang Belum Tersedia</b>
                  <?php  
                  endif;
                  ?>   
                </td>
                <td><?=$ket;?></td>
                <td>
                  <?php  
                  if($usm['jam_ujian'] != '00:00:00' AND $usm['ruang_ujian'] != ''):
                  ?>
                    <a href="cetak/kpusm" target="blank" class="btn btn-success btn-block">Cetak kartu Peserta Ujian</a>
                  <?php  
                  else:
                  ?>
                    <a href="#" class="btn btn-block btn-warning disabled">Kartu Belum Tersedia</a>
                  <?php  
                  endif;
                  ?>
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