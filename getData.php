 <?php

 	function getData($ID_User){
	 	include 'koneksi.php';
		
	    $queryEditData = mysqli_query($koneksi, "SELECT * FROM administrator WHERE ID_Admin = '$ID_User'");
		$data = mysqli_fetch_array($queryEditData);
		if($data > 0){
			$_POST['ID_User'] = $data['ID_Admin'];
			$_POST['Nama_User'] = $data['Nama_User'];
			$_POST['Sekolah'] = $data['Sekolah'];
			$_POST['NoTelp'] = $data['NoTelp'];
			$_POST['Golongan'] = $data['Golongan'];
		}else{
			$queryEditData = mysqli_query($koneksi, "SELECT * FROM anggota WHERE ID_Anggota= '$ID_User'");
			$data = mysqli_fetch_array($queryEditData);
			
			$_POST['ID_User'] = $data['ID_Anggota'];
			$_POST['Nama_User'] = $data['Nama_User'];
			$_POST['Sekolah'] = $data['Sekolah'];
			$_POST['NoTelp'] = $data['NoTelp'];
			$_POST['Golongan'] = $data['Golongan'];
		}
	}

?>