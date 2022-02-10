<?php
    
    include '../model/getNilai.php';
    $Periode = date('Y');
    $koneksi = mysqli_connect("localhost","root","", "dkr");

    //Mendapatkan Nilai SUM
    getNilaiTJPeran($koneksi, $Periode);
    $TJPeran = sqrt($_POST['TJPeran']);
    getNilaiTepatHadir($koneksi, $Periode);
    $TepatHadir = sqrt($_POST['TepatHadir']);
    getNilaiKeaktifan($koneksi, $Periode);
    $Keaktifan = sqrt($_POST['Keaktifan']);
    getNilaiInisiatif($koneksi, $Periode);
    $Inisiatif = sqrt($_POST['Inisiatif']);
    getNilaiSikap($koneksi, $Periode);
    $Sikap = sqrt($_POST['Sikap']);
    getNilaiKomunikasi($koneksi, $Periode);
    $Komunikasi = sqrt($_POST['Komunikasi']);

    //Bobot nilai
    $nilaiTJPeran = 20/100;
    $nilaiTepatHadir = 20/100;
    $nilaiKeaktifan = 15/100;
    $nilaiInisiatif = 15/100;
    $nilaiSikap = 20/100;
    $nilaiKomunikasi = 10/100;

    //Tabel Raihan
    getNilaiRaihan($koneksi, $Periode);
    $TJPeranRaihan = $_POST['TJPeran'];
    $TepatHadirRaihan = $_POST['TepatHadir'];
    $KeaktifanRaihan =  $_POST['Keaktifan'];
    $InisiatifRaihan =  $_POST['Inisiatif'];
    $SikapRaihan =  $_POST['Sikap'];
    $KomunikasiRaihan =  $_POST['Komunikasi'];

    //Normalisasi Tabel Raihan
    $TJPeranRaihan = $TJPeranRaihan / $TJPeran;
    $TepatHadirRaihan = $TepatHadirRaihan / $TepatHadir;
    $KeaktifanRaihan = $KeaktifanRaihan / $Keaktifan;
    $InisiatifRaihan = $InisiatifRaihan / $Inisiatif;
    $SikapRaihan = $SikapRaihan / $Sikap;
    $KomunikasiRaihan = $KomunikasiRaihan / $Komunikasi;

    //Normalisasi * Bobot Tabel Raihan
    $TJPeranRaihan = $TJPeranRaihan * $nilaiTJPeran;
    $TepatHadirRaihan = $TepatHadirRaihan * $nilaiTepatHadir;
    $KeaktifanRaihan =  $KeaktifanRaihan * $nilaiKeaktifan;
    $InisiatifRaihan =  $InisiatifRaihan * $nilaiInisiatif;
    $SikapRaihan =  $SikapRaihan * $nilaiSikap;
    $KomunikasiRaihan =  $KomunikasiRaihan * $nilaiKomunikasi;
    
    //Jumlah Hasil Raihan
    $jumlahRaihan = $TJPeranRaihan + $TepatHadirRaihan + $KeaktifanRaihan + $InisiatifRaihan + $SikapRaihan + $KomunikasiRaihan;





    //Tabel Frai
    getNilaiFrai($koneksi, $Periode);
    $TJPeranFrai = $_POST['TJPeran'];
    $TepatHadirFrai = $_POST['TepatHadir'];
    $KeaktifanFrai =  $_POST['Keaktifan'];
    $InisiatifFrai =  $_POST['Inisiatif'];
    $SikapFrai =  $_POST['Sikap'];
    $KomunikasiFrai =  $_POST['Komunikasi'];

    //Normalisasi Tabel Frai
    $TJPeranFrai = $TJPeranFrai / $TJPeran;
    $TepatHadirFrai = $TepatHadirFrai / $TepatHadir;
    $KeaktifanFrai = $KeaktifanFrai / $Keaktifan;
    $InisiatifFrai = $InisiatifFrai / $Inisiatif;
    $SikapFrai = $SikapFrai / $Sikap;
    $KomunikasiFrai = $KomunikasiFrai / $Komunikasi;

    //Normalisasi * Bobot Tabel Frai
    $TJPeranFrai = $TJPeranFrai * $nilaiTJPeran;
    $TepatHadirFrai = $TepatHadirFrai * $nilaiTepatHadir;
    $KeaktifanFrai =  $KeaktifanFrai * $nilaiKeaktifan;
    $InisiatifFrai =  $InisiatifFrai * $nilaiInisiatif;
    $SikapFrai =  $SikapFrai * $nilaiSikap;
    $KomunikasiFrai =  $KomunikasiFrai * $nilaiKomunikasi;

    //Jumlah Hasil Frai
    $jumlahFrai = $TJPeranFrai + $TepatHadirFrai + $KeaktifanFrai + $InisiatifFrai + $SikapFrai + $KomunikasiFrai;




    
    //Tabel Ray
    getNilaiRay($koneksi, $Periode);
    $TJPeranRay = $_POST['TJPeran'];
    $TepatHadirRay = $_POST['TepatHadir'];
    $KeaktifanRay =  $_POST['Keaktifan'];
    $InisiatifRay =  $_POST['Inisiatif'];
    $SikapRay =  $_POST['Sikap'];
    $KomunikasiRay =  $_POST['Komunikasi'];
    
    //Normalisasi Tabel Ray
    $TJPeranRay = $TJPeranRay / $TJPeran;
    $TepatHadirRay = $TepatHadirRay / $TepatHadir;
    $KeaktifanRay = $KeaktifanRay / $Keaktifan;
    $InisiatifRay = $InisiatifRay / $Inisiatif;
    $SikapRay = $SikapRay / $Sikap;
    $KomunikasiRay = $KomunikasiRay / $Komunikasi;

    //Normalisasi * Bobot Tabel Ray
    $TJPeranRay = $TJPeranRay * $nilaiTJPeran;
    $TepatHadirRay = $TepatHadirRay * $nilaiTepatHadir;
    $KeaktifanRay =  $KeaktifanRay * $nilaiKeaktifan;
    $InisiatifRay =  $InisiatifRay * $nilaiInisiatif;
    $SikapRay =  $SikapRay * $nilaiSikap;
    $KomunikasiRay =  $KomunikasiRay * $nilaiKomunikasi;

    //Jumlah Hasil Ray
    $jumlahRay = $TJPeranRay + $TepatHadirRay + $KeaktifanRay + $InisiatifRay + $SikapRay + $KomunikasiRay;

    //Tabel Mark
    getNilaiMark($koneksi, $Periode);
    $TJPeranMark = $_POST['TJPeran'];
    $TepatHadirMark = $_POST['TepatHadir'];
    $KeaktifanMark =  $_POST['Keaktifan'];
    $InisiatifMark =  $_POST['Inisiatif'];
    $SikapMark =  $_POST['Sikap'];
    $KomunikasiMark =  $_POST['Komunikasi'];

    //Normalisasi Tabel Mark
    $TJPeranMark = $TJPeranMark / $TJPeran;
    $TepatHadirMark = $TepatHadirMark / $TepatHadir;
    $KeaktifanMark = $KeaktifanMark / $Keaktifan;
    $InisiatifMark = $InisiatifMark / $Inisiatif;
    $SikapMark = $SikapMark / $Sikap;
    $KomunikasiMark = $KomunikasiMark / $Komunikasi;

    //Normalisasi * Bobot Tabel Mark
    $TJPeranMark = $TJPeranMark * $nilaiTJPeran;
    $TepatHadirMark = $TepatHadirMark * $nilaiTepatHadir;
    $KeaktifanMark =  $KeaktifanMark * $nilaiKeaktifan;
    $InisiatifMark =  $InisiatifMark * $nilaiInisiatif;
    $SikapMark =  $SikapMark * $nilaiSikap;
    $KomunikasiMark =  $KomunikasiMark * $nilaiKomunikasi;

    // //Jumlah Hasil Mark
    $jumlahMark = $TJPeranMark + $TepatHadirMark + $KeaktifanMark + $InisiatifMark + $SikapMark + $KomunikasiMark;





    //Hasil
    $nilaiMax = MAX($jumlahRaihan, $jumlahFrai, $jumlahRay, $jumlahMark);

    if($nilaiMax == $jumlahRaihan){
        echo "Raihan";
    }else if($nilaiMax == $jumlahFrai){
        echo "Frai";
    }
    else if($nilaiMax == $jumlahRay){
        echo "Ray";
    }
    else if($nilaiMax == $jumlahMark){
        echo "Mark";
    }
?>