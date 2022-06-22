<?php

include 'koneksi.php';
include 'editPoinProses.php';

//Get data dari form
$ID_PoinNilai = $_POST['ID_PoinNilai'];
$PoinNilai = $_POST['PoinNilai'];
$Persentase = $_POST['Persentase'];
$Periode = date('Y');
$jmlhData = Count($PoinNilai);

for($i = 0; $i<$jmlhData; $i++){
			
	if($i == 0){
		$result = $Persentase[$i];
	}else{
		$result = $result + $Persentase[$i];
	}

}

if($result > 100){
	echo "<script>alert('Persentase ".$result."%! Harap kurangi poin penilaian!');
		window.location='formTambahPoinNilai';
		</script>";
}elseif($result < 100){
	echo "<script>alert('Persentase ".$result."%! Harap tambahkan poin penilaian!');
		window.location='formTambahPoinNilai';
		</script>";
}else{
	for($i = 0; $i<$jmlhData; $i++){
		editPoinNilai($ID_PoinNilai[$i], $PoinNilai[$i], $Persentase[$i]/100);
	}
	echo "<script>alert('Data Berhasil Dirubah!');
	window.location='./indexAdministrator';
	</script>";
}

?>