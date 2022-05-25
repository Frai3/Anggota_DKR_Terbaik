<?php

    include 'getJumlah.php';    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome dan CSS Bootstrap -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <!-- Title dan Gambar di Halaman File -->
    <link rel="icon" href="../gambar/DKR.png">
    <title>DKR Kelapa Dua</title>
</head>
<body>

<body>
<div class="row">
    <div class="col-5">
        <p class="font">Data Penjumlahan</p>
    </div>
    <div class="col-5 d-flex justify-content-end p-5">
        <img src='../gambar/DKR.PNG'  style="width: 200px;"/>
    </div>
    <div class="col-2">
</div>
    
<div class="container">
    <div class="row text-center">
        <!-- Tabel Awal Zikri -->
        <h4>Muara Zikri</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranZikri; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirZikri; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanZikri; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifZikri; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapZikri; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiZikri; ?>" readonly></td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Awal Fillah -->
        <h4>Fillah Munaya</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranFillah; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirFillah; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanFillah; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifFillah; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapFillah; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiFillah; ?>" readonly></td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Awal Meilizka -->
        <h4>Meilizka Dwie</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranMeilizka; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirMeilizka; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanMeilizka; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifMeilizka; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapMeilizka; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiMeilizka; ?>" readonly></td>
            </tbody>
        </table>

        <!-- Tabel Awal Kendanan -->
        <h4>Kendanan Wherespati</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranKendanan; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirKendanan; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanKendanan; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifKendanan; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapKendanan; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiKendanan; ?>" readonly></td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Awal Alya -->
        <h4>Alya Dani</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranAlya; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirAlya; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanAlya; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifAlya; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapAlya; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiAlya; ?>" readonly></td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Awal Bayu -->
        <h4>Bayu Aryo</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranBayu; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirBayu; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanBayu; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifBayu; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapBayu; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiBayu; ?>" readonly></td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Awal Regis -->
        <h4>Regis Revaldy</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranRegis; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirRegis; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanRegis; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifRegis; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapRegis; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiRegis; ?>" readonly></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Tabel Awal Revaldy -->
        <h4>Revaldy Putra</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranRevaldy; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirRevaldy; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanRevaldy; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifRevaldy; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapRevaldy; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiRevaldy; ?>" readonly></td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Awal Rangga -->
        <h4>Rangga Satria</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>TJPeran</th>
                    <th>TepatHadir</th>
                    <th>Keaktifan</th>
                    <th>Inisiatif</th>
                    <th>Sikap</th>
                    <th>Komunikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TJPeranRangga; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $TepatHadirRangga; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KeaktifanRangga; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $InisiatifRangga; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $SikapRangga; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $KomunikasiRangga; ?>" readonly></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br />
<br />
</body>
</html>