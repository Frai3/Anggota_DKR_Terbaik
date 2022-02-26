<?php
if (!isset($_SESSION)) {
    session_start();
    if($_SESSION['Nama_Role'] != 'administrator'){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}
$username = $_SESSION['Username'];
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>

    body {
        background-image: url('gambar/Background.PNG');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .wrapperCard {
    position: absolute;
    width: 393px;
    height: 700px;
    left: 40%;
    top: 30%;
    background: #C4C4C4;
    border-radius: 50px;
    }

    </style>
    </head>

    <body>
        <div class='font'>
            <div class='col-9'>
                <p>Dewan Kerja Ranting <br /> Kelapa Dua</p>
            </div>
            <div class='col-3'>
                <img src='gambar/DKR.PNG' />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="wrapperCard">
                    <p class="judul">Administrator</p>
                    <a href="formRegister" class="btn wrapperButton" style="height: 70px; left: 18%; top: 20%">Registrasi</a>
                    <a href="formNilai"class="btn wrapperButton" style="height: 70px; left: 18%; top: 40%">Nilai</a>
                    <a href="formEditData" class="btn wrapperButton" style="height: 70px; left: 18%; top: 60%">Edit Data</a>
                    <a href="formTambahPoinNilai" class="btn wrapperButton" style="height: 70px; left: 18%; top: 80%">Poin Nilai</a>
                </div>
            </div>
            <a href="logout.php" class="btn btnDark btn-dark" id='btnLogout'>Logout</a>
        </div>
    </body> 
</html>