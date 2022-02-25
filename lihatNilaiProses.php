<?php
    
    function hasilNilai(){
        include 'getNilai.php';
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
        if($TJPeran != 0){
        //Bobot nilai
        $nilaiTJPeran = 20/100;
        $nilaiTepatHadir = 20/100;
        $nilaiKeaktifan = 15/100;
        $nilaiInisiatif = 15/100;
        $nilaiSikap = 20/100;
        $nilaiKomunikasi = 10/100;
    
        //Tabel Zikri
        getNilaiZikri($koneksi, $Periode);
        $TJPeranZikri = $_POST['TJPeran'];
        $TepatHadirZikri = $_POST['TepatHadir'];
        $KeaktifanZikri =  $_POST['Keaktifan'];
        $InisiatifZikri =  $_POST['Inisiatif'];
        $SikapZikri =  $_POST['Sikap'];
        $KomunikasiZikri =  $_POST['Komunikasi'];

        //Normalisasi Tabel Zikri
        $TJPeranZikri = $TJPeranZikri / $TJPeran;
        $TepatHadirZikri = $TepatHadirZikri / $TepatHadir;
        $KeaktifanZikri = $KeaktifanZikri / $Keaktifan;
        $InisiatifZikri = $InisiatifZikri / $Inisiatif;
        $SikapZikri = $SikapZikri / $Sikap;
        $KomunikasiZikri = $KomunikasiZikri / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Zikri
        $TJPeranZikri = $TJPeranZikri * $nilaiTJPeran;
        $TepatHadirZikri = $TepatHadirZikri * $nilaiTepatHadir;
        $KeaktifanZikri =  $KeaktifanZikri * $nilaiKeaktifan;
        $InisiatifZikri =  $InisiatifZikri * $nilaiInisiatif;
        $SikapZikri =  $SikapZikri * $nilaiSikap;
        $KomunikasiZikri =  $KomunikasiZikri * $nilaiKomunikasi;
        
        //Jumlah Hasil Zikri
        $jumlahZikri = $TJPeranZikri + $TepatHadirZikri + $KeaktifanZikri + $InisiatifZikri + $SikapZikri + $KomunikasiZikri;
    
    
    
    
    
        //Tabel Fillah
        getNilaiFillah($koneksi, $Periode);
        $TJPeranFillah = $_POST['TJPeran'];
        $TepatHadirFillah = $_POST['TepatHadir'];
        $KeaktifanFillah =  $_POST['Keaktifan'];
        $InisiatifFillah =  $_POST['Inisiatif'];
        $SikapFillah =  $_POST['Sikap'];
        $KomunikasiFillah =  $_POST['Komunikasi'];
    
        //Normalisasi Tabel Fillah
        $TJPeranFillah = $TJPeranFillah / $TJPeran;
        $TepatHadirFillah = $TepatHadirFillah / $TepatHadir;
        $KeaktifanFillah = $KeaktifanFillah / $Keaktifan;
        $InisiatifFillah = $InisiatifFillah / $Inisiatif;
        $SikapFillah = $SikapFillah / $Sikap;
        $KomunikasiFillah = $KomunikasiFillah / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Fillah
        $TJPeranFillah = $TJPeranFillah * $nilaiTJPeran;
        $TepatHadirFillah = $TepatHadirFillah * $nilaiTepatHadir;
        $KeaktifanFillah =  $KeaktifanFillah * $nilaiKeaktifan;
        $InisiatifFillah =  $InisiatifFillah * $nilaiInisiatif;
        $SikapFillah =  $SikapFillah * $nilaiSikap;
        $KomunikasiFillah =  $KomunikasiFillah * $nilaiKomunikasi;
    
        //Jumlah Hasil Fillah
        $jumlahFillah = $TJPeranFillah + $TepatHadirFillah + $KeaktifanFillah + $InisiatifFillah + $SikapFillah + $KomunikasiFillah;
    
    
    
    
        
        //Tabel Meilizka
        getNilaiMeilizka($koneksi, $Periode);
        $TJPeranMeilizka = $_POST['TJPeran'];
        $TepatHadirMeilizka = $_POST['TepatHadir'];
        $KeaktifanMeilizka =  $_POST['Keaktifan'];
        $InisiatifMeilizka =  $_POST['Inisiatif'];
        $SikapMeilizka =  $_POST['Sikap'];
        $KomunikasiMeilizka =  $_POST['Komunikasi'];
        
        //Normalisasi Tabel Meilizka
        $TJPeranMeilizka = $TJPeranMeilizka / $TJPeran;
        $TepatHadirMeilizka = $TepatHadirMeilizka / $TepatHadir;
        $KeaktifanMeilizka = $KeaktifanMeilizka / $Keaktifan;
        $InisiatifMeilizka = $InisiatifMeilizka / $Inisiatif;
        $SikapMeilizka = $SikapMeilizka / $Sikap;
        $KomunikasiMeilizka = $KomunikasiMeilizka / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Meilizka
        $TJPeranMeilizka = $TJPeranMeilizka * $nilaiTJPeran;
        $TepatHadirMeilizka = $TepatHadirMeilizka * $nilaiTepatHadir;
        $KeaktifanMeilizka =  $KeaktifanMeilizka * $nilaiKeaktifan;
        $InisiatifMeilizka =  $InisiatifMeilizka * $nilaiInisiatif;
        $SikapMeilizka =  $SikapMeilizka * $nilaiSikap;
        $KomunikasiMeilizka =  $KomunikasiMeilizka * $nilaiKomunikasi;
    
        //Jumlah Hasil Meilizka
        $jumlahMeilizka = $TJPeranMeilizka + $TepatHadirMeilizka + $KeaktifanMeilizka + $InisiatifMeilizka + $SikapMeilizka + $KomunikasiMeilizka;
    
    




        //Tabel Kendanan
        getNilaiKendanan($koneksi, $Periode);
        $TJPeranKendanan = $_POST['TJPeran'];
        $TepatHadirKendanan = $_POST['TepatHadir'];
        $KeaktifanKendanan =  $_POST['Keaktifan'];
        $InisiatifKendanan =  $_POST['Inisiatif'];
        $SikapKendanan =  $_POST['Sikap'];
        $KomunikasiKendanan =  $_POST['Komunikasi'];
        
        //Normalisasi Tabel Kendanan
        $TJPeranKendanan = $TJPeranKendanan / $TJPeran;
        $TepatHadirKendanan = $TepatHadirKendanan / $TepatHadir;
        $KeaktifanKendanan = $KeaktifanKendanan / $Keaktifan;
        $InisiatifKendanan = $InisiatifKendanan / $Inisiatif;
        $SikapKendanan = $SikapKendanan / $Sikap;
        $KomunikasiKendanan = $KomunikasiKendanan / $Komunikasi;
        
        //Normalisasi * Bobot Tabel Kendanan
        $TJPeranKendanan = $TJPeranKendanan * $nilaiTJPeran;
        $TepatHadirKendanan = $TepatHadirKendanan * $nilaiTepatHadir;
        $KeaktifanKendanan =  $KeaktifanKendanan * $nilaiKeaktifan;
        $InisiatifKendanan =  $InisiatifKendanan * $nilaiInisiatif;
        $SikapKendanan =  $SikapKendanan * $nilaiSikap;
        $KomunikasiKendanan =  $KomunikasiKendanan * $nilaiKomunikasi;
        
        // //Jumlah Hasil Kendanan
        $jumlahKendanan = $TJPeranKendanan + $TepatHadirKendanan + $KeaktifanKendanan + $InisiatifKendanan + $SikapKendanan + $KomunikasiKendanan;
        




        //Tabel Alya
        getNilaiAlya($koneksi, $Periode);
        $TJPeranAlya = $_POST['TJPeran'];
        $TepatHadirAlya = $_POST['TepatHadir'];
        $KeaktifanAlya =  $_POST['Keaktifan'];
        $InisiatifAlya =  $_POST['Inisiatif'];
        $SikapAlya =  $_POST['Sikap'];
        $KomunikasiAlya =  $_POST['Komunikasi'];
    
        //Normalisasi Tabel Alya
        $TJPeranAlya = $TJPeranAlya / $TJPeran;
        $TepatHadirAlya = $TepatHadirAlya / $TepatHadir;
        $KeaktifanAlya = $KeaktifanAlya / $Keaktifan;
        $InisiatifAlya = $InisiatifAlya / $Inisiatif;
        $SikapAlya = $SikapAlya / $Sikap;
        $KomunikasiAlya = $KomunikasiAlya / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Alya
        $TJPeranAlya = $TJPeranAlya * $nilaiTJPeran;
        $TepatHadirAlya = $TepatHadirAlya * $nilaiTepatHadir;
        $KeaktifanAlya =  $KeaktifanAlya * $nilaiKeaktifan;
        $InisiatifAlya =  $InisiatifAlya * $nilaiInisiatif;
        $SikapAlya =  $SikapAlya * $nilaiSikap;
        $KomunikasiAlya =  $KomunikasiAlya * $nilaiKomunikasi;
    
        // //Jumlah Hasil Alya
        $jumlahAlya = $TJPeranAlya + $TepatHadirAlya + $KeaktifanAlya + $InisiatifAlya + $SikapAlya + $KomunikasiAlya;





        //Tabel Bayu
        getNilaiBayu($koneksi, $Periode);
        $TJPeranBayu = $_POST['TJPeran'];
        $TepatHadirBayu = $_POST['TepatHadir'];
        $KeaktifanBayu =  $_POST['Keaktifan'];
        $InisiatifBayu =  $_POST['Inisiatif'];
        $SikapBayu =  $_POST['Sikap'];
        $KomunikasiBayu =  $_POST['Komunikasi'];
    
        //Normalisasi Tabel Bayu
        $TJPeranBayu = $TJPeranBayu / $TJPeran;
        $TepatHadirBayu = $TepatHadirBayu / $TepatHadir;
        $KeaktifanBayu = $KeaktifanBayu / $Keaktifan;
        $InisiatifBayu = $InisiatifBayu / $Inisiatif;
        $SikapBayu = $SikapBayu / $Sikap;
        $KomunikasiBayu = $KomunikasiBayu / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Bayu
        $TJPeranBayu = $TJPeranBayu * $nilaiTJPeran;
        $TepatHadirBayu = $TepatHadirBayu * $nilaiTepatHadir;
        $KeaktifanBayu =  $KeaktifanBayu * $nilaiKeaktifan;
        $InisiatifBayu =  $InisiatifBayu * $nilaiInisiatif;
        $SikapBayu =  $SikapBayu * $nilaiSikap;
        $KomunikasiBayu =  $KomunikasiBayu * $nilaiKomunikasi;
    
        // //Jumlah Hasil Bayu
        $jumlahBayu = $TJPeranBayu + $TepatHadirBayu + $KeaktifanBayu + $InisiatifBayu + $SikapBayu + $KomunikasiBayu;





        //Tabel Regis
        getNilaiRegis($koneksi, $Periode);
        $TJPeranRegis = $_POST['TJPeran'];
        $TepatHadirRegis = $_POST['TepatHadir'];
        $KeaktifanRegis =  $_POST['Keaktifan'];
        $InisiatifRegis =  $_POST['Inisiatif'];
        $SikapRegis =  $_POST['Sikap'];
        $KomunikasiRegis =  $_POST['Komunikasi'];
    
        //Normalisasi Tabel Regis
        $TJPeranRegis = $TJPeranRegis / $TJPeran;
        $TepatHadirRegis = $TepatHadirRegis / $TepatHadir;
        $KeaktifanRegis = $KeaktifanRegis / $Keaktifan;
        $InisiatifRegis = $InisiatifRegis / $Inisiatif;
        $SikapRegis = $SikapRegis / $Sikap;
        $KomunikasiRegis = $KomunikasiRegis / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Regis
        $TJPeranRegis = $TJPeranRegis * $nilaiTJPeran;
        $TepatHadirRegis = $TepatHadirRegis * $nilaiTepatHadir;
        $KeaktifanRegis =  $KeaktifanRegis * $nilaiKeaktifan;
        $InisiatifRegis =  $InisiatifRegis * $nilaiInisiatif;
        $SikapRegis =  $SikapRegis * $nilaiSikap;
        $KomunikasiRegis =  $KomunikasiRegis * $nilaiKomunikasi;
    
        // //Jumlah Hasil Regis
        $jumlahRegis = $TJPeranRegis + $TepatHadirRegis + $KeaktifanRegis + $InisiatifRegis + $SikapRegis + $KomunikasiRegis;





        //Tabel Revaldy
        getNilaiRevaldy($koneksi, $Periode);
        $TJPeranRevaldy = $_POST['TJPeran'];
        $TepatHadirRevaldy = $_POST['TepatHadir'];
        $KeaktifanRevaldy =  $_POST['Keaktifan'];
        $InisiatifRevaldy =  $_POST['Inisiatif'];
        $SikapRevaldy =  $_POST['Sikap'];
        $KomunikasiRevaldy =  $_POST['Komunikasi'];
    
        //Normalisasi Tabel Revaldy
        $TJPeranRevaldy = $TJPeranRevaldy / $TJPeran;
        $TepatHadirRevaldy = $TepatHadirRevaldy / $TepatHadir;
        $KeaktifanRevaldy = $KeaktifanRevaldy / $Keaktifan;
        $InisiatifRevaldy = $InisiatifRevaldy / $Inisiatif;
        $SikapRevaldy = $SikapRevaldy / $Sikap;
        $KomunikasiRevaldy = $KomunikasiRevaldy / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Revaldy
        $TJPeranRevaldy = $TJPeranRevaldy * $nilaiTJPeran;
        $TepatHadirRevaldy = $TepatHadirRevaldy * $nilaiTepatHadir;
        $KeaktifanRevaldy =  $KeaktifanRevaldy * $nilaiKeaktifan;
        $InisiatifRevaldy =  $InisiatifRevaldy * $nilaiInisiatif;
        $SikapRevaldy =  $SikapRevaldy * $nilaiSikap;
        $KomunikasiRevaldy =  $KomunikasiRevaldy * $nilaiKomunikasi;
    
        // //Jumlah Hasil Revaldy
        $jumlahRevaldy = $TJPeranRevaldy + $TepatHadirRevaldy + $KeaktifanRevaldy + $InisiatifRevaldy + $SikapRevaldy + $KomunikasiRevaldy;





        //Tabel Rangga
        getNilaiRangga($koneksi, $Periode);
        $TJPeranRangga = $_POST['TJPeran'];
        $TepatHadirRangga = $_POST['TepatHadir'];
        $KeaktifanRangga =  $_POST['Keaktifan'];
        $InisiatifRangga =  $_POST['Inisiatif'];
        $SikapRangga =  $_POST['Sikap'];
        $KomunikasiRangga =  $_POST['Komunikasi'];
    
        //Normalisasi Tabel Rangga
        $TJPeranRangga = $TJPeranRangga / $TJPeran;
        $TepatHadirRangga = $TepatHadirRangga / $TepatHadir;
        $KeaktifanRangga = $KeaktifanRangga / $Keaktifan;
        $InisiatifRangga = $InisiatifRangga / $Inisiatif;
        $SikapRangga = $SikapRangga / $Sikap;
        $KomunikasiRangga = $KomunikasiRangga / $Komunikasi;
    
        //Normalisasi * Bobot Tabel Rangga
        $TJPeranRangga = $TJPeranRangga * $nilaiTJPeran;
        $TepatHadirRangga = $TepatHadirRangga * $nilaiTepatHadir;
        $KeaktifanRangga =  $KeaktifanRangga * $nilaiKeaktifan;
        $InisiatifRangga =  $InisiatifRangga * $nilaiInisiatif;
        $SikapRangga =  $SikapRangga * $nilaiSikap;
        $KomunikasiRangga =  $KomunikasiRangga * $nilaiKomunikasi;
    
        // //Jumlah Hasil Rangga
        $jumlahRangga = $TJPeranRangga + $TepatHadirRangga + $KeaktifanRangga + $InisiatifRangga + $SikapRangga + $KomunikasiRangga;
    


    
    
        //Hasil
        $nilaiMax = MAX($jumlahZikri, $jumlahFillah, $jumlahMeilizka, $jumlahKendanan, $jumlahAlya, $jumlahBayu, $jumlahRegis, $jumlahRevaldy, $jumlahRangga);
    
        if($nilaiMax == $jumlahZikri){
            $nama = "Muara Zikri";
        }else if($nilaiMax == $jumlahFillah){
            $nama = "Frai";
        }
        else if($nilaiMax == $jumlahMeilizka){
            $nama = "Ray";
        }
        else if($nilaiMax == $jumlahKendanan){
            $nama = "Mark";
        }
        else if($nilaiMax == $jumlahAlya){
            $nama = "Mark";
        }
        else if($nilaiMax == $jumlahBayu){
            $nama = "Mark";
        }
        else if($nilaiMax == $jumlahRegis){
            $nama = "Mark";
        }
        else if($nilaiMax == $jumlahRevaldy){
            $nama = "Mark";
        }
        else if($nilaiMax == $jumlahRangga){
            $nama = "Mark";
        }
        $_POST['nama'] = $nama;
        $_POST['nilai'] = $nilaiMax;
    }else{
        $_POST['nama'] = "Nilai Belum Ditentukan";
        $_POST['nilai'] = 0;
    }
}

?>