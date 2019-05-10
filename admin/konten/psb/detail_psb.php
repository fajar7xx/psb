<?php  
$id = $_GET['id'];

$data= query("SELECT * FROM psb JOIN kompetensi USING(id_kompetensi) WHERE no_reg = '$id'");
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Calon Murid</h1>
     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Penerimaan Siswa Baru</h6>
        </div>
        <!-- Card Body -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td colspan="2" class="h4 text-primary">Detail Pendaftaran <hr></td>
                  </tr>
                  <tr>
                    <td>No Pendaftaran</td>
                    <td><?=$data['no_reg'];?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Pendaftaran</td>
                    <td><?=tgl_indo($data['tgl_daftar']);?></td>
                  </tr>
                  <tr>
                    <td>Kode Aktifasi</td>
                    <td><?=$data['kode_aktivasi'];?></td>
                  </tr>
                  <tr>
                    <td>Status Aktifasi</td>
                    <td><?=$data['status_aktivasi'] == "Y"? "Sudak Aktif" : "Belum Aktif";?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?=$data['email_siswa'];?></td>
                  </tr>
                  <tr>
                    <td>Kompetensi</td>
                    <td class="font-weight-bold"><?=$data['bid_kompetensi'];?></td>
                  </tr>
                  <tr>
                    <td>NISN</td>
                    <td><?=$data['nisn'];?></td>
                  </tr>
                  <tr>
                    <td>N I S</td>
                    <td><?=$data['nis'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="h4 text-primary">Identitas Diri <hr></td>
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td><?=$data['nm_siswa'];?></td>
                  </tr>
                  <tr>
                    <td>Tempat dan Tanggal Lahir</td>
                    <td><?=$data['tmp_lahir'] . ", " . tgl_indo($data['tgl_lahir']);?></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><?=$data['jns_kelamin'] == 'L' ? 'Laki - Laki' : 'Perempuan';?></td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td><?=$data['agama'];?></td>
                  </tr>
                  <tr>
                    <td>Anak Ke</td>
                    <td><?=$data['anak_ke'];?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Saudara</td>
                    <td><?=$data['jml_saudara'];?> Saudara</td>
                  </tr>
                  <tr>
                    <td>Status Anak</td>
                    <td><?=$data['status_anak'];?></td>
                  </tr>
                  <tr>
                    <td>Alamat Rumah</td>
                    <td><?=$data['alamat_siswa'];?></td>
                  </tr>
                  <tr>
                    <td>Kota</td>
                    <td><?=$data['kota_kab'];?></td>
                  </tr>
                  <tr>
                    <td>Kode Pos</td>
                    <td><?=$data['kode_pos'];?></td>
                  </tr>
                  <tr>
                    <td>No Hp dan Tel</td>
                    <td><?=$data['hp_siswa'] . "/" . $data['tlp_siswa'];?></td>
                  </tr>
                  <tr>
                    <td>Tinggi Badan</td>
                    <td><?=$data['tinggi_badan'];?> cm</td>
                  </tr>
                  <tr>
                    <td>Berat Badan</td>
                    <td><?=$data['berat_badan'];?> kg</td>
                  </tr>
                  <tr>
                    <td>Golongan Darah</td>
                    <td><?=$data['gol_darah'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="h4 text-primary">Asal Sekolah <hr></td>
                  </tr>
                  <tr>
                    <td>Nama Ayah</td>
                    <td><?=$data['no_reg'];?></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Ayah</td>
                    <td><?=tgl_indo($data['tgl_daftar']);?></td>
                  </tr>
                  <tr>
                    <td>Penghasilan Ayah</td>
                    <td><?=tgl_indo($data['tgl_daftar']);?></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="h4 text-primary">Biodata Orang Tua <hr></td>
                  </tr>
                  <tr>
                    <td>Nama Ayah</td>
                    <td><?=$data['no_reg'];?></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Ayah</td>
                    <td><?=tgl_indo($data['tgl_daftar']);?></td>
                  </tr>
                  <tr>
                    <td>Penghasilan Ayah</td>
                    <td><?=tgl_indo($data['tgl_daftar']);?></td>
                  </tr>
                </tbody>
              </table>
            </div>  
          </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->