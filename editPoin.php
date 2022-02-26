<?php

function editPoin($ID_Notif, $poinNilai, $keterangan){

  include 'koneksi.php';
  $Username = $_SESSION['Username'];

  $queryGetID = mysqli_query($koneksi, "SELECT ID_User FROM user u, akses a WHERE Username='$Username' AND a.ID_Akses = u.ID_Akses");
  while($data = mysqli_fetch_array($queryGetID)){
      $ID_User = $data['ID_User'];
  }
  

  $queryPoinNilai = "INSERT INTO notifikasi VALUES ('$ID_Notif', '$ID_User', '$poinNilai', '$keterangan')";
  $result = mysqli_query($koneksi, $queryPoinNilai);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}

?>
