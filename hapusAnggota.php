<?php

session_start();

include 'koneksi.php';

$Nama_User = $_GET['Nama_User'];
$Role = $_GET['Role'];

if($Role == "administrator"){
    mysqli_query($koneksi, "DELETE FROM administrator WHERE Nama_User = '$Nama_User'");
    echo "<script>alert('Data berhasil dihapus!');
        window.location='dataAnggota.php';
        </script>";
}else{
    mysqli_query($koneksi, "DELETE FROM anggota WHERE Nama_User = '$Nama_User'");
    echo "<script>alert('Data berhasil dihapus!');
        window.location='dataAnggota.php';
        </script>";
}

?>