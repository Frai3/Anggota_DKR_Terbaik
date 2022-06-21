<?php

    if(!function_exists('getPenilaianKN002')){
        //Mengambil data nilai US001
        function getPenilaianKN002($koneksi, $Periode){

            $queryGetPoinNilai = mysqli_query($koneksi, "SELECT * FROM poinnilai");
            $cekGetPoinNilai = mysqli_num_rows($queryGetPoinNilai);
            $Poin = array();
            $DataPoin = array();

            while($row = mysqli_fetch_assoc($queryGetPoinNilai)){
                $Poin[] = $row;
            }

            for($i=0; $i<count($Poin); $i++){
                $data = $Poin[$i]['PoinNilai'];
                $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(Nilai) AS '$data'
                FROM nilai
                WHERE ID_Kandidat = 'KN002'AND PoinNilai = '$data' AND Periode = '$Periode'");
                $cekGetNilai = mysqli_num_rows($queryGetNilai);
                $dataNilai = mysqli_fetch_assoc($queryGetNilai);
                $DataPoin[$i] = $dataNilai;
                $_POST['DataPoin'][$i] = $DataPoin[$i];
            }

            // // print_r($DataPoin[2]);
            // $queryGetNilaiTJPeran = mysqli_query($koneksi, "SELECT SUM(Nilai) AS TJPeran WHERE ID_Kandidat = 'KN002' AND PoinNilai = 'TJPeran' AND Periode = '$Periode'");
            // while($data = mysqli_fetch_array($queryGetNilaiTJPeran)){
        
            //     $_POST['TJPeranKN002'] = $data['TJPeran'];
        
            // }

            // $queryGetNilaiTepatHadir = mysqli_query($koneksi, "SELECT SUM(Nilai) AS TepatHadir WHERE ID_Kandidat = 'KN002' AND PoinNilai = 'TepatHadir' AND Periode = '$Periode'");
            // while($data = mysqli_fetch_array($queryGetNilaiTepatHadir)){
        
            //     $_POST['TepatHadirKN002'] = $data['TepatHadir'];
        
            // }

            // $queryGetNilaiSikap = mysqli_query($koneksi, "SELECT SUM(Nilai) AS Sikap WHERE ID_Kandidat = 'KN002' AND PoinNilai = 'Sikap' AND Periode = '$Periode'");
            // while($data = mysqli_fetch_array($queryGetNilaiSikap)){
        
            //     $_POST['SikapKN002'] = $data['Sikap'];
        
            // }

            // $queryGetNilaiKomunikasi = mysqli_query($koneksi, "SELECT SUM(Nilai) AS Komunikasi WHERE ID_Kandidat = 'KN002' AND PoinNilai = 'Komunikasi' AND Periode = '$Periode'");
            // while($data = mysqli_fetch_array($queryGetNilaiKomunikasi)){
        
            //     $_POST['KomunikasiKN002'] = $data['Komunikasi'];
        
            // }

            // $queryGetNilaiKeaktifan = mysqli_query($koneksi, "SELECT SUM(Nilai) AS Keaktifan WHERE ID_Kandidat = 'KN002' AND PoinNilai = 'Keaktifan' AND Periode = '$Periode'");
            // while($data = mysqli_fetch_array($queryGetNilaiKeaktifan)){
        
            //     $_POST['KeaktifanKN002'] = $data['Keaktifan'];
        
            // }

            // $queryGetNilaiInisiatif = mysqli_query($koneksi, "SELECT SUM(Nilai) AS Inisiatif WHERE ID_Kandidat = 'KN002' AND PoinNilai = 'Inisiatif' AND Periode = '$Periode'");
            // while($data = mysqli_fetch_array($queryGetNilaiInisiatif)){
        
            //     $_POST['InisiatifKN002'] = $data['Inisiatif'];
        
            // }
        }
    }

    if(!function_exists('getNilaiZikri')){
        //Mengambil data nilai US001
        function getNilaiZikri($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK001' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranZikri'] = $data['TJPeran'];
                $_POST['TepatHadirZikri'] = $data['TepatHadir'];
                $_POST['KeaktifanZikri'] = $data['Keaktifan'];
                $_POST['InisiatifZikri'] = $data['Inisiatif'];
                $_POST['SikapZikri'] = $data['Sikap'];
                $_POST['KomunikasiZikri'] = $data['Komunikasi'];
        
            }
        }
    }

    if(!function_exists('getNilaiFillah')){

        //Mengambil data nilai US002
        function getNilaiFillah($koneksi, $Periode){
    
            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK002' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranFillah'] = $data['TJPeran'];
                $_POST['TepatHadirFillah'] = $data['TepatHadir'];
                $_POST['KeaktifanFillah'] = $data['Keaktifan'];
                $_POST['InisiatifFillah'] = $data['Inisiatif'];
                $_POST['SikapFillah'] = $data['Sikap'];
                $_POST['KomunikasiFillah'] = $data['Komunikasi'];
        
            }
        }

    }

    if(!function_exists('getNilaiMeilizka')){

        //Mengambil data nilai US003
        function getNilaiMeilizka($koneksi, $Periode){
    
            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK003' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranMeilizka'] = $data['TJPeran'];
                $_POST['TepatHadirMeilizka'] = $data['TepatHadir'];
                $_POST['KeaktifanMeilizka'] = $data['Keaktifan'];
                $_POST['InisiatifMeilizka'] = $data['Inisiatif'];
                $_POST['SikapMeilizka'] = $data['Sikap'];
                $_POST['KomunikasiMeilizka'] = $data['Komunikasi'];
        
            }
        }    

    }

    if(!function_exists('getNilaiKendanan')){
        
        //Mengambil data nilai US004
        function getNilaiKendanan($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK004' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranKendanan'] = $data['TJPeran'];
                $_POST['TepatHadirKendanan'] = $data['TepatHadir'];
                $_POST['KeaktifanKendanan'] = $data['Keaktifan'];
                $_POST['InisiatifKendanan'] = $data['Inisiatif'];
                $_POST['SikapKendanan'] = $data['Sikap'];
                $_POST['KomunikasiKendanan'] = $data['Komunikasi'];
        
            }
        }
        
    }

    if(!function_exists('getNilaiAlya')){

        //Mengambil data nilai US005
        function getNilaiAlya($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK005' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranAlya'] = $data['TJPeran'];
                $_POST['TepatHadirAlya'] = $data['TepatHadir'];
                $_POST['KeaktifanAlya'] = $data['Keaktifan'];
                $_POST['InisiatifAlya'] = $data['Inisiatif'];
                $_POST['SikapAlya'] = $data['Sikap'];
                $_POST['KomunikasiAlya'] = $data['Komunikasi'];
        
            }
        }

    }

    if(!function_exists('getNilaiBayu')){
            
        //Mengambil data nilai US006
        function getNilaiBayu($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK006' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranBayu'] = $data['TJPeran'];
                $_POST['TepatHadirBayu'] = $data['TepatHadir'];
                $_POST['KeaktifanBayu'] = $data['Keaktifan'];
                $_POST['InisiatifBayu'] = $data['Inisiatif'];
                $_POST['SikapBayu'] = $data['Sikap'];
                $_POST['KomunikasiBayu'] = $data['Komunikasi'];
        
            }
        }

    }

    if(!function_exists('getNilaiRegis')){

            //Mengambil data nilai US007
        function getNilaiRegis($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK007' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranRegis'] = $data['TJPeran'];
                $_POST['TepatHadirRegis'] = $data['TepatHadir'];
                $_POST['KeaktifanRegis'] = $data['Keaktifan'];
                $_POST['InisiatifRegis'] = $data['Inisiatif'];
                $_POST['SikapRegis'] = $data['Sikap'];
                $_POST['KomunikasiRegis'] = $data['Komunikasi'];
        
            }
        }

    }

    if(!function_exists('getNilaiRevaldy')){
        
        //Mengambil data nilai US008
        function getNilaiRevaldy($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK008' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranRevaldy'] = $data['TJPeran'];
                $_POST['TepatHadirRevaldy'] = $data['TepatHadir'];
                $_POST['KeaktifanRevaldy'] = $data['Keaktifan'];
                $_POST['InisiatifRevaldy'] = $data['Inisiatif'];
                $_POST['SikapRevaldy'] = $data['Sikap'];
                $_POST['KomunikasiRevaldy'] = $data['Komunikasi'];
        
            }
        }

    }

    if(!function_exists('getNilaiRangga')){
        
        //Mengambil data nilai US009
        function getNilaiRangga($koneksi, $Periode){

            $queryGetNilai = mysqli_query($koneksi, "SELECT SUM(TJPeran) AS TJPeran, SUM(TepatHadir) AS TepatHadir, SUM(Keaktifan) AS Keaktifan, SUM(Inisiatif) AS Inisiatif, SUM(Sikap) AS Sikap, SUM(Komunikasi) AS Komunikasi FROM nilai WHERE ID_UserOut = 'AK009' AND Periode = '$Periode'");
            while($data = mysqli_fetch_array($queryGetNilai)){
        
                $_POST['TJPeranRangga'] = $data['TJPeran'];
                $_POST['TepatHadirRangga'] = $data['TepatHadir'];
                $_POST['KeaktifanRangga'] = $data['Keaktifan'];
                $_POST['InisiatifRangga'] = $data['Inisiatif'];
                $_POST['SikapRangga'] = $data['Sikap'];
                $_POST['KomunikasiRangga'] = $data['Komunikasi'];
        
            }
        }

    }

?>