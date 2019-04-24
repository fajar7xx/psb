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
        <form method="post" action="?page=update-profil">
          <input type="hidden" name="no_regis" value="<?=$noregis;?>">
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
                    <label for="jk" class="col-sm-2 col-form-label">jenis Kelamin</label>
                    <div class="col-sm-4">
                      <select name="jk" id="jk" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L" <?=$data['jns_kelamin'] == 'L' ? 'selected':'';?>>Laki - Laki</option>
                        <option value="P" <?=$data['jns_kelamin'] == 'P' ? 'selected':'';?>>Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                      <select name="agama" id="agama" class="form-control">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Protesta">Protesta</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="anakke" class="col-sm-2 col-form-label">Anak Ke</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="anakke" id="anakke" maxlength="2" min="1" value="<?=$data['anak_ke'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jmlsaudara" class="col-sm-2 col-form-label">Jumlah Saudara</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="jmlsaudara" id="jmlsaudara" min="0" value="<?=$data['jml_saudara'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="statusanak" class="col-sm-2 col-form-label">Status Anak</label>
                    <div class="col-sm-4">
                      <select name="statusanak" id="statusanak" class="form-control">
                        <option value="">Pilih Status Anak</option>
                        <option value="Anak Kandung">Anak Kandung</option>
                        <option value="Anak Angkat">Anak Angkat</option>
                        <option value="Anak Asuh">Anak Asuh</option> 
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tinggibdn" class="col-sm-2 col-form-label">Tinggi Badan (cm)</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="tinggibdn" id="tinggibdn" min="1" value="<?=$data['tinggi_badan'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="beratbdn" class="col-sm-2 col-form-label">Berat Badan (kg)</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="beratbdn" id="beratbdn" min="1" value="<?=$data['berat_badan'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="goldarah" class="col-sm-2 col-form-label">Golongan Darah</label>
                    <div class="col-sm-4">
                      <select name="goldarah" id="goldarah" class="form-control">
                        <option value="">Pilih Golongan darah</option>
                        <option value="A">Gologan Darah A</option>
                        <option value="B">Gologan Darah B</option>
                        <option value="AB">Gologan Darah AB</option>
                        <option value="O">Gologan Darah O</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"><?=$data['alamat_siswa'];?></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kotakab" class="col-sm-2 col-form-label">Kota/Kab</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="kotakab" id="kotakab" value="<?=$data['kota_kab'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="kodepos" id="kodepos" maxlength="5" min="1" value="<?=$data['kode_pos'];?>">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">NO. Hp</label>
                    <div class="col-sm-6">
                      <input type="tel" class="form-control" name="nohp" id="nohp" maxlength="16" value="<?=$data['hp_siswa'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="notel" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-6">
                      <input type="tel" class="form-control" name="notel" id="notel" maxlength="16" value="<?=$data['tlp_siswa'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Alamat Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" value="<?=$data['email_siswa'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="statusrmh" class="col-sm-2 col-form-label">Status Rumah</label>
                    <div class="col-sm-6">
                     <select name="statusrmh" id="statusrmh" class="form-control">
                       <option value="">Status Rumah</option>
                       <option value="Pribadi">Milik Sendiri</option>
                       <option value="Sewa">Menyewa</option>
                     </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kendaraan" class="col-sm-2 col-form-label">Kendaraan</label>
                    <div class="col-sm-6">
                      <select name="kendaraan" id="kendaraan" class="form-control">
                        <option value="">Pilih Kendaraan</option>
                        <option value="Kendaraan Umum">Kendaraan Umum</option>
                        <option value="Sepeda Motor">Sepeda Motor</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Sepeda">Sepeda</option>
                        <option value="Jalan Kaki">Jalan Kaki</option>
                      </select>
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
                    <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="<?=$data['asal_sekolah'];?>">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                      <textarea name="alamat_sekolah" id="alamat_sekolah" cols="30" rows="5" class="form-control"><?=$data['alamat_sekolah'];?></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_ijazah" class="col-sm-2 col-form-label">No Ijazah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" value="<?=$data['no_ijazah'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tgl_ijazah" class="col-sm-2 col-form-label">Tanggal Ijazah</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tgl_ijazah" id="tgl_ijazah" value="<?=$data['tgl_ijazah'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="thn_ijazah" class="col-sm-2 col-form-label">Tahun Ijazah</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="thn_ijazah" id="thn_ijazah" value="<?=$data['thn_ijazah'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nilai_un" class="col-sm-2 col-form-label">Nilai UN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nilai_un" id="nilai_un" value="<?=$data['nilai_un'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="prestasi_akd" class="col-sm-2 col-form-label">Prestasi Akademik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="prestasi_akd" id="prestasi_akd" value="<?=$data['prestasi_akademik'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="prestasi_olg" class="col-sm-2 col-form-label">Prestasi Olahraga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="prestasi_olg" id="prestasi_olg" value="<?=$data['prestasi_olahraga'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="prestasi_seni" class="col-sm-2 col-form-label">Prestasi Kesenian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="prestasi_seni" id="prestasi_seni" value="<?=$data['prestasi_kesenian'];?>">
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
                    <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?=$data['nm_orangtua_ayah'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pek_ayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pek_ayah" id="pek_ayah" value="<?=$data['pekerjaan_ayah'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="peng_ayah" class="col-sm-2 col-form-label">Penghasilan Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control angka" name="peng_ayah" id="peng_ayah" value="<?=$data['penghasilan_ayah'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?=$data['nm_orangtua_ibu'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pek_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pek_ibu" id="pek_ibu" value="<?=$data['pekerjaan_ibu'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="peng_ibu" class="col-sm-2 col-form-label">Penghasiln Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control angka" name="peng_ibu" id="peng_ibu" value="<?=$data['penghasilan_ibu'];?>">
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="alamat_ortu" class="col-sm-2 col-form-label">Alamat Orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat_ortu" id="alamat_ortu">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kota_ortu" class="col-sm-2 col-form-label">KoTA/ KAB ORANG TUAde Pos Orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kota_ortu" id="kota_ortu">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kodepos_ortu" class="col-sm-2 col-form-label">Koode pos orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kodepos_ortu" id="kodepos_ortu">
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="hp_ortu" class="col-sm-2 col-form-label">No hp orang tua</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="hp_ortu" id="hp_ortu" value="<?=$data['hp_orgtua'];?>">
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
                    <label for="nama_wali" class="col-sm-2 col-form-label">Nama Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_wali" id="nama_wali" value="<?=$data['nm_wali'];?>">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="pek_wali" class="col-sm-2 col-form-label">Pekerjaan Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pek_wali" id="pek_wali" value="<?=$data['pekerjaan_wali'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="peng_wali" class="col-sm-2 col-form-label">Penghasiln Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control angka" name="peng_wali" id="peng_wali" value="<?=$data['penghasilan_wali'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat_wali" class="col-sm-2 col-form-label">Alamat Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat_wali" id="alamat_wali" value="<?=$data['alamat_wali'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hp_wali" class="col-sm-2 col-form-label">Hp Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="hp_wali" id="hp_wali" value="<?=$data['hp_wali'];?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penanggung_jawab" class="col-sm-2 col-form-label">Penaggung jawab</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab" value="<?=$data['penanggung_biaya'];?>">
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