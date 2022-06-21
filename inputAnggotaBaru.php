<?php


function inputAnggotaBaru($Nama_User, $Sekolah, $NoTelp, $Golongan, $Username){

  $ID_Anggota = array("US001", "US002", "US003", "US004", "US005", "US005", "US007", "US008", "US009", "US010"
  , "US011", "US012", "US013", "US014", "US015", "US016", "US017", "US018", "US019");
  
  $TglUpdate = date('Y-m-d');
  $MasaBakti = "2024";
  include 'koneksi.php';
  $ID_Admin = $_SESSION['ID_User'];

  for($i=0 ; $i<19; $i++){
    $queryGetIDAnggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE ID_Anggota = '$ID_Anggota[$i]'");
    $cekGetIDAnggota = mysqli_num_rows($queryGetIDAnggota);
    $dataIDAnggota = mysqli_fetch_array($queryGetIDAnggota);
    if($dataIDAnggota == 0){
      $NewID = $ID_Anggota[$i];
    }else{

    }
  }

  //Mengambil ID Akses
  $queryGetID = mysqli_query($koneksi, "SELECT ID_Akses FROM akses WHERE Username = '$Username'");
  $data = mysqli_fetch_array($queryGetID);
  if($data > 0){
    $ID_Akses = $data['ID_Akses'];
  }

  $queryAnggotaBaru = "INSERT INTO anggota VALUES ('$NewID', '$ID_Admin', '$ID_Akses', '$Nama_User', '$Sekolah', '$NoTelp', '$Golongan', '$MasaBakti', '$TglUpdate')";
  $result = mysqli_query($koneksi, $queryAnggotaBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}

function inputAdminBaru($Nama_User, $Sekolah, $NoTelp, $Golongan, $Username){

  $TglUpdate = date('Y-m-d');
  $MasaBakti = '2024';
  include 'koneksi.php';

  $ID_Admin = array("AD001", "AD002", "AD003");

  for($i=0 ; $i<3; $i++){
    $queryGetIDAdmin= mysqli_query($koneksi, "SELECT * FROM administrator WHERE ID_Admin = '$ID_Admin[$i]'");
    $cekGetIDAdmin = mysqli_num_rows($queryGetIDAdmin);
    $dataIDAdmin = mysqli_fetch_array($queryGetIDAdmin);
    if($dataIDAdmin == 0){
      $NewID = $ID_Admin[$i];
    }else{

    }
  }
  
  //Mengambil ID Akses
  $queryGetID = mysqli_query($koneksi, "SELECT ID_Akses FROM akses WHERE Username = '$Username'");
  $data = mysqli_fetch_array($queryGetID);
  if($data > 0){
    $ID_Akses = $data['ID_Akses'];
  }

  $queryAnggotaBaru = "INSERT INTO administrator VALUES ('$NewID', '$ID_Akses', '$Nama_User', '$Sekolah', '$NoTelp', '$Golongan', '$MasaBakti', '$TglUpdate')";
  $result = mysqli_query($koneksi, $queryAnggotaBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}
?>
