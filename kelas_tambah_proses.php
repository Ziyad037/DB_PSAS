<?php

include 'koneksi.php';

$nama_kelas = $_POST['nama_kelas'];
$tambah = mysqli_query($koneksi, "INSERT INTO tb_kelas VALUES(NULL,'$nama_kelas')");

if ($tambah){
    echo "<script>
            alert('Kelas Berhasil Ditambah');
            location.href='index.php?page=kelas';
        </script>";
} else {
    echo "<script>
            alert('Kelas Gagal Ditambah');
            location.href='index.php?page=kelas';
        </script>";
}