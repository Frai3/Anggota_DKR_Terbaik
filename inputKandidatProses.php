<?php
    include 'koneksi.php';

    $ID_Kandidat = array("KN001", "KN002");
    $Nama_Kandidat = $_GET['Nama'];
    $Periode = date('Y');

    for($i=0 ; $i<2; $i++){
        $queryGetIDKandidat= mysqli_query($koneksi, "SELECT * FROM kandidat WHERE ID_Kandidat = '$ID_Kandidat[$i]'");
        $cekGetIDKandidat = mysqli_num_rows($queryGetIDKandidat);
        $dataIDKandidat = mysqli_fetch_array($queryGetIDKandidat);
        if($dataIDKandidat == 0){
            $NewID = $ID_Kandidat[$i];
        }else{

        }
    }
    
    $queryGetID = mysqli_query($koneksi, "SELECT ID_Akses FROM administrator WHERE Nama_User = '$Nama_Kandidat'");
    $data = mysqli_fetch_array($queryGetID);
    if($data > 0){
        $ID_User = $data['ID_Akses'];
    }else{
        $queryGetID = mysqli_query($koneksi, "SELECT ID_Akses FROM anggota WHERE Nama_User = '$Nama_Kandidat'");
        $data = mysqli_fetch_array($queryGetID);

        $ID_User = $data['ID_Akses'];
    }

    $queryKandidatBaru = "INSERT INTO kandidat VALUES ('$NewID', '$ID_User', '$Periode')";
    $result = mysqli_query($koneksi, $queryKandidatBaru);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }else{
        echo "<script>alert('Data Kandidat Berhasil Ditambahkan!');
        window.location='formKandidatBaru';
        </script>";
    }


?>