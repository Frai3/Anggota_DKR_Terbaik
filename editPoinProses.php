<?php

function editPoinNilai($ID_PoinNilai, $PoinNilai, $Persentase){
    if (!isset($_SESSION)) {
        session_start();
    }
    include 'koneksi.php';
    $ID_Admin = $_SESSION['ID_User'];
    $Periode = date('Y');

    $query  = "UPDATE poinnilai SET ";
    $query .= "ID_Admin = '$ID_Admin',";
    $query .= "PoinNilai = '$PoinNilai',";
    $query .= "Persentase = '$Persentase',";
    $query .= "Periode = '$Periode'";
    $query .= "WHERE ID_PoinNilai = '$ID_PoinNilai'";
    $result = mysqli_query($koneksi, $query);

   //periksa hasil query apakah ada error
   if(!$result) {
       die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
   }
}

?>