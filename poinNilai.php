<?php

include 'koneksi.php';
include 'editPoinProses.php';
include 'inputPoinProses.php';

//Get data dari form
$PoinNilai = $_POST['PoinNilai'];
$Persentase = $_POST['Persentase'];
$PoinNilaiBaru = $_POST['poinNilaiBaru'];
$Periode = date('Y');
$jmlhData = Count($PoinNilai);

if(!empty($PoinNilaiBaru)){
	if(!empty($Persen = $_POST['persen'])){
		$Persen = $_POST['persen'];

		//Get function edit data dari edit poin
		for($i = 0; $i<$jmlhData; $i++){
			
			if($i == 0){
				$res = $Persentase[$i];
			}else{
				$res = $res + $Persentase[$i];
			}
		}

		$cekPersen = $res + $Persen;

		if($cekPersen > 100){
			echo "<script>alert('Persentase ".$cekPersen."%! Harap kurangi poin penilaian!');
			window.location='formTambahPoinNilai';
			</script>";
		}elseif($cekPersen < 100){
			echo "<script>alert('Persentase ".$cekPersen."%! Harap tambahkan poin penilaian!');
				window.location='formTambahPoinNilai';
				</script>";
		}else{
			for($i = 0; $i<$jmlhData; $i++){
				editPoinNilai($PoinNilai[$i], $Persentase[$i]/100);
			}
			$Persen = $_POST['persen']/100;
			inputNilaiBaru($PoinNilaiBaru, $Persen, $Periode);
		}
	}else{
		echo "<script>alert('Harap Masukkan Persentase Poin Penilaian Baru!');
			window.location='formTambahPoinNilai';
			</script>";
	}
	
}else{
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
			editPoinNilai($PoinNilai[$i], $Persentase[$i]/100);
		}
	}
}

// echo $res;
// echo "<script>alert('Data Berhasil Dirubah!');
// window.location='./';
// </script>";

?>