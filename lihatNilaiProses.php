<?php
    
    function hasilNilai(){
        include 'class.php';
        include 'getNilai.php';
        include 'getBobotNilai.php';
        $Periode = date('Y');
        include 'koneksi.php';

        // $queryGetPoinNilai = mysqli_query($koneksi, "SELECT * FROM poinnilai");
        // $cekGetPoinNilai = mysqli_num_rows($queryGetPoinNilai);
        // $Poin = array();
        // $DataPoin = array();

        // while($row = mysqli_fetch_assoc($queryGetPoinNilai)){
        //     $Poin[] = $row;
        // }


        getPenilaianKN001($koneksi, $Periode);
        getPenilaianKN002($koneksi, $Periode);

        // $DataPoin = $_POST['DataPoin'];

        // for($i=0; $i<count($Poin); $i++){
        //     if($i != 0){
        //         $arr = array_merge($DataPoin[$i], $arr);
        //     }else{
        //         $arr = $DataPoin[$i];
        //     }
        // }

        // $obj_baru = new array_object();

        // for($i=0; $i<count($Poin); $i++){
        //     $data = strtolower($Poin[$i]['PoinNilai']);
        // }

        // $ubah_objek = $obj_baru->arrayKeObject($arr);
        // $ubah_array = $obj_baru->objectKeArray($ubah_objek);
        // foreach ($ubah_array as $kolom_arr=>$isi_arr)
        // {
        //     $ubah_array[$kolom_arr];
        // }

        // getNilaiKandidat1($koneksi, $Periode);
        // getNilaiFillah($koneksi, $Periode);
        // getNilaiMeilizka($koneksi, $Periode);
        // getNilaiKendanan($koneksi, $Periode);
        // getNilaiAlya($koneksi, $Periode);
        // getNilaiBayu($koneksi, $Periode);
        // getNilaiRegis($koneksi, $Periode);
        // getNilaiRevaldy($koneksi, $Periode);
        // getNilaiRangga($koneksi, $Periode);


        //SQRT adalah akar pangkat 2
        //POW adalah pangkat
        //NORMALISASI
        $Poin1 = SQRT(POW($_POST['Poin1KN001'],2) + POW($_POST['Poin1KN002'],2));
        $Poin2 = SQRT(POW($_POST['Poin2KN001'],2) + POW($_POST['Poin2KN002'],2));        
        $Poin3 = SQRT(POW($_POST['Poin3KN001'],2) + POW($_POST['Poin3KN002'],2));
        $Poin4 = SQRT(POW($_POST['Poin4KN001'],2) + POW($_POST['Poin4KN002'],2));
        $Poin5 = SQRT(POW($_POST['Poin5KN001'],2) + POW($_POST['Poin5KN002'],2));
        $Poin6 = SQRT(POW($_POST['Poin6KN001'],2) + POW($_POST['Poin6KN002'],2));

        getBobotNilai();
        $BobotPoin1 = $_POST['Poin1'];
        $BobotPoin2 = $_POST['Poin2'];
        $BobotPoin3 = $_POST['Poin3'];
        $BobotPoin4 = $_POST['Poin4'];
        $BobotPoin5 = $_POST['Poin5'];
        $BobotPoin6 = $_POST['Poin6'];

    if($Poin1 != 0){
        //Bobot nilai
        $nilaiTJPeran = 20/100;
        $nilaiTepatHadir = 20/100;
        $nilaiKeaktifan = 15/100;
        $nilaiInisiatif = 15/100;
        $nilaiSikap = 20/100;
        $nilaiKomunikasi = 10/100;
        
        //Tabel Kandidat 1
        if(empty($_POST['Poin1KN001']) AND empty($_POST['Poin2KN001']) AND empty($_POST['Poin3KN001'])
        AND empty($_POST['Poin4KN001']) AND empty($_POST['Poin5KN001']) AND empty($_POST['Poin6KN001'])){
            $jumlahKandidat1 = 0;
        }else{
            
            $Poin1KN1 = $_POST['Poin1KN001'];
            $Poin2KN1 = $_POST['Poin2KN001'];
            $Poin3KN1 = $_POST['Poin3KN001'];
            $Poin4KN1 = $_POST['Poin4KN001'];
            $Poin5KN1 = $_POST['Poin5KN001'];
            $Poin6KN1 = $_POST['Poin6KN001'];

            //Normalisasi Tabel Kandidat1
            $Poin1KN1 = $Poin1KN1 / $Poin1;
            $Poin2KN1 = $Poin2KN1 / $Poin2;
            $Poin3KN1 = $Poin3KN1 / $Poin3;
            $Poin4KN1 = $Poin4KN1 / $Poin4;
            $Poin5KN1 = $Poin5KN1 / $Poin5;
            $Poin6KN1 = $Poin6KN1 / $Poin6;
        
            //Normalisasi * Bobot Tabel Kandidat1
            $Poin1KN1 = $Poin1KN1 * $BobotPoin1;
            $Poin2KN1 = $Poin2KN1 * $BobotPoin2;
            $Poin3KN1 = $Poin3KN1 * $BobotPoin3;
            $Poin4KN1 = $Poin4KN1 * $BobotPoin4;
            $Poin5KN1 = $Poin5KN1 * $BobotPoin5;
            $Poin6KN1 = $Poin6KN1 * $BobotPoin6;

            //Jumlah Hasil Kandidat1
            $jumlahKandidat1 = $Poin1KN1 + $Poin2KN1 + $Poin3KN1 + $Poin4KN1 + $Poin5KN1 + $Poin6KN1;

        }
    
    
        //Tabel Kandidat 1
        if(empty($_POST['Poin1KN002']) AND empty($_POST['Poin2KN002']) AND empty($_POST['Poin3KN002'])
        AND empty($_POST['Poin4KN002']) AND empty($_POST['Poin5KN002']) AND empty($_POST['Poin6KN002'])){
            $jumlahKandidat2 = 0;
        }else{
            
            $Poin1KN2 = $_POST['Poin1KN002'];
            $Poin2KN2 = $_POST['Poin2KN002'];
            $Poin3KN2 = $_POST['Poin3KN002'];
            $Poin4KN2 = $_POST['Poin4KN002'];
            $Poin5KN2 = $_POST['Poin5KN002'];
            $Poin6KN2 = $_POST['Poin6KN002'];

            //Normalisasi Tabel Kandidat1
            $Poin1KN2 = $Poin1KN2 / $Poin1;
            $Poin2KN2 = $Poin2KN2 / $Poin2;
            $Poin3KN2 = $Poin3KN2 / $Poin3;
            $Poin4KN2 = $Poin4KN2 / $Poin4;
            $Poin5KN2 = $Poin5KN2 / $Poin5;
            $Poin6KN2 = $Poin6KN2 / $Poin6;
        
            //Normalisasi * Bobot Tabel Kandidat1
            $Poin1KN2 = $Poin1KN2 * $BobotPoin1;
            $Poin2KN2 = $Poin2KN2 * $BobotPoin2;
            $Poin3KN2 = $Poin3KN2 * $BobotPoin3;
            $Poin4KN2 = $Poin4KN2 * $BobotPoin4;
            $Poin5KN2 = $Poin5KN2 * $BobotPoin5;
            $Poin6KN2 = $Poin6KN2 * $BobotPoin6;

            //Jumlah Hasil Kandidat1
            $jumlahKandidat2 = $Poin1KN2 + $Poin2KN2 + $Poin3KN2 + $Poin4KN2 + $Poin5KN2 + $Poin6KN2;

        }
    

        //Hasil
        $nilaiMax = MAX($jumlahKandidat1, $jumlahKandidat2);
        
        if($nilaiMax == $jumlahKandidat1){
            // $nama = "Pengguna 1";
            $kode = '1';
        }else if($nilaiMax == $jumlahKandidat2){
            // $nama = "Pengguna 2";
            $kode = '2';
        }
            // $_POST['nama'] = $nama;
            $_POST['kode'] = $kode;
            $_POST['nilai1'] = $jumlahKandidat1;
            $_POST['nilai2'] = $jumlahKandidat2;
    }else{
        // $_POST['nama'] = "Nilai Belum Ditentukan";
        $_POST['nilai'] = 0;
    }
    // $_POST['TJPeran'] = $TJPeran;
    
    // echo $TJPeranAlya; //Jika ingin menampilkan nilai TJPeran
    // echo $jumlahAlya;
}



?>