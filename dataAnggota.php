<?php
include 'koneksi.php';

if (!isset($_SESSION)) {
    session_start();
    if($_SESSION['Kode']!="Administrator"){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}

$ID_User = $_SESSION['ID_Akses'];

$queryGetAdministrator = mysqli_query($koneksi, "SELECT * FROM administrator");
$cekGetAdministrator = mysqli_num_rows($queryGetAdministrator);

$queryGetAnggota = mysqli_query($koneksi, "SELECT * FROM anggota");
$cekGetAnggota = mysqli_num_rows($queryGetAnggota);

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
        <p class="font">Data Anggota</p>
    </div>
    <div class="col-6 d-flex justify-content-end p-5">
        <img src='gambar/DKR.PNG'  style="width: 200px;"/>
    </div>
</div>

<div class="container">
    <h2>Administrator</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col" width="40%">Nama</th>
                <th scope="col" width="40%">Akhir Masa Bakti</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($dataAdministrator = mysqli_fetch_array($queryGetAdministrator)){
            ?>
            <tr>
                <td><?php echo $dataAdministrator['Nama_User']; ?></td>
                <td><?php echo $dataAdministrator['MasaBakti']; ?></td>
                <td class="text-center">
                <?php
                    if($dataAdministrator['ID_Akses'] != $ID_User){
                ?>
                    <a class="btn btn-warning" href="hapusAnggota?Nama_User=<?php echo $dataAdministrator['Nama_User']; ?>&Role=administrator">Hapus</a>
                </td>
                <?php                     
                    }
                ?>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h2 class="pt-5">Anggota</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col" width="40%">Nama</th>
                <th scope="col" width="40%">Akhir Masa Bakti</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($dataAnggota = mysqli_fetch_array($queryGetAnggota)){
            ?>
            <tr>
                <td><?php echo $dataAnggota['Nama_User']; ?></td>
                <td><?php echo $dataAnggota['MasaBakti']; ?></td>
                <td class="text-center">
                <?php
                    if($dataAnggota['ID_Akses'] != $ID_User){
                ?>
                    <a class="btn btn-warning" href="hapusAnggota?Nama_User=<?php echo $dataAnggota['Nama_User']; ?>&Role=administrator">Hapus</a>
                </td>
                <?php                     
                    }
                ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

</body> 
</html>