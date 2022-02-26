<?php


function inputNilai($ID_UserIn, $ID_UserOut, $TJPeran, $TepatHadir, $Keaktifan, $Inisiatif, $Sikap, $Komunikasi, $Periode){

  include 'koneksi.php';

  //Memasukkan ID Baru
  $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Nilai) as CountID FROM nilai");
  while($data = mysqli_fetch_array($queryGetID)){
      if($data['CountID'] < 9){
        $ID_Nilai="NL00".strval($data['CountID'] + 1);
      }else if($data['CountID'] >= 9){
        $ID_Nilai="NL0".strval($data['CountID'] + 1);
      }else{
        $ID_Nilai="NL".strval($data['CountID'] + 1);
      }
  }
  

  $queryAnggotaBaru = "INSERT INTO nilai VALUES ('$ID_Nilai', '$ID_UserIn', '$ID_UserOut', '$TJPeran', '$TepatHadir', '$Keaktifan', '$Inisiatif', '$Sikap', '$Komunikasi', '$Periode')";
  $result = mysqli_query($koneksi, $queryAnggotaBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }
}
?>
