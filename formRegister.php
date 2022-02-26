<?php
    if (!isset($_SESSION)) {
        session_start();
        if(empty($_SESSION['Username']) or $_SESSION['Nama_Role'] != 'administrator'){
            echo "<script>alert('Anda Harus Login Sebagai Administrator!');
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
        background-image: url('gambar/Background.PNG');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .formRegister {
    align-items: center;
    width: 1000px;
    height: 800px;
    padding: 100px 100px 0 100px;
    background: #F05959;
    border-radius: 59px;
    font-size: 15pt;
    }

    .formRegister form button {
        width: 100px;
    }

    </style>
    </head>

    <body>
        <div class='font'>
            <div class='col-9'>
                <p>Registrasi</p>
            </div>
            <div class='col-3'>
                <img src='gambar/DKR.PNG' />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="formRegister">
                    <form action="inputProses" method="get">
                        <div class="form-group">
                            <label for="nama_user">Nama</label>
                            <input type="text" class="form-control" name="Nama_user" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="asalSekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" name="Sekolah" placeholder="Masukkan Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="noHP">No. HP</label>
                            <input type="text" class="form-control" name="NoTelp" placeholder="Masukkan No. HP">
                        </div>
                        <div class="form-group">
                            <label for="golongan">Golongan</label>
                            <select style="width: 100%" name="cmbGolongan">
                                <option value=" ">Isi Golongan</option>
                                <?php
                                $pilihan = array("Penegak", "Pandega");
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
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="Username" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" name="Password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select style="width: 100%" name="cmbRole">
                                <option value=" ">Isi Role</option>
                                <?php
                                $pilihan = array("Administrator", "User");
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
                            <br />
                            <br />
                        <button type="submit" name="input" value="Submit" class="btn btn-primary">Input</button>
                    </form>
                </div>
            </div>
        </div>
    </body> 
</html>