<?php

    function getBobotNilai(){
        include 'koneksi.php';
        $Periode = date('Y');

        $queryGetNilaiPoin1 = mysqli_query($koneksi, "SELECT Persentase AS PersenPoin1 FROM poinnilai WHERE  ID_PoinNilai = 'PN001' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilaiPoin1)){
        
            $_POST['Poin1'] = $data['PersenPoin1'];
        
        }

        $queryGetNilaiPoin2 = mysqli_query($koneksi, "SELECT Persentase AS PersenPoin2 FROM poinnilai WHERE  ID_PoinNilai = 'PN002' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilaiPoin2)){
        
            $_POST['Poin2'] = $data['PersenPoin2'];
        
        }
        
        $queryGetNilaiPoin3 = mysqli_query($koneksi, "SELECT Persentase AS PersenPoin3 FROM poinnilai WHERE  ID_PoinNilai = 'PN003' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilaiPoin3)){
        
            $_POST['Poin3'] = $data['PersenPoin3'];
        
        }

        $queryGetNilaiPoin4 = mysqli_query($koneksi, "SELECT Persentase AS PersenPoin4 FROM poinnilai WHERE  ID_PoinNilai = 'PN004' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilaiPoin4)){
        
            $_POST['Poin4'] = $data['PersenPoin4'];
        
        }

        $queryGetNilaiPoin5 = mysqli_query($koneksi, "SELECT Persentase AS PersenPoin5 FROM poinnilai WHERE  ID_PoinNilai = 'PN005' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilaiPoin5)){
        
            $_POST['Poin5'] = $data['PersenPoin5'];
        
        }

        $queryGetNilaiPoin6 = mysqli_query($koneksi, "SELECT Persentase AS PersenPoin6 FROM poinnilai WHERE  ID_PoinNilai = 'PN006' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilaiPoin6)){
        
            $_POST['Poin6'] = $data['PersenPoin6'];
        
        }

    }

?>