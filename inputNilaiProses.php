<?php 

session_start();

include 'koneksi.php';
include 'inputNilai.php';


// $Username = $_SESSION['Username'];
$ID_UserIn = $_SESSION['ID_Akses'];
$Nilai = $_GET['nilai'];
$ID_PoinNilai = $_GET['ID_PoinNilai'];
$Kandidat = $_GET['Kandidat'];
$PoinNilai = $_GET['PoinNilai'];
$Periode = date('Y');

for($i = 0; $i < 6; $i++){
	if(empty($Nilai[$i])){
		echo "<script>
	 			alert('Harap Nilai Semua Poin Penilaian!');
	 			window.location='formNilai?kandidat=".$Kandidat."'
	 			</script>";
	}elseif($Nilai[$i]>100){
		echo "<script>
	 			alert('Harap Beri Penilaian 0 - 100!');
	 			window.location='formNilai?kandidat=".$Kandidat."'
	 			</script>";
	}else{
		inputNilai($Kandidat, $ID_PoinNilai[$i], $ID_UserIn, $Nilai[$i], $Periode);
		echo "<script>alert('Data Berhasil Ditambahkan!');
		window.location='formKandidat';
		</script>";
	}
}
// //Mengambil data dari form login
// $Nama_User = $_GET['cmbNama'];
// $TJPeran = $_GET['TJPeran'];
// $TepatHadir = $_GET['TepatHadir'];
// $Keaktifan = $_GET['Keaktifan'];
// $Inisiatif = $_GET['Inisiatif'];
// $Sikap = $_GET['Sikap'];
// $Komunikasi = $_GET['Komunikasi'];
// $Periode = date('Y');

// // // Mengambil data ID_User yang Penilai
// // if($_SESSION['Kode'] == 'Administrator'){
// // 	$queryGetIDIn = mysqli_query($koneksi, "SELECT ID_Admin FROM administrator WHERE Nama_User='$ID_User';");
// // 	while($data = mysqli_fetch_array($queryGetIDIn)){
// //     	$ID_UserIn = $data['ID_User'];
// // 	}
// // }

// //Mengambil data ID_User Dinilai
// $queryGetIDOut = mysqli_query($koneksi, "SELECT ID_Akses FROM administrator WHERE Nama_User='$Nama_User';");
// $data = mysqli_fetch_array($queryGetIDOut);

// if($data > 0){
// 	$ID_UserOut = $data['ID_Akses'];
// }else{
// 	$queryGetIDOut = mysqli_query($koneksi, "SELECT ID_Akses FROM anggota WHERE Nama_User='$Nama_User';");
// 	$data = mysqli_fetch_array($queryGetIDOut);
// 	$ID_UserOut = $data['ID_Akses'];
// }

// $queryGetID = mysqli_query($koneksi, "SELECT ID_Nilai FROM nilai WHERE ID_UserIn='$ID_UserIn' AND ID_UserOut='$ID_UserOut'");
// $data = mysqli_fetch_array($queryGetID);

// if($data <= 0){
// 	if($Nama_User == "" or $TJPeran == "" or $TepatHadir=="" or $Keaktifan=="" or $Inisiatif=="" or $Sikap=="" or $Komunikasi==""){
// 		echo "<script>
// 			alert('Masukkan Data Dengan Lengkap!');
// 			window.location='formNilai'
// 			</script>";
// 	}elseif($Nama_User > 100 or $TJPeran > 100 or $TepatHadir > 100 or $Keaktifan > 100 or $Inisiatif > 100 or $Sikap > 100 or $Komunikasi > 100){
// 		echo "<script>
// 			alert('Penilaian melebihi 100! Harap masukkan nilai 0 - 100');
// 			window.location='formNilai'
// 			</script>";
// 	}else{
// 		inputNilai($ID_UserIn, $ID_UserOut, $TJPeran, $TepatHadir, $Keaktifan, $Inisiatif, $Sikap, $Komunikasi, $Periode);
// 		if($_SESSION['Kode'] == 'Administrator'){
// 			echo "<script>alert('Data Berhasil Ditambahkan!');
// 			window.location='indexAdministrator';
// 			</script>";
// 		}else{
// 			echo "<script>alert('Data Berhasil Ditambahkan!');
// 			window.location='indexUser';
// 			</script>";
// 		}
// 	}
// }else{
// echo "<script>alert('Hai, Data ".$Nama_User." Sudah Ditambahkan! Harap Masukkan Nama yang Lain');
// window.location='formNilai';
// </script>";
// }

?>