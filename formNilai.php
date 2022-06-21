<?php

include 'koneksi.php';

if (!isset($_SESSION)) {
    session_start();
    if(empty($_SESSION['Kode'])){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}

$ID_User = $_SESSION['ID_Akses'];
$Kandidat = $_GET['kandidat'];
$Periode = date('Y');

$queryGetNilai = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_User = '$ID_User' AND ID_Kandidat = '$Kandidat' AND Periode = '$Periode';");
$cekGetNilai = mysqli_num_rows($queryGetNilai);
$dataNilai = mysqli_fetch_array($queryGetNilai);

$queryGetKandidat = mysqli_query($koneksi, "SELECT * FROM kandidat WHERE ID_User = '$ID_User' AND Periode = '$Periode';");
$cekGetKandidat = mysqli_num_rows($queryGetKandidat);
$dataKandidat = mysqli_fetch_array($queryGetKandidat);

if($dataNilai > 0){
    echo "<script>alert('Data Sudah Ditambahkan! Harap Nilai Kandidat Lain!');
        window.location='formKandidat.php';
        </script>";
}elseif ($dataKandidat > 0) {
    echo "<script>alert('Maaf, Anda tidak bisa menilai diri sendiri! Harap Nilai Kandidat Lain!');
        window.location='formKandidat.php';
        </script>";
}

$queryGetNamaAdmin = mysqli_query($koneksi, "SELECT Nama_User FROM administrator ad, kandidat ka WHERE ID_Kandidat = '$Kandidat' AND ka.ID_User = ad.ID_Akses");
$cekGetNamaAdmin = mysqli_num_rows($queryGetNamaAdmin);
$dataNamaAdmin = mysqli_fetch_array($queryGetNamaAdmin);

$queryGetNamaAnggota = mysqli_query($koneksi, "SELECT Nama_User FROM anggota ag, kandidat ka WHERE ID_Kandidat = '$Kandidat' AND ka.ID_User = ag.ID_Akses");
$cekGetNamaAnggota = mysqli_num_rows($queryGetNamaAnggota);
$dataNamaAnggota = mysqli_fetch_array($queryGetNamaAnggota);

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
            <p class="font">Penilaian</p>
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
                <div class="p-5">
                    <form action="inputNilaiProses" method="get">
                        <div class="form-group">
                            <label for="Nama_User">Nama</label>
                            <?php
                                if($dataNamaAdmin > 0){
                                    echo '<input type="text" class="form-control" name="Nama_User" value="'.$dataNamaAdmin['Nama_User'].'" readonly>';
                                }elseif($dataNamaAnggota > 0){
                                    echo '<input type="text" class="form-control" name="Nama_User" value="'.$dataNamaAnggota['Nama_User'].'" readonly>';
                                }
                            ?>
                        </div>
                        <?php

                        $queryGetPoinNilai = mysqli_query($koneksi, "SELECT * FROM poinnilai");
                        $cekGetPoinNilai = mysqli_num_rows($queryGetPoinNilai);

                        while($dataPoinNilai = mysqli_fetch_array($queryGetPoinNilai)){
                        ?>
                        
                        <div class="form-group">
                            <label><input type="text" class="form-control" name="PoinNilai[]" value="<?php echo $dataPoinNilai['PoinNilai']; ?>" readonly></label>
                            <input type="hidden" class="form-control" name="Kandidat" value="<?php echo $Kandidat; ?>">
                            <input type="text" class="form-control" name="nilai[]">
                        </div>

                        <?php

                        }

                        ?>
                        <input type="submit" name="input" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <br />
    <br />
</body> 
</html>