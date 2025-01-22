<title>Data Siswa</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <div class="card-body">
                <a href="index.php?page=siswa_tambah" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
                <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>NISN</th>
                      <th>Nama Siswa</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Kelas</th>
                      <th class="text-center"><i class="fa fa-cog"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas");
                    while ($siswa = mysqli_fetch_assoc($tampil)){
                    ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no++; ?></td>
                      <td class="align-middle"><?php echo $siswa ['nisn'] ?></td>
                      <td class="align-middle"><?php echo $siswa['nama_siswa'] ?></td>
                      <td class="align-middle"><?php echo $siswa['tempat_lahir'] ?></td>
                      <td class="align-middle"><?php echo date('d-m-Y', strtotime ($siswa['tanggal_lahir'])) ?></td>
                      <td class="align-middle"><?php echo $siswa['nama_kelas'] ?></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>