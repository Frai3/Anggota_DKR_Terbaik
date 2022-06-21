<?php
include 'class.php';
include 'getNilai.php';
$Periode = date('Y');
include 'koneksi.php';

$queryGetPoinNilai = mysqli_query($koneksi, "SELECT * FROM poinnilai");
$cekGetPoinNilai = mysqli_num_rows($queryGetPoinNilai);
$Poin = array();
$DataPoin = array();

while($row = mysqli_fetch_assoc($queryGetPoinNilai)){
    $Poin[] = $row;
}

getPenilaianKN002($koneksi, $Periode);
$DataPoin = $_POST['DataPoin'];

for($i=0; $i<count($Poin); $i++){
    if($i != 0){
        $arr = array_merge($DataPoin[$i], $arr);
    }else{
        $arr = $DataPoin[$i];
    }
}

$obj_baru = new array_object();

$test = 0;
$ubah_objek = $obj_baru->arrayKeObject($arr);
$ubah_array = $obj_baru->objectKeArray($ubah_objek);
foreach ($ubah_array as $kolom_arr=>$isi_arr)
{   
    
    $pow = pow($isi_arr,2);
    $test = $test + $pow;
    echo '<br />'.$isi_arr.$kolom_arr;
    $TJPeran = SQRT(POW($test,2));
}
$sqrt = sqrt($test);
echo $sqrt;

$queryGetPoinNilai = mysqli_query($koneksi, "SELECT PoinNilai, Persentase FROM poinnilai GROUP BY PoinNilai ASC");
$cekGetPoinNilai = mysqli_num_rows($queryGetPoinNilai);
$Poin = array();
$DataPoin = array();

foreach ($ubah_array as $kolom_arr=>$isi_arr)
  
    $normalisasi[$kolom_arr] = $ubah_array[$kolom_arr]/$sqrt;
    // echo '<br />'.$normalisasi[$kolom_arr]*0.2;
    // echo $kolom_arr;
$PoinNilai = array();
$Persentase = array();
while($row = mysqli_fetch_assoc($queryGetPoinNilai)){
    $PoinNilai[] = $row['PoinNilai'];
    $Persentase[] =$row['Persentase'];
    $newArr = array_merge($PoinNilai, $Persentase);
}

print_r($newArr);
    // $Poin[] = $row;

    echo '<br /><br />'.$row['PoinNilai'].' '.$isi_arr;
    if($kolom_arr==$row['PoinNilai']){
        echo '<br />'.$normalisasi[$kolom_arr]*$row['Persentase'];
    }else{
        echo "Hello";
    }

       for($i=0; $i<count($Poin); $i++){
    if($i != 0){
        $arr = array_merge($DataPoin[$i], $arr);
    }else{
        $arr = $DataPoin[$i];
    }
}

?>