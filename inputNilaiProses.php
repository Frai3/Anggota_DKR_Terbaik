<?php 

session_start();

include 'koneksi.php';
include 'inputNilai.php';

$Username = $_SESSION['Username'];

//Mengambil data dari form login
$Nama_User = $_GET['cmbNama'];
$TJPeran = $_GET['TJPeran'];
$TepatHadir = $_GET['TepatHadir'];
$Keaktifan = $_GET['Keaktifan'];
$Inisiatif = $_GET['Inisiatif'];
$Sikap = $_GET['Sikap'];
$Komunikasi = $_GET['Komunikasi'];
$Periode = date('Y');

//Mengambil data ID_User yang Dinilai
$queryGetIDIn = mysqli_query($koneksi, "SELECT ID_User FROM user WHERE Nama_User='$Nama_User'");
while($data = mysqli_fetch_array($queryGetIDIn)){
    $ID_UserIn = $data['ID_User'];
}

//Mengambil data ID_User Penilai
$queryGetIDOut = mysqli_query($koneksi, "SELECT ID_User FROM user u, akses a WHERE Username='$Username' AND a.ID_Akses = u.ID_Akses");
while($data = mysqli_fetch_array($queryGetIDOut)){
    $ID_UserOut = $data['ID_User'];
}

if($Nama_User == "" or $TJPeran == "" or $TepatHadir=="" or $Keaktifan=="" or $Inisiatif=="" or $Sikap=="" or $Komunikasi==""){
	echo "<script>
		alert('Masukkan Data Dengan Lengkap!');
		window.location='formNilai'
		</script>";
}	
else{
	$queryGetID = mysqli_query($koneksi, "SELECT ID_Nilai FROM nilai WHERE ID_UserIn='$ID_UserIn' AND ID_UserOut='$ID_UserOut'");
	$data = mysqli_fetch_array($queryGetID);
	if($data <= 0){
		inputNilai($ID_UserIn, $ID_UserOut, $TJPeran, $TepatHadir, $Keaktifan, $Inisiatif, $Sikap, $Komunikasi, $Periode);
		if($_SESSION['Nama_Role'] == 'administrator'){
			echo "<script>alert('Data Berhasil Dirubah!');
			window.location='indexAdministrator';
			</script>";
		  }else if($_SESSION['Nama_Role'] == 'user'){
			echo "<script>alert('Data Berhasil Dirubah!');
			window.location='indexUser';
			</script>";
		  }
	}else{
		echo "<script>alert('Hai ".ucfirst($Username).", Data ".$Nama_User." Sudah Ditambahkan! Harap Masukkan Nama yang Lain');
		window.location='formNilai';
		</script>";
	}
}

?>