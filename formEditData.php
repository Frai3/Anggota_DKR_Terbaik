<?php
if (!isset($_SESSION)) {

    session_start();

}
$Username = $_SESSION['Username'];

include 'getData.php';

getData($Username);


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <style>

        body {
            background-image: url('gambar/formRegisterBackground.PNG');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="wrapperFormRegister">
                    <div class="judul">Biodata</div>
                    <div class="formRegister">
                        <form action="editDataProses.php" method="post">
                        <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" name="ID_User" value="<?php echo $_POST['ID_User']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username">Nama</label>
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
                                            }else{
                                                $pilihan = array("Pandega");
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
            </div>
        </div>
    </body> 
</html>