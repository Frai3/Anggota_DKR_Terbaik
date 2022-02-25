<?php


function inputAnggotaBaru($ID_Role, $Nama_User, $Sekolah, $NoTelp, $Golongan){

  $TglUpdate = date('Y-m-d');
  include 'koneksi.php';

  //Memasukkan ID Baru
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_User) as CountID FROM user");
  while($data = mysqli_fetch_array($queryGetID)){
    if($data['CountID'] < 10){
      $ID_User="US00".strval($data['CountID'] + 1);
    }else if($data['CountID'] < 100){
      $ID_User="US0".strval($data['CountID'] + 1);
    }else{
      $ID_User="US".strval($data['CountID'] + 1);
    }
  }

  //Mengambil ID Akses
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Akses) as CountID FROM akses");
  while($data = mysqli_fetch_array($queryGetID)){
    if($data['CountID'] < 10){
      $ID_Akses="AK00".strval($data['CountID']);
    }else if($data['CountID'] < 100){
      $ID_Akses="AK0".strval($data['CountID']);
    }else{
      $ID_Akses="AK".strval($data['CountID']);
    }
  }

  $queryAnggotaBaru = "INSERT INTO user VALUES ('$ID_User', '$ID_Role', '$ID_Akses', '$Nama_User', '$Sekolah', '$NoTelp', '$Golongan', '$TglUpdate')";
  $result = mysqli_query($koneksi, $queryAnggotaBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}
?>
