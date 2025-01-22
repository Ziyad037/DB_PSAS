<title>Tambah Siswa</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Tambah Siswa</h3>
              </div>
              <div class="card-body">
                      <form action="siswa_tambah_proses.php" method="post" autocomplete="off">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="nisn">NISN</label>
                              <input type="number" name="nisn" class="form-control" id="nisn" placeholder="masukkan nisn" autofocus required>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="no_hp">No. Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="masukkan nomor handphone" required>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="nama">Nama Siswa</label>
                              <input type="text" name="nama_siswa" class="form-control" id="nama" placeholder="masukkan nama siswa" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="masukkan email" required>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="mb-3">
                              <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                              <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="masukkan tempat lahir" required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="mb-3">
                              <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="jurusan">Jurusan</label>
                                <select name="jurusan" class="form-control" id="jurusan" required>
                                  <option value="">- Pilih -</option>
                                  <?php
                                  include 'koneksi.php';
                                  $tampil = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");
                                  while ($jurusan = mysqli_fetch_assoc($tampil)){
                                  ?>
                                  <option value="<?php echo $jurusan ['id_jurusan'];?>"><?php echo $jurusan ['nama_jurusan'];?></option>
                                  <?php } ?>
                                </select>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="jk">Jenis Kelamin</label><br>
                              <input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki &emsp; &emsp;
                              <input type="radio" name="jk" id="jk" value="Perempuan" required> Perempuan
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="kelas">Kelas</label>
                                <select name="kelas" class="form-control" id="kelas" orequired>
                                  <option value="">- Pilih -</option>
                                  <?php
                                  include 'koneksi.php';
                                  $tampil = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                                  while ($kelas = mysqli_fetch_assoc($tampil)){
                                  ?>
                                  <option value="<?php echo $kelas ['id_kelas'];?>"><?php echo $kelas ['nama_kelas'];?></option>
                                  <?php } ?>
                                </select>
                              </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="alamat">Alamat</label>
                          <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="masukkan alamat lengkap" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                        <a href="" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                      </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>