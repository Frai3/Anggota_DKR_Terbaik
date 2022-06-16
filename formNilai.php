<?php

include 'koneksi.php';

if (!isset($_SESSION)) {
    session_start();
    if(empty($_SESSION['Kode'])){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }
}

// $username = $_SESSION['Username'];

$ID = $_SESSION['ID_User'];
$Nama_User = $_SESSION['Nama_User'];
// echo $ID;

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
            <p class="font">Penilaian</p>
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
                <div class="p-5">
                    <form action="inputNilaiProses" method="get">
                        <div class="form-group">
                            <label for="Nama_User">Nama</label>
                            <select style="width: 100%" name="cmbNama">
                            <?php
                                $queryGetArrayAdmin = mysqli_query($koneksi, "SELECT Nama_User FROM administrator");
                                $cekGetArrayAdmin = mysqli_num_rows($queryGetArrayAdmin);
                            
                                while($dataAdmin = mysqli_fetch_array($queryGetArrayAdmin)){
                            
                                        $dataAdmin1 = $dataAdmin['Nama_User'];
                                        
                                        if(empty($dataAdmin2)){
                                            $dataAdmin2 = $dataAdmin1;
                                        }
                            
                                }
                            
                                $queryGetArrayAnggota = mysqli_query($koneksi, "SELECT Nama_User FROM anggota");
                                $cekGetArrayAnggota = mysqli_num_rows($queryGetArrayAnggota);
                            
                                while($dataAnggota = mysqli_fetch_array($queryGetArrayAnggota)){
                            
                                        $dataAnggota1 = $dataAnggota['Nama_User'];
                            
                                        if(empty($dataAnggota2)){
                                            $dataAnggota2 = $dataAnggota1;
                                        }elseif(empty($dataAnggota3)){
                                            $dataAnggota3 = $dataAnggota1;
                                        }elseif(empty($dataAnggota4)){
                                            $dataAnggota4 = $dataAnggota1;
                                        }elseif(empty($dataAnggota5)){
                                            $dataAnggota5 = $dataAnggota1;
                                        }elseif(empty($dataAnggota6)){
                                            $dataAnggota6 = $dataAnggota1;
                                        }elseif(empty($dataAnggota7)){
                                            $dataAnggota7 = $dataAnggota1;
                                        }
                                }
                            
                                $data = array($dataAdmin2, $dataAdmin1, $dataAnggota2, $dataAnggota3, $dataAnggota4, $dataAnggota5, $dataAnggota6, $dataAnggota7, $dataAnggota1);
                                
                                for($i = 0; $i < count($data); $i++){
                                    if($data[$i] != $Nama_User){
                                        ?>
                                        <option value="<?php echo $data[$i];?>"><?php echo $data[$i];?></option>
                                        <?php
                                    }
                                }
                                
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="TJPeran">Tanggungjawab Peran</label>
                            <input type="text" class="form-control" name="TJPeran">
                        </div>
                        <div class="form-group">
                            <label for="TepatHadir">Ketepatan Waktu Hadir</label>
                            <input type="text" class="form-control" name="TepatHadir">
                        </div>
                        <div class="form-group">
                            <label for="Keaktifan">Keaktifan</label>
                            <input type="text" class="form-control" name="Keaktifan">
                        </div>
                        <div class="form-group">
                            <label for="Inisiatif">Inisiatif</label>
                            <input type="text" class="form-control" name="Inisiatif">
                        </div>
                        <div class="form-group">
                            <label for="Sikap">Sikap</label>
                            <input type="text" class="form-control" name="Sikap">
                        </div>
                        <div class="form-group">
                            <label for="Komunikasi">Komunikasi</label>
                            <input type="text" class="form-control" name="Komunikasi">
                        </div>
                        <input type="submit" name="input" value="Simpan" class="btn btn-primary">
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