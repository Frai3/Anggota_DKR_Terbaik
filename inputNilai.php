<?php


function inputNilai($Kandidat, $PoinNilai, $ID_UserIn, $Nilai, $Periode){

  include 'koneksi.php';

  $queryInputNilai = "INSERT INTO nilai VALUES ('$Kandidat', '$PoinNilai', '$ID_UserIn', '$Nilai', '$Periode')";
  $result = mysqli_query($koneksi, $queryInputNilai);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}
?>
