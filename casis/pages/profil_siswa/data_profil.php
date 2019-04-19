<?php 
$noregis = $_GET['reg'];
?>
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Lengkapi data profil <?=$noregis;?></h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <form action="" method="post" action="update_profil.php">
          <div class="accordion" id="accordionExample">
            <!-- biodata pribada -->
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Data Pribadi
                </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama" value="<?=$data['nm_siswa'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tempat" id="tempat" value="<?=$data['tmp_lahir'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" name="lahir" id="lahir" value="<?=$data['tgl_lahir'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Anak Ke</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Jumlah Saudara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Status Anak</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Berat Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Golongan Darah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Kota/Kab</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NO. Hp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamat Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Status Rumah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- biodata akademik -->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Data Akademik
                </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">No Ijazah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Tanggal Ijazah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Tahun Ijazah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nilai UN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Prestasi Akademik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Prestasi Olahraga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Prestasi Kesenian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- biodata ortu -->
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Data Orang Tua
                </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Penghasilan Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Penghasiln Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamaqt Orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">KoTA/ KAB ORANG TUAde Pos Orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Koode pos orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">No hp orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- biodata wali -->
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Data wali
                </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Pekerjaan Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Penghasiln Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamat Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Hp Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Penaggung jawab</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="form-group mt-4 float-right">
            <a href="home" class="btn btn-warning">Batal</a>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>