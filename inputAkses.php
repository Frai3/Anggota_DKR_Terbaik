<?php
function inputAksesAnggotaBaru($ID_Role, $Username, $Password){
  include 'koneksi.php';
  
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Akses) as CountID FROM akses");
  while($data = mysqli_fetch_array($queryGetID)){
      if($data['CountID'] < 9){
        $ID_Akses="AK00".strval($data['CountID'] + 1);
      }else if($data['CountID'] >= 9){
        $ID_Akses="AK0".strval($data['CountID'] + 1);
      }else{
        $ID_Akses="AK".strval($data['CountID'] + 1);
      }
  }

  $queryAksesBaru = "INSERT INTO akses VALUES ('$ID_Akses', '$ID_Role', '$Username', '$Password')";
  $result = mysqli_query($koneksi, $queryAksesBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }

}
?>