<?php
if (!isset($_SESSION)) {

    session_start();
    if(empty($_SESSION['Kode'])){
        echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
        window.location='login.php';
        </script>";
    }

}
    $ID_User = $_SESSION['ID_User'];
    // $Username = $_SESSION['Username'];

    include 'getData.php';

    getData($ID_User);

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
            <p class="font">Edit Data</p>
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
                <h2 class="pt-5 text-center text-white">Biodata</h2>
                <div class="p-5">
                    <form action="editDataProses" method="post">
                        <div class="form-group">
                            <label for="id">ID Pengguna</label>
                            <input type="text" class="form-control" name="ID_User" value="<?php echo $_POST['ID_User']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="username">Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nama_User" value="<?php echo $_POST['Nama_User']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="asalSekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" name="Sekolah" value="<?php echo $_POST['Sekolah']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="noHP">No. HP</label>
                            <input type="text" class="form-control" name="NoTelp" value="<?php echo $_POST['NoTelp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="golongan">Golongan</label>
                            <select style="width: 100%" name="cmbGolongan">
                                <option value="<?php echo $_POST['Golongan']; ?>"><?php echo $_POST['Golongan']; ?></option>
                                    <?php
                                        if($_POST['Golongan'] == "Pandega"){
                                        $pilihan = array("Penegak");
                                            foreach ($pilihan as $nilai) {
                                                if ($dataLevel==$nilai) {
                                                    $cek=" selected";
                                                } else {
                                                    $cek = " ";
                                                }
                                                echo "<option value='$nilai'  $cek>$nilai</option>";
                                            }
                                        }elseif($_POST['Golongan'] == "Penegak"){
                                            $pilihan = array("Pandega");
                                                foreach ($pilihan as $nilai) {
                                                    if ($dataLevel==$nilai) {
                                                        $cek=" selected";
                                                    } else {
                                                        $cek = " ";
                                                    }
                                                    echo "<option value='$nilai'  $cek>$nilai</option>";
                                                }
                                        }else{
                                        $pilihan = array("Penegak", "Pandega");
                                        foreach ($pilihan as $nilai) {
                                           if ($dataLevel==$nilai) {
                                               $cek=" selected";
                                            } else {
                                                $cek = " ";
                                            }
                                            echo "<option value='$nilai'  $cek>$nilai</option>";
                                        }
                                        }
                                    ?>
                                }
                            </select>
                        </div>
                        <input type="submit" name="input" value="Simpan" class="btn btn-primary">
                        <?php
                            $ID_User = $_POST['ID_User'];
                        ?>
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