<?php 

session_start();

include 'koneksi.php';
include 'inputNilai.php';

// $Username = $_SESSION['Username'];
$ID_User = $_SESSION['ID_User'];

//Mengambil data dari form login
$Nama_User = $_GET['cmbNama'];
$TJPeran = $_GET['TJPeran'];
$TepatHadir = $_GET['TepatHadir'];
$Keaktifan = $_GET['Keaktifan'];
$Inisiatif = $_GET['Inisiatif'];
$Sikap = $_GET['Sikap'];
$Komunikasi = $_GET['Komunikasi'];
$Periode = date('Y');

// // Mengambil data ID_User yang Dinilai
// if($_SESSION['Kode'] == 'Administrator'){
// 	$queryGetIDIn = mysqli_query($koneksi, "SELECT ID_Admin FROM administrator WHERE Nama_User='$ID_User';");
// 	while($data = mysqli_fetch_array($queryGetIDIn)){
//     	$ID_UserIn = $data['ID_User'];
// 	}
// }

//Mengambil data ID_User Penilai
$queryGetIDOut = mysqli_query($koneksi, "SELECT ID_Admin FROM administrator WHERE Nama_User='$Nama_User';");
$data = mysqli_fetch_array($queryGetIDOut);

if($data > 0){
	$ID_UserOut = $data['ID_Admin'];
}else{
	$queryGetIDOut = mysqli_query($koneksi, "SELECT ID_Anggota FROM anggota WHERE Nama_User='$Nama_User';");
	$data = mysqli_fetch_array($queryGetIDOut);
	$ID_UserOut = $data['ID_Anggota'];
}

if($Nama_User == "" or $TJPeran == "" or $TepatHadir=="" or $Keaktifan=="" or $Inisiatif=="" or $Sikap=="" or $Komunikasi==""){
	echo "<script>
		alert('Masukkan Data Dengan Lengkap!');
		window.location='formNilai'
		</script>";
}elseif($Nama_User > 100 or $TJPeran > 100 or $TepatHadir > 100 or $Keaktifan > 100 or $Inisiatif > 100 or $Sikap > 100 or $Komunikasi > 100){
	echo "<script>
		alert('Penilaian melebihi 100!');
		window.location='formNilai'
		</script>";
}else{
	$queryGetID = mysqli_query($koneksi, "SELECT ID_Nilai FROM nilai WHERE ID_UserIn='$ID_User' AND ID_UserOut='$ID_UserOut'");
	$data = mysqli_fetch_array($queryGetID);
	if($data <= 0){
		inputNilai($ID_User, $ID_UserOut, $TJPeran, $TepatHadir, $Keaktifan, $Inisiatif, $Sikap, $Komunikasi, $Periode);
		if($_SESSION['Kode'] == 'Administrator'){
			echo "<script>alert('Data Berhasil Ditambahkan!');
			window.location='indexAdministrator';
			</script>";
		  }else if($_SESSION['Kode'] == 'Anggota'){
			echo "<script>alert('Data Berhasil Ditambahkan!');
			window.location='indexUser';
			</script>";
		  }
	}else{
		echo "<script>alert('Hai, Data ".$Nama_User." Sudah Ditambahkan! Harap Masukkan Nama yang Lain');
		window.location='formNilai';
		</script>";
	}
}

?>