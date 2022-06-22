<?php

    include "lihatNilaiProses.php";

    hasilNilai();

    // $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $kode = $_POST['kode'];
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
                            <h1 class="card-title text-center pt-5">Kandidat 1</h1>
                            <p class="card-text text-center" style="font-size: 30pt">
                                <br />
                                Poin
                                <br />
                                <?php echo round($nilai1,2);?>
                                <br /><br />
                                <?php
                                    if($kode == '1'){
                                        echo "Peringkat 1";
                                    }else{
                                        echo 'Peringkat 2';
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light mb-3" style="max-width: 100%; height:40rem">
                        <div class="card-body">
                            <h1 class="card-title text-center pt-5">Kandidat 2</h1>
                            <p class="card-text text-center" style="font-size: 30pt">
                                <br />
                                Poin
                                <br />
                                <?php echo round($nilai2,2);?>
                                <br /><br />
                                <?php
                                    if($kode == '2'){
                                        echo "Peringkat 1";
                                    }else{
                                        echo 'Peringkat 2';
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </body> 
</html>