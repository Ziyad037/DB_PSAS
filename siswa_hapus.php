<?php

include 'koneksi.php';

$id = $_GET['hapus'];
$hapus = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nisn='$id'");

if ($hapus) {
    echo "<script>
          alert('Data siswa berhasil dihapus!');
          document.location.href='index.php?page=siswa';
          </script>";

}else{
echo "<script>
      alert('Data siswa gagal dihapus!');
      document.location.href='index.php?page=siswa;
      </script>";
}
?>