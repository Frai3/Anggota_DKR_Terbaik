<?php 

session_start();

include 'koneksi.php';
include '../model/cekLogin.php';

//Mengambil data dari form login
$Username = $_GET['username'];
$Password = $_GET['password'];

if($Username == "" and $Password == ""){
	echo "<script>
		alert('Username dan Password Tidak Diisi!');
		window.location='../view/login.php'
		</script>";
}
elseif($Username == ""){
	echo "<script>
		alert('Username Tidak Diisi!');
		window.location='../view/login.php'
		</script>";
}
elseif($Password == ""){
	echo "<script>
		alert('Password Tidak Diisi!');
		window.location='../view/login.php'
		</script>";
}
else{
	//Jalanin fungsi di cekLogin
	cek_login($Username, $Password);
	$Username = $_SESSION['Username'];
	if($_SESSION['Nama_Role'] == 'administrator'){
		echo "<script>alert('Selamat Datang ".ucfirst($Username)."!');
		window.location='../view/indexAdministrator.php';
		</script>";
	}elseif($_SESSION['Nama_Role'] == 'user'){
		echo "<script>alert('Selamat Datang ".ucfirst($Username)."!');
		window.location='../view/indexUser.php';
		</script>";
	}
}

?>