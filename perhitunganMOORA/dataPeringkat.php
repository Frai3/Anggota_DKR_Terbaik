<?php

    include 'getPeringkat.php';
    
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai']; 

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
        <p class="font">Peringkat</p>
    </div>
    <div class="col-5 d-flex justify-content-end p-5">
        <img src='../gambar/DKR.PNG'  style="width: 200px;"/>
    </div>
    <div class="col-2">
</div>
    
<div class="container">
    <div class="row text-center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Jumlah Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 1" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahZikri; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 2" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahFillah; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 3" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahMeilizka; ?>" readonly></td>
                </tr>    
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 4" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahKendanan; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 5" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahAlya; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 6" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahBayu; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 7" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahRegis; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 8" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahRevaldy; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Pengguna 9" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $jumlahRangga; ?>" readonly></td>
                </tr>
                <tr>
                    <td><h1>Peringkat 1</h1>
                    <td><input type="text" class="form-control" name="" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                    <td><h1>Nilai Tertinggi</h1>
                    <td><input type="text" class="form-control" name="" value="<?php echo $nilai; ?>" readonly></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br />
<br />
</body>
</html>