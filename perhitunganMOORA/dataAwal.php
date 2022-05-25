<?php

include '../koneksi.php';
include '../getNilai.php';

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
        <p class="font">Data Awal</p>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US001';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US002';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US003';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US004';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
            <tbody>
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US005';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US006';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US007';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US008';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
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
                <?php

                    $cekDatabase = mysqli_query($koneksi, "SELECT * FROM nilai WHERE ID_UserIn = 'US009';");
                    $cekNilai = mysqli_num_rows($cekDatabase);

                    while($data = mysqli_fetch_array($cekDatabase)){
                ?>
                <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TJPeran']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['TepatHadir']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Keaktifan']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Inisiatif']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Sikap']; ?>" readonly></td>
                    <td><input type="text" class="form-control" name="" value="<?php echo $data['Komunikasi']; ?>" readonly></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br />
<br />
</body>
</html>