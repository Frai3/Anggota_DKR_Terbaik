<?php


function inputAnggotaBaru($Nama_User, $Sekolah, $NoTelp, $Golongan, $Username){

  $TglUpdate = date('Y-m-d');
  include 'koneksi.php';
  $ID_Admin = $_SESSION['ID_User'];

  //Memasukkan ID Baru
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Anggota) as CountID FROM Anggota");
  while($data = mysqli_fetch_array($queryGetID)){
    if($data['CountID'] < 9){
      $ID_Anggota ="US00".strval($data['CountID'] + 1);
    }else if($data['CountID'] >= 9){
      $ID_Anggota ="US0".strval($data['CountID'] + 1);
    }else{
      $ID_Anggota ="US".strval($data['CountID'] + 1);
    }
  }

  //Mengambil ID Akses
  $queryGetID = mysqli_query($koneksi, "SELECT ID_Akses FROM akses WHERE Username = '$Username'");
  $data = mysqli_fetch_array($queryGetID);
  if($data > 0){
    $ID_Akses = $data['ID_Akses'];
  }

  $queryAnggotaBaru = "INSERT INTO anggota VALUES ('$ID_Anggota', '$ID_Admin', '$ID_Akses', '$Nama_User', '$Sekolah', '$NoTelp', '$Golongan', '$TglUpdate')";
  $result = mysqli_query($koneksi, $queryAnggotaBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}

function inputAdminBaru($Nama_User, $Sekolah, $NoTelp, $Golongan, $Username){

  $TglUpdate = date('Y-m-d');
  include 'koneksi.php';

  //Memasukkan ID Baru
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Admin) as CountID FROM administrator");
  while($data = mysqli_fetch_array($queryGetID)){
    if($data['CountID'] < 9){
      $ID_Admin="AD00".strval($data['CountID'] + 1);
    }else if($data['CountID'] >= 9){
      $ID_Admin="AD0".strval($data['CountID'] + 1);
    }else{
      $ID_Admin="AD".strval($data['CountID'] + 1);
    }
  }

  //Mengambil ID Akses
  $queryGetID = mysqli_query($koneksi, "SELECT ID_Akses FROM akses WHERE Username = '$Username'");
  $data = mysqli_fetch_array($queryGetID);
  if($data > 0){
    $ID_Akses = $data['ID_Akses'];
  }

  $queryAnggotaBaru = "INSERT INTO administrator VALUES ('$ID_Admin', '$ID_Akses', '$Nama_User', '$Sekolah', '$NoTelp', '$Golongan', '$TglUpdate')";
  $result = mysqli_query($koneksi, $queryAnggotaBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}
?>
