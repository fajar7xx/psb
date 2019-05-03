<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Rapor</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="alert alert-info" role="alert">
          <h5>Perhatian!</h5>
          Input NIlai rapor semester SMP dari kelas VII(7) sampai kelas IX(9) <br>
          <ul>
            <li>Untuk Kolom 1 dan 2, mohon isi dengan nilai rapor Kelas VII Smester 1 dan 2.</li>
            <li>Untuk Kolom 3 dan 4, mohon isi dengan nilai rapor Kelas VIII Smester 1 dan 2.</li>
            <li>Untuk Kolom 5 dan 6, mohon isi dengan nilai rapor Kelas IX Smester 1 dan 2.</li>
          </ul>
            Gunakan tanda titik (.) untuk menyatakan nilai rapor yang mengandung koma. contoh 75.5 <br>
            apabila terjadi kesalahan dalam penginputan nilai, segera lakukan perubahaqn nilai.
        </div>

        <form action="simpan-nilai" method="post">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th rowspan="2" class="align-middle text-center">No</th>
                <th rowspan="2" class="align-middle text-center">Mata Pelajaran</th>
                <th colspan="5" class="text-center">Nilai Raport Semester</th>
                <th rowspan="2" class="align-middle text-center">Nilai Rata-Rata</th>
              </tr>
              <tr>
                <th class="text-center">1</th>
                <th class="text-center">2</th>
                <th class="text-center">3</th>
                <th class="text-center">4</th>
                <th class="text-center">5</th>
              </tr>
            </thead>
            <tbody>
              <?php  
              $qu_mapel = "SELECT
                              *
                          FROM
                              nilai_raport
                          LEFT JOIN mapel USING(id_mapel)
                          WHERE
                            no_reg = '$noreg'";
              $sql_mapel = mysqli_query($conn, $qu_mapel)or die(mysqli_error($conn));
              $no = 1;
              
              while($data = mysqli_fetch_assoc($sql_mapel)):
              ?>
                <input type="hidden" name="idmapel[]" value="<?=$data['id_mapel'];?>">
                <tr>
                  <td class="text-center"><?=$no++;?></td>
                  <td class="text-center"><?=$data['mapel'];?></td>
                  <td>
                    <input type="number" min="0" max="100" step="any" class="form-control" name="nil1[]" value="<?=$data['nil1'];?>">
                  </td>
                  <td>
                    <input type="number" min="0" max="100" step="any" class="form-control" name="nil2[]" value="<?=$data['nil2'];?>">
                  </td>
                  <td>
                    <input type="number" min="0" max="100" step="any" class="form-control" name="nil3[]" value="<?=$data['nil3'];?>">
                  </td>
                  <td>
                    <input type="number" min="0" max="100" step="any" class="form-control" name="nil4[]" value="<?=$data['nil4'];?>">
                  </td>
                  <td>
                    <input type="number" min="0" max="100" step="any" class="form-control" name="nil5[]" value="<?=$data['nil5'];?>">
                  </td>
                  <td class="text-center font-weight-bold">
                    <?=$data['nil_ratarata'];?>
                  </td>
                </tr>
              <?php  
              endwhile;
              ?>
            </tbody>
          </table>
          <div class="form-group">
            <a href="mapel" class="btn btn-warning">Kembali Ke Mata Pelajaran</a>
            <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>