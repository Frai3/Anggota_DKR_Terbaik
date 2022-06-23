<?php

session_start();

include 'koneksi.php';

$Nama_User = $_GET['Nama_User'];
$Role = $_GET['Role'];

if($Role == "administrator"){
    $queryGetAkses = mysqli_query($koneksi, "SELECT ID_Akses FROM administrator WHERE Nama_User = '$Nama_User';");
    $dataAkses = mysqli_fetch_array($queryGetAkses);
    $ID_Akses = $dataAkses['ID_Akses'];

    mysqli_query($koneksi, "DELETE FROM administrator WHERE Nama_User = '$Nama_User'");
    mysqli_query($koneksi, "DELETE FROM akses WHERE ID_Akses = '$ID_Akses'");
    echo "<script>alert('Data berhasil dihapus!');
        window.location='dataAnggota.php';
        </script>";
}else{
    $queryGetAkses = mysqli_query($koneksi, "SELECT ID_Akses FROM anggpta WHERE Nama_User = '$Nama_User';");
    $dataAkses = mysqli_fetch_array($queryGetAkses);
    $ID_Akses = $dataAkses['ID_Akses'];

    mysqli_query($koneksi, "DELETE FROM anggota WHERE Nama_User = '$Nama_User'");
    mysqli_query($koneksi, "DELETE FROM akses WHERE ID_Akses = '$ID_Akses'");
    echo "<script>alert('Data berhasil dihapus!');
        window.location='dataAnggota.php';
        </script>";
}

?>