<?php

function editPoinNilai($PoinNilai, $Persentase){
    include 'koneksi.php';

    $query  = "UPDATE poinnilai SET ";
    $query .= "Persentase = '$Persentase'";
    $query .= "WHERE PoinNilai = '$PoinNilai'";
    $result = mysqli_query($koneksi, $query);

   //periksa hasil query apakah ada error
   if(!$result) {
       die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
   }
}

?>