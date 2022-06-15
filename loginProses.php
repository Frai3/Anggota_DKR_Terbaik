<?php 

session_start();

include 'koneksi.php';
include 'cekLogin.php';

//Mengambil data dari form login
$Username = $_GET['username'];
$Password = $_GET['password'];

if($Username == "" and $Password == ""){
	echo "<script>
		alert('Username dan Password Tidak Diisi!');
		window.location='login'
		</script>";
}
elseif($Username == ""){
	echo "<script>
		alert('Username Tidak Diisi!');
		window.location='login'
		</script>";
}
elseif($Password == ""){
	echo "<script>
		alert('Password Tidak Diisi!');
		window.location='login'
		</script>";
}
else{
	//Jalanin fungsi di cekLogin
	cek_login($Username, $Password);
	$Kode = $_SESSION['Kode'];
	if($Kode == 'Administrator'){
		echo "<script>alert('Selamat Datang !');
		window.location='indexAdministrator';
		</script>";
	}elseif($Kode == 'Anggota'){
		echo "<script>alert('Selamat Datang !');
		window.location='indexUser';
		</script>";
	}
}

?>