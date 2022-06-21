<?php

function inputNilaiBaru($PoinNilaiBaru, $Persen, $Periode){
  session_start();

  include 'koneksi.php';
  include 'inputPoin.php';
  $ID_Admin = $_SESSION['ID_User'];

  //Get function edit data dari edit poin
  $ID_Admin = $_SESSION['ID_User'];

  $queryPoinNilai = "INSERT INTO poinnilai VALUES ('$ID_Admin', '$PoinNilaiBaru', '$Persen', '$Periode')";
  $result = mysqli_query($koneksi, $queryPoinNilai);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
  echo "<script>alert('Data Berhasil Dirubah!');
  window.location='indexAdministrator';
  </script>";
}
?>