<?php
    if (!isset($_SESSION)) {
        session_start();
        if(empty($_SESSION['Username']) or $_SESSION['Nama_Role'] != 'administrator'){
            echo "<script>alert('Anda Harus Login Sebagai Administrator!');
            window.location='login.php';
            </script>";
        }
    }
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
            <p class="font">Poin Penilaian</p>
        </div>
        <div class="col-5 d-flex justify-content-end p-5">
             <img src='gambar/DKR.PNG'  style="width: 200px;"/>
        </div>
        <div class="col-2">
    </div>
    
    <div class="container pt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="border-radius: 10px; background-color: #FA8072;">
                <h2 class="pt-5 text-center text-white">Poin Penilaian</h2>
                <div class="p-5">
                    <form action="editPoinProses" method="get">
                        <div class="form-group">
                            <label for="poinNilai">Poin Penilaian</label>
                            <input type="text" class="form-control" name="poinNilai" placeholder="Masukkan Poin Penilaian">
                        </div>
                        <div class="form-group">
                            <select style="width: 100%" name="cmbAction">
                                <option value=" ">Isi Keterangan</option>
                                <?php
                                $pilihan = array("Tambah", "Hapus");
                                foreach ($pilihan as $nilai) {
                                    if ($dataLevel==$nilai) {
                                        $cek="selected";
                                    } else {
                                        $cek = "";
                                    }
                                    echo "<option value='$nilai'  $cek>$nilai</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="input" value="Submit" class="btn btn-primary">Input</button>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    <br />
    <br />
    </div>
</body> 
</html>