<?php

function editPoin($ID_Notif, $poinNilai, $keterangan){

  include 'koneksi.php';
  $ID_Admin = $_SESSION['ID_User'];

  $queryPoinNilai = "INSERT INTO notifikasi VALUES ('$ID_Notif', '$ID_Admin', '$poinNilai', '$keterangan')";
  $result = mysqli_query($koneksi, $queryPoinNilai);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}

?>
