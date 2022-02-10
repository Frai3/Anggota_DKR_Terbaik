<?php

// echo date('Y');
session_start();
include '../controller/koneksi.php';

$Username = $_SESSION['Username'];

$Periode = date('Y');
//Mengambil data ID_User
$queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US00' AND Periode = '$Periode'");
while($data = mysqli_fetch_array($queryGetNilai)){
    $data['TJPeran'];
}


// while($data = mysqli_fetch_array($queryGetID)){
//     $ID_User = $data['ID_Nilai'];
//     if(empty($ID_User)){
//       echo "Data dapat ditambahkan";
//     }else{
//       echo "Data Exist";
//     }

?>