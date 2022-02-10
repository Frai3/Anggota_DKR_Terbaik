<?php

    // echo date('Y');
    session_start();

    $Username = $_SESSION['Username'];
    
    //Mengambil data nilai US002
    function getNilaiRaihan($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US002' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeran'] = $data['TJPeran'];
            $_POST['TepatHadir'] = $data['TepatHadir'];
            $_POST['Keaktifan'] = $data['Keaktifan'];
            $_POST['Inisiatif'] = $data['Inisiatif'];
            $_POST['Sikap'] = $data['Sikap'];
            $_POST['Komunikasi'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US003
    function getNilaiFrai($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US003' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeran'] = $data['TJPeran'];
            $_POST['TepatHadir'] = $data['TepatHadir'];
            $_POST['Keaktifan'] = $data['Keaktifan'];
            $_POST['Inisiatif'] = $data['Inisiatif'];
            $_POST['Sikap'] = $data['Sikap'];
            $_POST['Komunikasi'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US004
    function getNilaiRay($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US004' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeran'] = $data['TJPeran'];
            $_POST['TepatHadir'] = $data['TepatHadir'];
            $_POST['Keaktifan'] = $data['Keaktifan'];
            $_POST['Inisiatif'] = $data['Inisiatif'];
            $_POST['Sikap'] = $data['Sikap'];
            $_POST['Komunikasi'] = $data['Komunikasi'];
    
        }
    }

    //Mengambil data nilai US005
    function getNilaiMark($koneksi, $Periode){

        $queryGetNilai = mysqli_query($koneksi, "SELECT TJPeran, TepatHadir, Keaktifan, Inisiatif, Sikap, Komunikasi FROM nilai WHERE ID_UserIn = 'US005' AND Periode = '$Periode'");
        while($data = mysqli_fetch_array($queryGetNilai)){
    
            $_POST['TJPeran'] = $data['TJPeran'];
            $_POST['TepatHadir'] = $data['TepatHadir'];
            $_POST['Keaktifan'] = $data['Keaktifan'];
            $_POST['Inisiatif'] = $data['Inisiatif'];
            $_POST['Sikap'] = $data['Sikap'];
            $_POST['Komunikasi'] = $data['Komunikasi'];
    
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