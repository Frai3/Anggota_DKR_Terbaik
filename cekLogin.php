<?php

function cek_login($username, $password){

	include 'koneksi.php';

	// $cekDatabaseUser = mysqli_query($koneksi, "select a.Username, a.Password, r.Nama_Role, u.ID_User from akses a, role r, user u where a.username='$username' and a.password='$password' and a.ID_Role = r.ID_Role and u.ID_Akses = a.ID_Akses");
	$cekDatabaseLogin = mysqli_query($koneksi, "SELECT ID_Akses, Username FROM akses WHERE Username='$username' AND Password = '$password'");
	$cekLogin = mysqli_num_rows($cekDatabaseLogin);

	if($cekLogin > 0){

		$dataLogin = mysqli_fetch_array($cekDatabaseLogin);

		$MasaBakti = date('Y');
		// $MasaBakti = '2025';
		$ID_Akses = $dataLogin['ID_Akses'];

		$cekDatabaseAdmin = mysqli_query($koneksi, "SELECT * FROM administrator WHERE ID_Akses = '$ID_Akses' AND MasaBakti >= '$MasaBakti'");
		$cekAdmin = mysqli_num_rows($cekDatabaseAdmin);

		$cekDatabaseAnggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE ID_Akses = '$ID_Akses' AND MasaBakti >= '$MasaBakti'");
		$cekAnggota = mysqli_num_rows($cekDatabaseAnggota);

		if($cekAdmin > 0){
			$dataAdmin = mysqli_fetch_array($cekDatabaseAdmin);
			$_SESSION['ID_User'] = $dataAdmin['ID_Admin'];
			$_SESSION['ID_Akses'] = $dataAdmin['ID_Akses'];
			$_SESSION['Kode'] = "Administrator";
			$_SESSION['Nama_User'] = $dataAdmin['Nama_User'];
		}elseif ($cekAnggota > 0) {
			$dataAnggota = mysqli_fetch_array($cekDatabaseAnggota);
			$_SESSION['ID_User'] = $dataAnggota['ID_Anggota'];
			$_SESSION['ID_Akses'] = $dataAnggota['ID_Akses'];
			$_SESSION['Kode'] = "Anggota";
			$_SESSION['Nama_User'] = $dataAnggota['Nama_User'];
		}else{
			echo "<script>
			alert('Maaf Anda Tidak Memiliki Akses!');
			window.location='login';
			</script>";
		}
		
	}else{
		echo "<script>
		alert('Maaf Anda Tidak Memiliki Akses!');
		window.location='login';
		</script>";
	}
}

?>