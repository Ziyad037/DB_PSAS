<title>Tambah Kelas</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Tambah Kelas</h3>
              </div>
              <div class="card-body">
                <form action="kelas_tambah_proses.php" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" name="" class="form-control" id="nama_kelas" placeholder="masukkan nama kelas" autofocus required>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                    <a href="index.php?page=kelas" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>