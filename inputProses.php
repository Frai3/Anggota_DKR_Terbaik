<?php 

session_start();

include 'koneksi.php';
include 'inputAnggotaBaru.php';
include 'inputAkses.php';

//Mengambil data dari form login
$Nama_User = ucfirst($_GET['Nama_user']);
$Sekolah = $_GET['Sekolah'];
$NoTelp = $_GET['NoTelp'];
$Golongan = $_GET['cmbGolongan'];
$Username = $_GET['Username'];
$Password = $_GET['Password'];
$Nama_Role = strtolower($_GET['cmbRole']);

// //Mengambil data ID_Role
// $queryGetID = mysqli_query($koneksi, "SELECT ID_Role FROM role WHERE Nama_Role='$Nama_Role'");
// while($data = mysqli_fetch_array($queryGetID)){
//     $ID_Role = $data['ID_Role'];
// }

if($Nama_User == "" or $Sekolah == "" or $NoTelp=="" or $Golongan=="" or $Username=="" or $Password==""){
	echo "<script>
		alert('Masukkan Data Dengan Lengkap!');
		window.location='formRegister'
		</script>";
}
else{
	//Input akses terlebih dahulu
	inputAksesAnggotaBaru($Username, $Password);
	
	if($Nama_Role == "administrator"){
		inputAdminBaru($Nama_User, $Sekolah, $NoTelp, $Golongan, $Username);
	}else{
		inputAnggotaBaru($Nama_User, $Sekolah, $NoTelp, $Golongan, $Username);
	}	
	
	echo "<script>alert('Data Berhasil Ditambahkan!');
	 	window.location='indexAdministrator';
	 	</script>";
}

?>