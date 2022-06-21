<?php
if (!isset($_SESSION)) {
    session_start();
    if(empty($_SESSION['Kode'])){
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
            <p class="font">Kandidat</p>
        </div>
        <div class="col-6 d-flex justify-content-end p-5">
             <img src='gambar/DKR.PNG'  style="width: 200px;"/>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="formNilai?kandidat=KN001">
                        <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                            <div class="card-body text-center">
                                <h2 class="card-title p-5">Kandidat 1</h2>
                                <img src="gambar/faceIcon.png" width="400">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="formNilai?kandidat=KN002">
                        <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                            <div class="card-body text-center">
                                <h2 class="card-title p-5">Kandidat 2</h2>
                                <img src="gambar/faceIcon.png" width="400">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
 </body> 
</html>