<?php
function inputAksesAnggotaBaru($Username, $Password){
  include 'koneksi.php';
  
$ID_Akses = array("AK001", "AK002", "AK003", "AK004", "AK005", "AK006", "AK007", "AK008", "AK009", "AK010",
"AK011", "AK012", "AK013", "AK014", "AK015", "AK016", "AK017", "AK018", "AK019", "AK020", "AK021", "AK022");
    
  for($i=0 ; $i<22; $i++){
    $queryGetIDAkses = mysqli_query($koneksi, "SELECT * FROM akses WHERE ID_Akses = '$ID_Akses[$i]'");
    $cekGetIDAkses = mysqli_num_rows($queryGetIDAkses);
    $dataIDAkses = mysqli_fetch_array($queryGetIDAkses);
    if($dataIDAkses == 0){
      $NewID = $ID_Akses[$i];
    }else{

    }
  }

  // while($dataIDAkses = mysqli_fetch_array($queryGetIDAkses)){
  //     $data = array($dataIDAkses);
  //     for($i=0 ; $i<22; $i++){
  //       echo $ID_Akses[$i];
  //         if($ID_Akses[$i] != $dataIDAkses['ID_Akses']){
  //             $_POST['ID_Akses'] = $ID_Akses[$i];
  //         }
  //     }
  // }  
  // $ID_Akses = $_POST['ID_Akses'];

  // $queryGetID = mysqli_query($koneksi, "SELECT COUNT(ID_Akses) as CountID FROM akses");
  // while($data = mysqli_fetch_array($queryGetID)){
  //     if($data['CountID'] < 9){
  //       $ID_Akses="AK00".strval($data['CountID'] + 1);
  //     }else if($data['CountID'] >= 9){
  //       $ID_Akses="AK0".strval($data['CountID'] + 1);
  //     }else{
  //       $ID_Akses="AK".strval($data['CountID'] + 1);
  //     }
  // }

  $queryAksesBaru = "INSERT INTO akses VALUES ('$NewID', '$Username', '$Password')";
  $result = mysqli_query($koneksi, $queryAksesBaru);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
      " - ".mysqli_error($koneksi));
  }

}
?>