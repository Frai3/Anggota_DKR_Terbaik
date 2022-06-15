 <?php

 	function editData($ID_User, $Nama_User, $Sekolah, $NoTelp, $Golongan){
	 	include 'koneksi.php';
		$tabel = strtolower($_SESSION['Kode']);
		$tgl = date("Y-m-d");

		if($_SESSION['Kode'] == "Administrator"){
			//buat dan jalankan query UPDATE administrator
			$query  = "UPDATE administrator SET ";
			$query .= "Nama_User = '$Nama_User',";
			$query .= "Sekolah = '$Sekolah',";
			$query .= "NoTelp = '$NoTelp',";
			$query .= "Golongan = '$Golongan',";
			$query .= "TglUpdate = '$tgl'";
			$query .= "WHERE ID_Admin = '$ID_User'";
			$result = mysqli_query($koneksi, $query);
		}else{
			//buat dan jalankan query UPDATE administrator
			$query  = "UPDATE anggota SET ";
			$query .= "Nama_User = '$Nama_User',";
			$query .= "Sekolah = '$Sekolah',";
			$query .= "NoTelp = '$NoTelp',";
			$query .= "Golongan = '$Golongan',";
			$query .= "TglUpdate = '$tgl'";
			$query .= "WHERE ID_Anggota = '$ID_User'";
			$result = mysqli_query($koneksi, $query);
		}
		
		//periksa hasil query apakah ada error
		if(!$result) {
			die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
			" - ".mysqli_error($koneksi));
		}
	}

?>