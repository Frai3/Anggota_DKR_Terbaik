<?php

include 'koneksi.php';
$Periode = date('Y');

$queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US001' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeran'] = $data['TJPeran'];
            $_POST['TepatHadir'] = $data['TepatHadir'];
            $_POST['Keaktifan'] = $data['Keaktifan'];
            $_POST['Inisiatif'] = $data['Inisiatif'];
            $_POST['Sikap'] = $data['Sikap'];
            $_POST['Komunikasi'] = $data['Komunikasi'];

        echo $_POST['TJPeran'];
    
        }

?>