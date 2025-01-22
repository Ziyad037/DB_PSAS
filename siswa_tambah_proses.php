<?php
include 'koneksi.php';

$nisn           = $_POST['nisn'];
$nama_siswa     = $_POST['nama_siswa'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$jk             = $_POST['jk'];
$no_hp          = $_POST['no_hp'];
$email          = $_POST['email'];
$jurusan        = $_POST['jurusan'];
$kelas          = $_POST['kelas'];
$alamat         = $_POST['alamat'];

$tambah = mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES ('$nisn','$nama_siswa','$tempat_lahir','$tanggal_lahir','$jk','$no_hp','$email','$jurusan','$kelas','$alamat')");

if($tambah){
    echo "<script>
            alert('Data siswa berhasil ditambah!');
            window.location.href='index.php?page=siswa';
          </script>";
}

?>