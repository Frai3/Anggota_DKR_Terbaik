<?php

function cek_login($username, $password){

	include '../controller/koneksi.php';

	$cekDatabaseUser = mysqli_query($koneksi, "select a.Username, a.Password, r.Nama_Role, u.ID_User from akses a, role r, user u where a.username='$username' and a.password='$password' and a.ID_Role = r.ID_Role and u.ID_Akses = a.ID_Akses");

	$cekAkses = mysqli_num_rows($cekDatabaseUser);

	if($cekAkses > 0){

		$data = mysqli_fetch_array($cekDatabaseUser);

		$_SESSION['Username'] = $data['Username'];
		$_SESSION['Nama_Role'] = $data['Nama_Role'];
		$_SESSION['ID_User'] = $data['ID_User'];
	}else{
		
		echo "<script>
		alert('Maaf Anda Tidak Memiliki Akses!');
		window.location='../view/login.php';
		</script>";
	}
}

?>