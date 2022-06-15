<?php

function cek_login($username, $password){

	include 'koneksi.php';

	// $cekDatabaseUser = mysqli_query($koneksi, "select a.Username, a.Password, r.Nama_Role, u.ID_User from akses a, role r, user u where a.username='$username' and a.password='$password' and a.ID_Role = r.ID_Role and u.ID_Akses = a.ID_Akses");
	$cekDatabaseLogin = mysqli_query($koneksi, "SELECT ID_Akses, Username FROM akses WHERE Username='$username' AND Password = '$password'");
	$cekLogin = mysqli_num_rows($cekDatabaseLogin);

	if($cekLogin > 0){

		$dataLogin = mysqli_fetch_array($cekDatabaseLogin);

		$ID_Akses = $dataLogin['ID_Akses'];

		$cekDatabaseAdmin = mysqli_query($koneksi, "SELECT ID_Admin, Nama_User FROM administrator WHERE ID_Akses = '$ID_Akses'");
		$cekAdmin = mysqli_num_rows($cekDatabaseAdmin);

		$cekDatabaseAnggota = mysqli_query($koneksi, "SELECT ID_Anggota, Nama_User FROM anggota WHERE ID_Akses = '$ID_Akses'");
		$cekAnggota = mysqli_num_rows($cekDatabaseAnggota);

		if($cekAdmin > 0){
			$dataAdmin = mysqli_fetch_array($cekDatabaseAdmin);
			$_SESSION['ID_User'] = $dataAdmin['ID_Admin'];
			$_SESSION['Kode'] = "Administrator";
			$_SESSION['Nama_User'] = $dataAdmin['Nama_User'];
		}elseif ($cekAnggota > 0) {
			$dataAnggota = mysqli_fetch_array($cekDatabaseAnggota);
			$_SESSION['ID_User'] = $dataAnggota['ID_Anggota'];
			$_SESSION['Kode'] = "Anggota";
			$_SESSION['Nama_User'] = $dataAnggota['Nama_User'];
		}
		
	}else{
		echo "<script>
		alert('Maaf Anda Tidak Memiliki Akses!');
		window.location='login';
		</script>";
	}
}

?>