<?php
if (!isset($_SESSION)) {
    session_start();
    if($_SESSION['Kode']!="Administrator"){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}

include 'koneksi.php';
// $Periode = '2023';
$Periode = date('Y');

$queryGetCountKandidat = mysqli_query($koneksi, "SELECT Count(ID_Kandidat) as ID FROM kandidat WHERE Periode = '$Periode';");
$cekGetCountKandidat = mysqli_num_rows($queryGetCountKandidat);
$dataCountKandidat = mysqli_fetch_array($queryGetCountKandidat);

if($dataCountKandidat['ID'] == 2){
    echo "<script>alert('Kandidat pada tahun ini sudah ditentukan!');
        window.location='indexAdministrator';
        </script>";
}

$queryGetKandidat = mysqli_query($koneksi, "SELECT ID_User as ID FROM kandidat WHERE Periode = '$Periode';");
$cekGetKandidat = mysqli_num_rows($queryGetKandidat);
$dataKandidat = mysqli_fetch_array($queryGetKandidat);
if($dataKandidat > 0){
    $ID_User = $dataKandidat['ID'];
}else{
    $ID_User = "";
}

$anggota = array();
$queryGetAnggota= mysqli_query($koneksi, "SELECT * FROM anggota WHERE MasaBakti > '$Periode' AND ID_Akses <> '$ID_User';");
while($dataAnggota = mysqli_fetch_array($queryGetAnggota)){
    $anggota[] = $dataAnggota['Nama_User'];
}

$admin = array();
$queryGetAdmin= mysqli_query($koneksi, "SELECT * FROM administrator WHERE MasaBakti > '$Periode' AND ID_Akses <> '$ID_User';");
while($dataAdmin = mysqli_fetch_array($queryGetAdmin)){
    $admin[] = $dataAdmin['Nama_User'];
}

$Nama_user = array_merge($admin, $anggota);
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome dan CSS Bootstrap -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Title dan Gambar di Halaman File -->
    <link rel="icon" href="gambar/DKR.png">
    <title>DKR Kelapa Dua</title>

</head>

<body>
    <div class="row">
        <div class="col-5">
            <p class="font">Registrasi Kandidat</p>
        </div>
        <div class="col-5 d-flex justify-content-end p-5">
             <img src='gambar/DKR.png'  style="width: 200px;"/>
        </div>
        <div class="col-2">
    </div>
    
    <div class="container pt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="border-radius: 10px; background-color: #FA8072;">
                <h2 class="pt-5 text-center text-white">Kandidat</h2>
                <div class="p-5">
                    <form action="inputKandidatProses" method="get">
                    <div class="form-group">
                            <label for="Nama">Nama</label>
                            <select style="width: 100%" name="Nama">
                                <?php
                                $pilihan = $Nama_user;
                                foreach ($pilihan as $nilai) {
                                    if ($dataLevel==$nilai) {
                                        $cek=" selected";
                                    } else {
                                        $cek = "";
                                    }
                                    echo "<option value='$nilai'  $cek>$nilai</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="input" value="Submit" class="btn btn-primary">Input</button>
                    </form>
                </div>
            </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <br />
    <br />
</body> 
</html>