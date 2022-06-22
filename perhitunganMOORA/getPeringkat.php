<?php

    include 'getNormalisasiBobot.php';

    $jumlahKandidat1 = $Poin1KN1 + $Poin2KN1 + $Poin3KN1 + $Poin4KN1 + $Poin5KN1 + $Poin6KN1;
    $jumlahKandidat2 = $Poin1KN2 + $Poin2KN2 + $Poin3KN2 + $Poin4KN2 + $Poin5KN2 + $Poin6KN2;

    $nilaiMax = MAX($jumlahKandidat1, $jumlahKandidat2);
        
        if($nilaiMax == $jumlahKandidat1){
            $nama = "Pengguna 1";
            $kode = '1';
        }else if($nilaiMax == $jumlahKandidat2){
            $nama = "Pengguna 2";
            $kode = '2';
        }
            $_POST['nama'] = $nama;
            $_POST['kode'] = $kode;
            $_POST['nilai1'] = $jumlahKandidat1;
            $_POST['nilai2'] = $jumlahKandidat2;
?>