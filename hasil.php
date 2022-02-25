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
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <style>

        body {
            background-image: url('gambar/Hasil.PNG');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        .innerWrap{
            text-align: center;
            padding-top: 100px;
        }

        p {
            font-size: 30pt;
            font-family: fantasy;
        }

        h1{
            font-size: 50pt;
        }

        .innerWrap img{
            width: 250px;
        }
        </style>
    </head>

    <body>
        <div class='font'>
            <div class='col-9'>
                <p>Nilai</p>
            </div>
            <div class='col-3' style="padding-left:150px">
                <img src='gambar/DKR.PNG' />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                        <div class="card-body">
                            <div class="innerWrap">
                                <h1 class="card-title" ><?php echo $nama; ?></h1>
                                <p class="card-text">
                                    <br />
                                    Poin
                                    <br />
                                    <?php echo $nilai; ?>
                                    <br /><br />
                                    Peringkat 1
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                        <div class="card-body">
                            <div class="innerWrap">
                                <h2 class="card-title">Anggota Terbaik<br />2021</h2>
                                <?php if($nilai == 0){
                                ?>
                                <img src="gambar/faceIcon.png" alt="">
                                <?php
                                }else{
                                    ?>
                                <img src="gambar/DKR.png" alt=""> <!-- Gambar diganti foto pengguna atau dihapus (tidak menggunakan foto) -->
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>