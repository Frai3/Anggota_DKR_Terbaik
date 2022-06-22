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
    <p class="font">Bobot Poin Penilaian</p>
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
                <tr>
                    <th>Poin Penilaian</th>
                    <th>Persentase</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../koneksi.php';
                    $Periode = date('Y');
                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM poinnilai WHERE Periode = '$Periode';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['PoinNilai']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Persentase']*100; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <br />
    <br /> 
</div>
</body>
</html>