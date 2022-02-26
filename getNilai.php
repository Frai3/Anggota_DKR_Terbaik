<?php

    // echo date('Y');
    session_start();
    
    //Mengambil data nilai US001
    function getNilaiZikri($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US001' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranZikri'] = $data['TJPeran'];
            $_POST['TepatHadirZikri'] = $data['TepatHadir'];
            $_POST['KeaktifanZikri'] = $data['Keaktifan'];
            $_POST['InisiatifZikri'] = $data['Inisiatif'];
            $_POST['SikapZikri'] = $data['Sikap'];
            $_POST['KomunikasiZikri'] = $data['Komunikasi'];
    
        }
    }
    
    //Mengambil data nilai US002
    function getNilaiFillah($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US002' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranFillah'] = $data['TJPeran'];
            $_POST['TepatHadirFillah'] = $data['TepatHadir'];
            $_POST['KeaktifanFillah'] = $data['Keaktifan'];
            $_POST['InisiatifFillah'] = $data['Inisiatif'];
            $_POST['SikapFillah'] = $data['Sikap'];
            $_POST['KomunikasiFillah'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US003
    function getNilaiMeilizka($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US003' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranMeilizka'] = $data['TJPeran'];
            $_POST['TepatHadirMeilizka'] = $data['TepatHadir'];
            $_POST['KeaktifanMeilizka'] = $data['Keaktifan'];
            $_POST['InisiatifMeilizka'] = $data['Inisiatif'];
            $_POST['SikapMeilizka'] = $data['Sikap'];
            $_POST['KomunikasiMeilizka'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US004
    function getNilaiKendanan($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US004' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranKendanan'] = $data['TJPeran'];
            $_POST['TepatHadirKendanan'] = $data['TepatHadir'];
            $_POST['KeaktifanKendanan'] = $data['Keaktifan'];
            $_POST['InisiatifKendanan'] = $data['Inisiatif'];
            $_POST['SikapKendanan'] = $data['Sikap'];
            $_POST['KomunikasiKendanan'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US005
    function getNilaiAlya($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US005' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranAlya'] = $data['TJPeran'];
            $_POST['TepatHadirAlya'] = $data['TepatHadir'];
            $_POST['KeaktifanAlya'] = $data['Keaktifan'];
            $_POST['InisiatifAlya'] = $data['Inisiatif'];
            $_POST['SikapAlya'] = $data['Sikap'];
            $_POST['KomunikasiAlya'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US006
    function getNilaiBayu($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US006' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranBayu'] = $data['TJPeran'];
            $_POST['TepatHadirBayu'] = $data['TepatHadir'];
            $_POST['KeaktifanBayu'] = $data['Keaktifan'];
            $_POST['InisiatifBayu'] = $data['Inisiatif'];
            $_POST['SikapBayu'] = $data['Sikap'];
            $_POST['KomunikasiBayu'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US007
    function getNilaiRegis($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US007' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranRegis'] = $data['TJPeran'];
            $_POST['TepatHadirRegis'] = $data['TepatHadir'];
            $_POST['KeaktifanRegis'] = $data['Keaktifan'];
            $_POST['InisiatifRegis'] = $data['Inisiatif'];
            $_POST['SikapRegis'] = $data['Sikap'];
            $_POST['KomunikasiRegis'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US008
    function getNilaiRevaldy($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US008' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranRevaldy'] = $data['TJPeran'];
            $_POST['TepatHadirRevaldy'] = $data['TepatHadir'];
            $_POST['KeaktifanRevaldy'] = $data['Keaktifan'];
            $_POST['InisiatifRevaldy'] = $data['Inisiatif'];
            $_POST['SikapRevaldy'] = $data['Sikap'];
            $_POST['KomunikasiRevaldy'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US009
    function getNilaiRangga($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US009' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeranRangga'] = $data['TJPeran'];
            $_POST['TepatHadirRangga'] = $data['TepatHadir'];
            $_POST['KeaktifanRangga'] = $data['Keaktifan'];
            $_POST['InisiatifRangga'] = $data['Inisiatif'];
            $_POST['SikapRangga'] = $data['Sikap'];
            $_POST['KomunikasiRangga'] = $data['Komunikasi'];
    
        }
    }

    function getNilaiTJPeran($koneksi, $Periode){
        $queryGetTJPeran = mysqli_query($koneksi, "SELECT SUM(TJPeran * TJPeran) AS TJPeran FROM nilai");
        while($data = mysqli_fetch_array($queryGetTJPeran)){
    
            $_POST['TJPeran'] = $data['TJPeran'];
    
        }
    }
    function getNilaiTepatHadir($koneksi, $Periode){
        $queryGetTepatHadir = mysqli_query($koneksi, "SELECT SUM(TepatHadir * TepatHadir) AS TepatHadir FROM nilai");
        while($data = mysqli_fetch_array($queryGetTepatHadir)){
    
            $_POST['TepatHadir'] = $data['TepatHadir'];
    
        }
    }
    function getNilaiKeaktifan($koneksi, $Periode){
        $queryGetKeaktifan = mysqli_query($koneksi, "SELECT SUM(Keaktifan * Keaktifan) AS Keaktifan FROM nilai");
        while($data = mysqli_fetch_array($queryGetKeaktifan)){
    
            $_POST['Keaktifan'] = $data['Keaktifan'];
    
        }
    }
    function getNilaiInisiatif($koneksi, $Periode){
        $queryGetInisiatif = mysqli_query($koneksi, "SELECT SUM(Inisiatif * Inisiatif) AS Inisiatif FROM nilai");
        while($data = mysqli_fetch_array($queryGetInisiatif)){
    
            $_POST['Inisiatif'] = $data['Inisiatif'];
    
        }
    }
    function getNilaiSikap($koneksi, $Periode){
        $queryGetSikap = mysqli_query($koneksi, "SELECT SUM(Sikap * Sikap) AS Sikap FROM nilai");
        while($data = mysqli_fetch_array($queryGetSikap)){
    
            $_POST['Sikap'] = $data['Sikap'];
    
        }
    }
    function getNilaiKomunikasi($koneksi, $Periode){
        $queryGetKomunikasi = mysqli_query($koneksi, "SELECT SUM(Komunikasi * Komunikasi) AS Komunikasi FROM nilai");
        while($data = mysqli_fetch_array($queryGetKomunikasi)){
    
            $_POST['Komunikasi'] = $data['Komunikasi'];
    
        }
    }
    
?>