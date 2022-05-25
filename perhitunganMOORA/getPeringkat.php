<?php

    include 'getBobot.php';

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
        $nama = "Zikri";
    }else if($nilaiMax == $jumlahFillah){
        $nama = "Fillah";
    }
    else if($nilaiMax == $jumlahMeilizka){
        $nama = "Meilizka";
    }
    else if($nilaiMax == $jumlahKendanan){
        $nama = "Kendanan";
    }
    else if($nilaiMax == $jumlahAlya){
        $nama = "Alya";
    }
    else if($nilaiMax == $jumlahBayu){
        $nama = "Bayu";
    }
    else if($nilaiMax == $jumlahRegis){
        $nama = "Regis";
    }
    else if($nilaiMax == $jumlahRevaldy){
        $nama = "Revaldy";
    }
    else if($nilaiMax == $jumlahRangga){
        $nama = "Rangga";
    }
    $_POST['nama'] = $nama;
    $_POST['nilai'] = $nilaiMax;
?>