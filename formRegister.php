<?php
    if (!isset($_SESSION)) {
        session_start();
        if($_SESSION['Kode'] != 'Administrator'){
            echo "<script>alert('Anda Harus Login Sebagai Administrator!');
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
            <p class="font">Registrasi</p>
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
                <h2 class="pt-5 text-center text-white">Biodata</h2>
                <div class="p-5">
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
                                $pilihan = array("Administrator", "Anggota");
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
            <div class="col-2"></div>
        </div>
    </div>
    <br />
    <br />
</body> 
</html>