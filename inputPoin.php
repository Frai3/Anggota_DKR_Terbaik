<?php

function editPoin($PoinNilai, $Persentase, $Periode){

  include 'koneksi.php';
  $ID_Admin = $_SESSION['ID_User'];

  $queryPoinNilai = "INSERT INTO poinnilai VALUES ('$ID_Admin', '$PoinNilai', '$Persentase', '$Periode')";
  $result = mysqli_query($koneksi, $queryPoinNilai);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}

?>
