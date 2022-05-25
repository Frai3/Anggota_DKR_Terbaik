<?php

    include '../koneksi.php';
    include '../getNilai.php';
    $Periode = date('Y');

    getNilaiZikri($koneksi, $Periode);
    $TJPeranZikri = $_POST['TJPeranZikri'];
    $TepatHadirZikri = $_POST['TepatHadirZikri'];
    $KeaktifanZikri =  $_POST['KeaktifanZikri'];
    $InisiatifZikri =  $_POST['InisiatifZikri'];
    $SikapZikri =  $_POST['SikapZikri'];
    $KomunikasiZikri =  $_POST['KomunikasiZikri'];

    getNilaiFillah($koneksi, $Periode);
    $TJPeranFillah = $_POST['TJPeranFillah'];
    $TepatHadirFillah = $_POST['TepatHadirFillah'];
    $KeaktifanFillah =  $_POST['KeaktifanFillah'];
    $InisiatifFillah =  $_POST['InisiatifFillah'];
    $SikapFillah =  $_POST['SikapFillah'];
    $KomunikasiFillah =  $_POST['KomunikasiFillah'];

    getNilaiMeilizka($koneksi, $Periode);
    $TJPeranMeilizka = $_POST['TJPeranMeilizka'];
    $TepatHadirMeilizka = $_POST['TepatHadirMeilizka'];
    $KeaktifanMeilizka =  $_POST['KeaktifanMeilizka'];
    $InisiatifMeilizka =  $_POST['InisiatifMeilizka'];
    $SikapMeilizka =  $_POST['SikapMeilizka'];
    $KomunikasiMeilizka =  $_POST['KomunikasiMeilizka'];

    getNilaiKendanan($koneksi, $Periode);
    $TJPeranKendanan = $_POST['TJPeranKendanan'];
    $TepatHadirKendanan = $_POST['TepatHadirKendanan'];
    $KeaktifanKendanan =  $_POST['KeaktifanKendanan'];
    $InisiatifKendanan =  $_POST['InisiatifKendanan'];
    $SikapKendanan =  $_POST['SikapKendanan'];
    $KomunikasiKendanan =  $_POST['KomunikasiKendanan'];

    getNilaiAlya($koneksi, $Periode);
    $TJPeranAlya = $_POST['TJPeranAlya'];
    $TepatHadirAlya = $_POST['TepatHadirAlya'];
    $KeaktifanAlya =  $_POST['KeaktifanAlya'];
    $InisiatifAlya =  $_POST['InisiatifAlya'];
    $SikapAlya =  $_POST['SikapAlya'];
    $KomunikasiAlya =  $_POST['KomunikasiAlya'];

    getNilaiBayu($koneksi, $Periode);
    $TJPeranBayu = $_POST['TJPeranBayu'];
    $TepatHadirBayu = $_POST['TepatHadirBayu'];
    $KeaktifanBayu =  $_POST['KeaktifanBayu'];
    $InisiatifBayu =  $_POST['InisiatifBayu'];
    $SikapBayu =  $_POST['SikapBayu'];
    $KomunikasiBayu =  $_POST['KomunikasiBayu'];

    getNilaiRegis($koneksi, $Periode);
    $TJPeranRegis = $_POST['TJPeranRegis'];
    $TepatHadirRegis = $_POST['TepatHadirRegis'];
    $KeaktifanRegis =  $_POST['KeaktifanRegis'];
    $InisiatifRegis =  $_POST['InisiatifRegis'];
    $SikapRegis =  $_POST['SikapRegis'];
    $KomunikasiRegis =  $_POST['KomunikasiRegis'];

    getNilaiRevaldy($koneksi, $Periode);
    $TJPeranRevaldy = $_POST['TJPeranRevaldy'];
    $TepatHadirRevaldy = $_POST['TepatHadirRevaldy'];
    $KeaktifanRevaldy =  $_POST['KeaktifanRevaldy'];
    $InisiatifRevaldy =  $_POST['InisiatifRevaldy'];
    $SikapRevaldy =  $_POST['SikapRevaldy'];
    $KomunikasiRevaldy =  $_POST['KomunikasiRevaldy'];

    getNilaiRangga($koneksi, $Periode);
    $TJPeranRangga = $_POST['TJPeranRangga'];
    $TepatHadirRangga = $_POST['TepatHadirRangga'];
    $KeaktifanRangga =  $_POST['KeaktifanRangga'];
    $InisiatifRangga =  $_POST['InisiatifRangga'];
    $SikapRangga =  $_POST['SikapRangga'];
    $KomunikasiRangga =  $_POST['KomunikasiRangga'];

?>