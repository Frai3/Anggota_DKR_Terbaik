 <?php

 	function editData($ID_User, $Nama_User, $Sekolah, $NoTelp, $Golongan){
	 	include 'koneksi.php';
		
		//buat dan jalankan query UPDATE
		$query  = "UPDATE user SET ";
		$query .= "Nama_User = '$Nama_User',";
		$query .= "Sekolah = '$Sekolah',";
		$query .= "NoTelp = '$NoTelp',";
		$query .= "Golongan = '$Golongan'";
		$query .= "WHERE ID_User = '$ID_User'";
		$result = mysqli_query($koneksi, $query);
		
		//periksa hasil query apakah ada error
		if(!$result) {
			die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
			" - ".mysqli_error($koneksi));
		}
	}

?>