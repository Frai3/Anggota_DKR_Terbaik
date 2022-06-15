<?php
if (!isset($_SESSION)) {
    session_start();
    if($_SESSION['Kode'] != 'Administrator'){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}
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
            <p class="font">Dewan Kerja Ranting <br /> Kelapa Dua</p>
        </div>
        <div class="col-5 d-flex justify-content-end p-5">
             <img src='gambar/DKR.PNG'  style="width: 200px;"/>
        </div>
        <div class="col-2">
        </div>
    </div>
    
    <div class="container pt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 bg-secondary" style="border-radius: 10px">
                <h2 class="pt-5 text-center text-white">Administrator</h2>
                <div class="p-5">
                    <a href="formRegister" class="p-3 nav justify-content-center btn btn-dark btnIndex">
                    Registrasi
                    </a>
                    <br />
                    <a href="formNilai" class="p-3 nav justify-content-center btn btn-dark btnIndex">
                    Nilai
                    </a>
                    <br />
                    <a href="formEditData" class="p-3 nav justify-content-center btn btn-dark btnIndex">
                    Edit Data
                    </a>
                    <br />
                    <a href="formTambahPoinNilai" class="p-3 nav justify-content-center btn btn-dark btnIndex">
                    Poin Nilai
                    </a>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
        <br />
        <br />
        <a href="logout" class="p-3 btnIndex btn btn-dark">Logout</a>
    </div>
    <br />
    <br />
</body> 
</html>