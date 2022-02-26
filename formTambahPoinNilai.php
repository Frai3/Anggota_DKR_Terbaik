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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>

    body {
        background-image: url('gambar/Background.PNG');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .wrapKonten{
        padding: 10px 0px 0 300px;
    }

    .formRegister {
    align-items: center;
    width: 500px;
    height: 500px;
    background: #F05959;
    border-radius: 59px;
    font-size: 15pt;
    }

    .formRegister form button {
        width: 100px;
    }

    </style>
    </head>

    <body>
        <div class='font'>
            <div class='col-9'>
                <p>Poin Penilaian</p>
            </div>
            <div class='col-3'>
                <img src='gambar/DKR.PNG' />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="wrapKonten">
                    <div class="formRegister">
                        <form action="editPoinProses" method="get">
                            <div class="form-group">
                                <label for="poinNilai">Poin Penilaian</label>
                                <input type="text" class="form-control" name="poinNilai" placeholder="Masukkan Nilai">
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
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>