<div class="card">
	<div class="card-header bg-primary text-white">
		<h2 class="text-center">Daftar Verifikasi Calon Murid SMK Medan</h2>
	</div>
	<div class="card-body">
		<p class="card-text">
			Laman ini menyediakan Informasi Mengenai calon murid yang telah melengkapi berkas dan yang belum melengkapi berkas. anda dapat menggunakan fitur pencarian dengan memasukkan kata kunci NISN, Nama Siswa atau Asal Sekolah kedalam kolom pencarian
		</p>
		<hr>
		<div class="table-responsive-md">
			<table id="tabel" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>NISN</th>
						<th>Nama Siswa</th>
						<th>Asal Sekolah</th>
						<th>Verifikasi Dokumen</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// akan di upgrade dengan menggunakn server side script
					include 'config/koneksi.php';
					$no = 1;  
					$query = "SELECT * FROM psb ORDER BY no_reg DESC";
					$sql = mysqli_query($conn, $query)or die(mysqli_error($conn));
					while($data = mysqli_fetch_assoc($sql)):
					?>
						<tr>
							<td class="text-center"><?=$no++;?></td>
							<td><?=$data['nisn'];?></td>
							<td><?=$data['nm_siswa'];?></td>
							<td><?=$data['asal_sekolah'];?></td>
							<td class="font-weight-bold"><?=($data['status_verifikasi'] == 'Y' ? 'Sudah Verifikasi' : 'Belum Verifikasi');?></td>
						</tr>
					<?php  
					endwhile;
					?>
				</tbody>
			</table>	
		</div>
	</div>
</div>



