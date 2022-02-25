 <?php

 	function getNama($username){
	 	include 'koneksi.php';

	    $queryEditData = mysqli_query($koneksi, "SELECT * FROM `user` WHERE Nama_User <> '$username'");
		while($data = mysqli_fetch_array($queryEditData)){
			$_POST['ID_User'] = $data['ID_User'];
			$_POST['Nama_User'] = $data['Nama_User'];
			$_POST['Sekolah'] = $data['Sekolah'];
			$_POST['NoTelp'] = $data['NoTelp'];
			$_POST['Golongan'] = $data['Golongan'];
		}
	}

?>