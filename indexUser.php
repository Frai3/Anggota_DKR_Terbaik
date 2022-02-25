<?php
if (!isset($_SESSION)) {
    session_start();
    if($_SESSION['Nama_Role'] != 'user'){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>

    body {
        background-image: url('gambar/loginBackground.PNG');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .wrapperCard {
        position: absolute;
        width: 393px;
        height: 539px;
        left: 40%;
        top: 28%;

        background: #C4C4C4;
        border-radius: 50px;
    }

    .wrapperButton{
        position: absolute;
        width: 260px;
        background: #FC5858;
        border-radius: 10px;
        height: 40px;

        font-family: Kalam;
        font-style: normal;
        font-weight: bold;
        font-size: 30pt;
        line-height: 130%;
        text-align: center;
        color: black;
        border: 3px solid #212121;
        text-shadow: 0px 4px 40px rgba(255, 255, 255, 0.4);
    }

    .judul{
        position: absolute;
        width: 279px;
        height: 45px;
        left: 15%;
        top: 10%;

        font-family: Kalam;
        font-style: normal;
        font-weight: bold;
        font-size: 45px;
        line-height: 110%;
        text-align: center;

        text-shadow: 0px 4px 40px rgba(255, 255, 255, 0.4);
    }

    .btnDark{
        position: absolute;
        height: 60px;
        width: 150px;
        left: 85%;
        top: 90%;
        line-height: 300%;
        text-align: center;
        color: black;
        font-family: Kalam;
        font-style: normal;
        font-weight: bold;
        background: #FC5858;
        border-radius: 10px;
    }

    </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="wrapperCard">
                    <p class="judul">User</p>
                    <a href="formNilai.php" class="btn wrapperButton" style="height: 70px; left: 18%; top: 35%">Nilai</a>
                    <a href="formEditData.php" class="btn wrapperButton" style="height: 70px; left: 18%; top: 60%">Edit Data</a>
                </div>
            </div>
        </div>
        <a href="logout.php" class="btn btnDark btn-dark">Logout</a>
    </body> 
</html>