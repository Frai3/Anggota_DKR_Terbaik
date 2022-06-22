<?php

    include 'getNormalisasi.php';
    include '../getBobotNilai.php';

    getBobotNilai();
    $BobotPoin1 = $_POST['Poin1'];
    $BobotPoin2 = $_POST['Poin2'];
    $BobotPoin3 = $_POST['Poin3'];
    $BobotPoin4 = $_POST['Poin4'];
    $BobotPoin5 = $_POST['Poin5'];
    $BobotPoin6 = $_POST['Poin6'];
    
    $Poin1KN1 = $Poin1KN1 * $BobotPoin1;
    $Poin2KN1 = $Poin2KN1 * $BobotPoin2;
    $Poin3KN1 = $Poin3KN1 * $BobotPoin3;
    $Poin4KN1 = $Poin4KN1 * $BobotPoin4;
    $Poin5KN1 = $Poin5KN1 * $BobotPoin5;
    $Poin6KN1 = $Poin6KN1 * $BobotPoin6;
            
    $Poin1KN2 = $Poin1KN2 * $BobotPoin1;
    $Poin2KN2 = $Poin2KN2 * $BobotPoin2;
    $Poin3KN2 = $Poin3KN2 * $BobotPoin3;
    $Poin4KN2 = $Poin4KN2 * $BobotPoin4;
    $Poin5KN2 = $Poin5KN2 * $BobotPoin5;
    $Poin6KN2 = $Poin6KN2 * $BobotPoin6;

?>