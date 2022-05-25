<?php

    include 'getJumlah.php';
    include '../getNilai.php';

    //SQRT adalah akar pangkat 2
    //POW adalah pangkat

    //SQRT(SUM(TJPeran^2))
    $TJPeran = SQRT(POW($_POST['TJPeranZikri'],2) + POW($_POST['TJPeranFillah'],2) + POW($_POST['TJPeranMeilizka'],2) + POW($_POST['TJPeranKendanan'],2) + POW($_POST['TJPeranAlya'],2)
                + POW($_POST['TJPeranBayu'],2) + POW($_POST['TJPeranRegis'],2) + POW($_POST['TJPeranRevaldy'],2) + POW($_POST['TJPeranRangga'],2));

    //SQRT(SUM(TepatHadir^2))
    $TepatHadir = SQRT(POW($_POST['TepatHadirZikri'],2) + POW($_POST['TepatHadirFillah'],2) + POW($_POST['TepatHadirMeilizka'],2) + POW($_POST['TepatHadirKendanan'],2) + POW($_POST['TepatHadirAlya'],2)
                + POW($_POST['TepatHadirBayu'],2) + POW($_POST['TepatHadirRegis'],2) + POW($_POST['TepatHadirRevaldy'],2) + POW($_POST['TepatHadirRangga'],2));
        
    //SQRT(SUM(Inisiatif^2))
    $Inisiatif = SQRT(POW($_POST['InisiatifZikri'],2) + POW($_POST['InisiatifFillah'],2) + POW($_POST['InisiatifMeilizka'],2) + POW($_POST['InisiatifKendanan'],2) + POW($_POST['InisiatifAlya'],2)
                + POW($_POST['InisiatifBayu'],2) + POW($_POST['InisiatifRegis'],2) + POW($_POST['InisiatifRevaldy'],2) + POW($_POST['InisiatifRangga'],2));

    //SQRT(SUM(Sikap^2))
    $Sikap = SQRT(POW($_POST['SikapZikri'],2) + POW($_POST['SikapFillah'],2) + POW($_POST['SikapMeilizka'],2) + POW($_POST['SikapKendanan'],2) + POW($_POST['SikapAlya'],2)
                + POW($_POST['SikapBayu'],2) + POW($_POST['SikapRegis'],2) + POW($_POST['SikapRevaldy'],2) + POW($_POST['SikapRangga'],2));

    //SQRT(SUM(Keaktifan^2))
    $Keaktifan = SQRT(POW($_POST['KeaktifanZikri'],2) + POW($_POST['KeaktifanFillah'],2) + POW($_POST['KeaktifanMeilizka'],2) + POW($_POST['KeaktifanKendanan'],2) + POW($_POST['KeaktifanAlya'],2)
                + POW($_POST['KeaktifanBayu'],2) + POW($_POST['KeaktifanRegis'],2) + POW($_POST['KeaktifanRevaldy'],2) + POW($_POST['KeaktifanRangga'],2));

    //SQRT(SUM(Komunikasi^2))
    $Komunikasi = SQRT(POW($_POST['KomunikasiZikri'],2) + POW($_POST['KomunikasiFillah'],2) + POW($_POST['KomunikasiMeilizka'],2) + POW($_POST['KomunikasiKendanan'],2) + POW($_POST['KomunikasiAlya'],2)
                + POW($_POST['KomunikasiBayu'],2) + POW($_POST['KomunikasiRegis'],2) + POW($_POST['KomunikasiRevaldy'],2) + POW($_POST['KomunikasiRangga'],2));

    // echo $TJPeran;

    $TJPeranZikri = $TJPeranZikri / $TJPeran;
    $TepatHadirZikri = $TepatHadirZikri / $TepatHadir;
    $KeaktifanZikri = $KeaktifanZikri / $Keaktifan;
    $InisiatifZikri = $InisiatifZikri / $Inisiatif;
    $SikapZikri = $SikapZikri / $Sikap;
    $KomunikasiZikri = $KomunikasiZikri / $Komunikasi;

    $TJPeranFillah = $TJPeranFillah / $TJPeran;
    $TepatHadirFillah = $TepatHadirFillah / $TepatHadir;
    $KeaktifanFillah = $KeaktifanFillah / $Keaktifan;
    $InisiatifFillah = $InisiatifFillah / $Inisiatif;
    $SikapFillah = $SikapFillah / $Sikap;
    $KomunikasiFillah = $KomunikasiFillah / $Komunikasi;

    $TJPeranMeilizka = $TJPeranMeilizka / $TJPeran;
    $TepatHadirMeilizka = $TepatHadirMeilizka / $TepatHadir;
    $KeaktifanMeilizka = $KeaktifanMeilizka / $Keaktifan;
    $InisiatifMeilizka = $InisiatifMeilizka / $Inisiatif;
    $SikapMeilizka = $SikapMeilizka / $Sikap;
    $KomunikasiMeilizka = $KomunikasiMeilizka / $Komunikasi;

    $TJPeranKendanan = $TJPeranKendanan / $TJPeran;
    $TepatHadirKendanan = $TepatHadirKendanan / $TepatHadir;
    $KeaktifanKendanan = $KeaktifanKendanan / $Keaktifan;
    $InisiatifKendanan = $InisiatifKendanan / $Inisiatif;
    $SikapKendanan = $SikapKendanan / $Sikap;
    $KomunikasiKendanan = $KomunikasiKendanan / $Komunikasi;

    $TJPeranAlya = $TJPeranAlya / $TJPeran;
    $TepatHadirAlya = $TepatHadirAlya / $TepatHadir;
    $KeaktifanAlya = $KeaktifanAlya / $Keaktifan;
    $InisiatifAlya = $InisiatifAlya / $Inisiatif;
    $SikapAlya = $SikapAlya / $Sikap;
    $KomunikasiAlya = $KomunikasiAlya / $Komunikasi;

    $TJPeranBayu = $TJPeranBayu / $TJPeran;
    $TepatHadirBayu = $TepatHadirBayu / $TepatHadir;
    $KeaktifanBayu = $KeaktifanBayu / $Keaktifan;
    $InisiatifBayu = $InisiatifBayu / $Inisiatif;
    $SikapBayu = $SikapBayu / $Sikap;
    $KomunikasiBayu = $KomunikasiBayu / $Komunikasi;

    $TJPeranRegis = $TJPeranRegis / $TJPeran;
    $TepatHadirRegis = $TepatHadirRegis / $TepatHadir;
    $KeaktifanRegis = $KeaktifanRegis / $Keaktifan;
    $InisiatifRegis = $InisiatifRegis / $Inisiatif;
    $SikapRegis = $SikapRegis / $Sikap;
    $KomunikasiRegis = $KomunikasiRegis / $Komunikasi;

    $TJPeranRevaldy = $TJPeranRevaldy / $TJPeran;
    $TepatHadirRevaldy = $TepatHadirRevaldy / $TepatHadir;
    $KeaktifanRevaldy = $KeaktifanRevaldy / $Keaktifan;
    $InisiatifRevaldy = $InisiatifRevaldy / $Inisiatif;
    $SikapRevaldy = $SikapRevaldy / $Sikap;
    $KomunikasiRevaldy = $KomunikasiRevaldy / $Komunikasi;

    $TJPeranRangga = $TJPeranRangga / $TJPeran;
    $TepatHadirRangga = $TepatHadirRangga / $TepatHadir;
    $KeaktifanRangga = $KeaktifanRangga / $Keaktifan;
    $InisiatifRangga = $InisiatifRangga / $Inisiatif;
    $SikapRangga = $SikapRangga / $Sikap;
    $KomunikasiRangga = $KomunikasiRangga / $Komunikasi;

?>