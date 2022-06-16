<?php

    include 'getNormalisasiBobot.php';

    $jumlahZikri = $TJPeranZikri + $TepatHadirZikri + $KeaktifanZikri + $InisiatifZikri + $SikapZikri + $KomunikasiZikri;
    $jumlahFillah = $TJPeranFillah + $TepatHadirFillah + $KeaktifanFillah + $InisiatifFillah + $SikapFillah + $KomunikasiFillah;
    $jumlahMeilizka = $TJPeranMeilizka + $TepatHadirMeilizka + $KeaktifanMeilizka + $InisiatifMeilizka + $SikapMeilizka + $KomunikasiMeilizka;
    $jumlahKendanan = $TJPeranKendanan + $TepatHadirKendanan + $KeaktifanKendanan + $InisiatifKendanan + $SikapKendanan + $KomunikasiKendanan;
    $jumlahAlya = $TJPeranAlya + $TepatHadirAlya + $KeaktifanAlya + $InisiatifAlya + $SikapAlya + $KomunikasiAlya;
    $jumlahBayu = $TJPeranBayu + $TepatHadirBayu + $KeaktifanBayu + $InisiatifBayu + $SikapBayu + $KomunikasiBayu;
    $jumlahRegis = $TJPeranRegis + $TepatHadirRegis + $KeaktifanRegis + $InisiatifRegis + $SikapRegis + $KomunikasiRegis;
    $jumlahRevaldy = $TJPeranRevaldy + $TepatHadirRevaldy + $KeaktifanRevaldy + $InisiatifRevaldy + $SikapRevaldy + $KomunikasiRevaldy;
    $jumlahRangga = $TJPeranRangga + $TepatHadirRangga + $KeaktifanRangga + $InisiatifRangga + $SikapRangga + $KomunikasiRangga;

    $nilaiMax = MAX($jumlahZikri, $jumlahFillah, $jumlahMeilizka, $jumlahKendanan, $jumlahAlya, $jumlahBayu, $jumlahRegis, $jumlahRevaldy, $jumlahRangga);

    if($nilaiMax == $jumlahZikri){
        $nama = "Pengguna 1";
    }else if($nilaiMax == $jumlahFillah){
        $nama = "Pengguna 2";
    }
    else if($nilaiMax == $jumlahMeilizka){
        $nama = "Pengguna 3";
    }
    else if($nilaiMax == $jumlahKendanan){
        $nama = "Pengguna 4";
    }
    else if($nilaiMax == $jumlahAlya){
        $nama = "Pengguna 5";
    }
    else if($nilaiMax == $jumlahBayu){
        $nama = "Pengguna 6";
    }
    else if($nilaiMax == $jumlahRegis){
        $nama = "Pengguna 7";
    }
    else if($nilaiMax == $jumlahRevaldy){
        $nama = "Pengguna 8";
    }
    else if($nilaiMax == $jumlahRangga){
        $nama = "Pengguna 9";
    }
    $_POST['nama'] = $nama;
    $_POST['nilai'] = $nilaiMax;
?>