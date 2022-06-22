<?php

include 'getNormalisasiBobot.php';
ini_set('memory_limit', '64M');

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
    <p class="font">Data Normalisasi dikalikan Bobot</p>
</div>
<div class="col-5 d-flex justify-content-end p-5">
    <img src='../gambar/DKR.png'  style="width: 200px;"/>
</div>
<div class="col-2">
</div>

<div class="container">
    <div class="row text-center">
    <table class="table">
            <thead class="thead-dark">
                </tbody>
                    <th>Nama</th>
                    <?php
                        $Periode = date('Y');
                        $cekDatabase = mysqli_query($koneksi, "SELECT PoinNilai FROM poinnilai WHERE Periode = '$Periode';");
                        $cekNilai = mysqli_num_rows($cekDatabase);

                        while($data = mysqli_fetch_array($cekDatabase)){
                        ?>
                        <th><?php echo $data['PoinNilai']; ?></th>
                    <?php
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Kandidat 1" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin1KN1; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin2KN1; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin3KN1; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin4KN1; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin5KN1; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin6KN1; ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="" value="Kandidat 2" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin1KN2; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin2KN2; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin3KN2; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin4KN2; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin5KN2; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $Poin6KN2; ?>" readonly></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="p-3">
        <a href="dataPeringkat" class="btn btn-primary">Selanjutnya</a>
    </div>
</div>
</body>
</html>