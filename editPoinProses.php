<?php

  session_start();

  include 'koneksi.php';
  include 'editPoin.php';

  //Get data dari form
  $poinNilai = $_GET['poinNilai'];
  $keterangan = $_GET['cmbAction'];
  
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Notif) as CountID FROM notifikasi");
  while($data = mysqli_fetch_array($queryGetID)){
    if($data['CountID'] < 9){
      $ID_Notif="PN00".strval($data['CountID'] + 1);
    }else if($data['CountID'] >= 9){
      $ID_Notif="PN0".strval($data['CountID'] + 1);
    }else{
      $ID_Notif="PN".strval($data['CountID'] + 1);
    }
  }

  if(empty($poinNilai) or empty($keterangan)){
    echo "<script>alert('Masukkan Data Dengan Benar!');
	 	window.location='formTambahPoinNilai';
	 	</script>";;
  }
  else{
    //Get function edit data dari edit poin
    editPoin($ID_Notif, $poinNilai, $keterangan);
    echo "<script>alert('Data Berhasil Dirubah!');
    window.location='indexAdministrator';
    </script>";
  }

?>