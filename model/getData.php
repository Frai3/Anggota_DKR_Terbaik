 <?php

 	function getData($Username){
	 	include '../controller/koneksi.php';
		
	    $queryEditData = mysqli_query($koneksi, "SELECT * FROM user u, akses a WHERE Username='$Username' and a.ID_Akses = u.ID_Akses");
		while($data = mysqli_fetch_array($queryEditData)){
			$_POST['ID_User'] = $data['ID_User'];
			$_POST['Nama_User'] = $data['Nama_User'];
			$_POST['Sekolah'] = $data['Sekolah'];
			$_POST['NoTelp'] = $data['NoTelp'];
			$_POST['Golongan'] = $data['Golongan'];
		}
	}

?>