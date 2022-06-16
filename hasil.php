<?php

    include "lihatNilaiProses.php";

    hasilNilai();

    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

        <style>

        body {
            background-image: url('gambar/Hasil.PNG');
        }
        
        </style>
    </head>

    <body>

    <div class="row">
        <div class="col-5">
            <p class="font">Hasil</p>
        </div>
        <div class="col-6 d-flex justify-content-end p-5">
             <img src='gambar/DKR.PNG'  style="width: 200px;"/>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                        <div class="card-body">
                                <h1 class="card-title text-center pt-5"><?php echo $nama; ?></h1>
                                <p class="card-text text-center" style="font-size: 30pt">
                                    <br />
                                    Poin
                                    <br />
                                    <?php echo round($nilai,2);?>
                                    <br /><br />
                                    Peringkat 1
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                        <div class="card-body text-center">
                                <h2 class="card-title p-5">Anggota Terbaik<br />2022</h2>
                                <?php if($nilai == 0){
                                ?>
                                <img src="gambar/faceIcon.png" width="400">
                                <?php
                                }else{
                                    ?>
                                <img src="gambar/DKR.png"  width="400"> <!-- Gambar diganti foto pengguna atau dihapus (tidak menggunakan foto) -->
                                <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>