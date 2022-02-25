<?php

if (isset($_POST['input'])) {

  session_start();

  include 'koneksi.php';
  include 'editData.php';

  //Get data dari form
  $ID_User = $_POST['ID_User'];
  $Nama_User = $_POST['Nama_User'];
  $Sekolah = $_POST['Sekolah'];
  $NoTelp = $_POST['NoTelp'];
  $Golongan = $_POST['cmbGolongan'];
  
  if(empty($Nama_User) or empty($Sekolah) or empty($NoTelp) or empty($Golongan)){
    echo "<script>alert('Masukkan Data Dengan Benar!');
	 	window.location='formEditData';
	 	</script>";;
  }
  else{
  //Get function edit data dari model edit data
  editData($ID_User, $Nama_User, $Sekolah, $NoTelp, $Golongan);
  
    if($_SESSION['Nama_Role'] == 'administrator'){
      echo "<script>alert('Data Berhasil Dirubah!');
      window.location='indexAdministrator';
      </script>";
    }else if($_SESSION['Nama_Role'] == 'user'){
      echo "<script>alert('Data Berhasil Dirubah!');
      window.location='indexUser';
      </script>";
    }
  }
}
?>