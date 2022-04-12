<?php
    
    function hasilNilai(){
        include 'getNilai.php';
        $Periode = date('Y');
        $koneksi = mysqli_connect("localhost","root","", "dkr");
        
        getNilaiZikri($koneksi, $Periode);
        getNilaiFillah($koneksi, $Periode);
        getNilaiMeilizka($koneksi, $Periode);
        getNilaiKendanan($koneksi, $Periode);
        getNilaiAlya($koneksi, $Periode);
        getNilaiBayu($koneksi, $Periode);
        getNilaiRegis($koneksi, $Periode);
        getNilaiRevaldy($koneksi, $Periode);
        getNilaiRangga($koneksi, $Periode);


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



        if($TJPeran != 0){
        //Bobot nilai
        $nilaiTJPeran = 20/100;
        $nilaiTepatHadir = 20/100;
        $nilaiKeaktifan = 15/100;
        $nilaiInisiatif = 15/100;
        $nilaiSikap = 20/100;
        $nilaiKomunikasi = 10/100;
        




        //Tabel Zikri
        if(empty($_POST['TJPeranZikri']) AND empty($_POST['TepatHadirZikri']) AND empty($_POST['KeaktifanZikri']) AND empty($_POST['InisiatifZikri'])
        AND empty($_POST['SikapZikri']) AND empty($_POST['KomunikasiZikri'])){
            $jumlahZikri = 0;
        }else{
            
            $TJPeranZikri = $_POST['TJPeranZikri'];
            $TepatHadirZikri = $_POST['TepatHadirZikri'];
            $KeaktifanZikri =  $_POST['KeaktifanZikri'];
            $InisiatifZikri =  $_POST['InisiatifZikri'];
            $SikapZikri =  $_POST['SikapZikri'];
            $KomunikasiZikri =  $_POST['KomunikasiZikri'];

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

        }
    
    
    
    
    
        //Tabel Fillah
        // getNilaiFillah($koneksi, $Periode);
        if(empty($_POST['TJPeranFillah']) AND empty($_POST['TepatHadirFillah']) AND empty($_POST['KeaktifanFillah']) AND empty($_POST['InisiatifFillah'])
        AND empty($_POST['SikapFillah']) AND empty($_POST['KomunikasiFillah'])){
            $jumlahFillah = 0;
        }else{
            $TJPeranFillah = $_POST['TJPeranFillah'];
            $TepatHadirFillah = $_POST['TepatHadirFillah'];
            $KeaktifanFillah =  $_POST['KeaktifanFillah'];
            $InisiatifFillah =  $_POST['InisiatifFillah'];
            $SikapFillah =  $_POST['SikapFillah'];
            $KomunikasiFillah =  $_POST['KomunikasiFillah'];
        
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
        }
    
    
    
        
        //Tabel Meilizka
        // getNilaiMeilizka($koneksi, $Periode);
        if(empty($_POST['TJPeranMeilizka']) AND empty($_POST['TepatHadirMeilizka']) AND empty($_POST['KeaktifanMeilizka']) AND empty($_POST['InisiatifMeilizka'])
        AND empty($_POST['SikapMeilizka']) AND empty($_POST['KomunikasiMeilizka'])){
            $jumlahMeilizka = 0;
        }else{
            $TJPeranMeilizka = $_POST['TJPeranMeilizka'];
            $TepatHadirMeilizka = $_POST['TepatHadirMeilizka'];
            $KeaktifanMeilizka =  $_POST['KeaktifanMeilizka'];
            $InisiatifMeilizka =  $_POST['InisiatifMeilizka'];
            $SikapMeilizka =  $_POST['SikapMeilizka'];
            $KomunikasiMeilizka =  $_POST['KomunikasiMeilizka'];
            
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
        }
    
    




        //Tabel Kendanan
        // getNilaiKendanan($koneksi, $Periode);
        if(empty($_POST['TJPeranKendanan']) AND empty($_POST['TepatHadirKendanan']) AND empty($_POST['KeaktifanKendanan']) AND empty($_POST['InisiatifKendanan'])
        AND empty($_POST['SikapKendanan']) AND empty($_POST['KomunikasiKendanan'])){
            $jumlahKendanan = 0;
        }else{
            $TJPeranKendanan = $_POST['TJPeranKendanan'];
            $TepatHadirKendanan = $_POST['TepatHadirKendanan'];
            $KeaktifanKendanan =  $_POST['KeaktifanKendanan'];
            $InisiatifKendanan =  $_POST['InisiatifKendanan'];
            $SikapKendanan =  $_POST['SikapKendanan'];
            $KomunikasiKendanan =  $_POST['KomunikasiKendanan'];
            
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
        }




        //Tabel Alya
        // getNilaiAlya($koneksi, $Periode);
        if(empty($_POST['TJPeranAlya']) AND empty($_POST['TepatHadirAlya']) AND empty($_POST['KeaktifanAlya']) AND empty($_POST['InisiatifAlya'])
        AND empty($_POST['SikapAlya']) AND empty($_POST['KomunikasiAlya'])){
            $jumlahAlya = 0;
        }else{
            $TJPeranAlya = $_POST['TJPeranAlya'];
            $TepatHadirAlya = $_POST['TepatHadirAlya'];
            $KeaktifanAlya =  $_POST['KeaktifanAlya'];
            $InisiatifAlya =  $_POST['InisiatifAlya'];
            $SikapAlya =  $_POST['SikapAlya'];
            $KomunikasiAlya =  $_POST['KomunikasiAlya'];
        
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
        }




        //Tabel Bayu
        // getNilaiBayu($koneksi, $Periode);
        if(empty($_POST['TJPeranBayu']) AND empty($_POST['TepatHadirBayu']) AND empty($_POST['KeaktifanBayu']) AND empty($_POST['InisiatifBayu'])
        AND empty($_POST['SikapBayu']) AND empty($_POST['KomunikasiBayu'])){
            $jumlahBayu = 0;
        }else{
            $TJPeranBayu = $_POST['TJPeranBayu'];
            $TepatHadirBayu = $_POST['TepatHadirBayu'];
            $KeaktifanBayu =  $_POST['KeaktifanBayu'];
            $InisiatifBayu =  $_POST['InisiatifBayu'];
            $SikapBayu =  $_POST['SikapBayu'];
            $KomunikasiBayu =  $_POST['KomunikasiBayu'];
        
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
        }




        //Tabel Regis
        // getNilaiRegis($koneksi, $Periode);
        if(empty($_POST['TJPeranRegis']) AND empty($_POST['TepatHadirRegis']) AND empty($_POST['KeaktifanRegis']) AND empty($_POST['InisiatifRegis'])
        AND empty($_POST['SikapRegis']) AND empty($_POST['KomunikasiRegis'])){
            $jumlahRegis = 0;
        }else{
            $TJPeranRegis = $_POST['TJPeranRegis'];
            $TepatHadirRegis = $_POST['TepatHadirRegis'];
            $KeaktifanRegis =  $_POST['KeaktifanRegis'];
            $InisiatifRegis =  $_POST['InisiatifRegis'];
            $SikapRegis =  $_POST['SikapRegis'];
            $KomunikasiRegis =  $_POST['KomunikasiRegis'];
        
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
        }




        //Tabel Revaldy
        // getNilaiRevaldy($koneksi, $Periode);
        if(empty($_POST['TJPeranRevaldy']) AND empty($_POST['TepatHadirRevaldy']) AND empty($_POST['KeaktifanRevaldy']) AND empty($_POST['InisiatifRevaldy'])
        AND empty($_POST['SikapRevaldy']) AND empty($_POST['KomunikasiRevaldy'])){
            $jumlahRevaldy = 0;
        }else{
            $TJPeranRevaldy = $_POST['TJPeranRevaldy'];
            $TepatHadirRevaldy = $_POST['TepatHadirRevaldy'];
            $KeaktifanRevaldy =  $_POST['KeaktifanRevaldy'];
            $InisiatifRevaldy =  $_POST['InisiatifRevaldy'];
            $SikapRevaldy =  $_POST['SikapRevaldy'];
            $KomunikasiRevaldy =  $_POST['KomunikasiRevaldy'];
        
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
        }




        //Tabel Rangga
        // getNilaiRangga($koneksi, $Periode);
        if(empty($_POST['TJPeranRangga']) AND empty($_POST['TepatHadirRangga']) AND empty($_POST['KeaktifanRangga']) AND empty($_POST['InisiatifRangga'])
        AND empty($_POST['SikapRangga']) AND empty($_POST['KomunikasiRangga'])){
            $jumlahRangga = 0;
        }else{
            $TJPeranRangga = $_POST['TJPeranRangga'];
            $TepatHadirRangga = $_POST['TepatHadirRangga'];
            $KeaktifanRangga =  $_POST['KeaktifanRangga'];
            $InisiatifRangga =  $_POST['InisiatifRangga'];
            $SikapRangga =  $_POST['SikapRangga'];
            $KomunikasiRangga =  $_POST['KomunikasiRangga'];
        
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
        }





        //Hasil
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
    }else{
        $_POST['nama'] = "Nilai Belum Ditentukan";
        $_POST['nilai'] = 0;
    }
    $_POST['TJPeran'] = $TJPeran;
}

?>