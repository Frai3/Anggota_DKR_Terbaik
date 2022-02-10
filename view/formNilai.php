<?php

include '../controller/koneksi.php';

if (!isset($_SESSION)) {
    session_start();
    if(empty($_SESSION['Username'])){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='../view/login.php';
        </script>";
    }
}

$username = $_SESSION['Username'];
$ID = $_SESSION['ID_User'];

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <style>

        body {
            background-image: url('gambar/formRegisterBackground.PNG');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="wrapperFormRegister">
                    <div class="judul">Biodata</div>
                    <div class="formRegister">
                        <form action="../controller/inputNilaiProses.php" method="get">    
                            <div class="form-group">
                                <label for="Nama_User">Nama</label>
                                <select style="width: 100%" name="cmbNama">
                                <?php
                                    $queryEditData = mysqli_query($koneksi, "SELECT * FROM user WHERE Nama_User <> '$username'");
                                    while($data = mysqli_fetch_array($queryEditData)){
                                 ?>
                                <option value="<?php echo $data['Nama_User'];?>"><?php echo $data['Nama_User'];?></option> 
                                <?php
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="TJPeran">Tanggungjawab Peran</label>
                                <input type="text" class="form-control" name="TJPeran">
                            </div>
                            <div class="form-group">
                                <label for="TepatHadir">Ketepatan Waktu Hadir</label>
                                <input type="text" class="form-control" name="TepatHadir">
                            </div>
                            <div class="form-group">
                                <label for="Keaktifan">Keaktifan</label>
                                <input type="text" class="form-control" name="Keaktifan">
                            </div>
                            <div class="form-group">
                                <label for="Inisiatif">Inisiatif</label>
                                <input type="text" class="form-control" name="Inisiatif">
                            </div>
                            <div class="form-group">
                                <label for="Sikap">Sikap</label>
                                <input type="text" class="form-control" name="Sikap">
                            </div>
                            <div class="form-group">
                                <label for="Komunikasi">Komunikasi</label>
                                <input type="text" class="form-control" name="Komunikasi">
                            </div>
                            <input type="submit" name="input" value="Simpan" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>