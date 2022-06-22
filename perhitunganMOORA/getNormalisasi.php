<?php

    include 'getJumlah.php';
    include '../getNilai.php';

    //SQRT adalah akar pangkat 2
    //POW adalah pangkat

    //SQRT(SUM(PoinNilai^2))
    $Poin1 = SQRT(POW($_POST['Poin1KN001'],2) + POW($_POST['Poin1KN002'],2));
    $Poin2 = SQRT(POW($_POST['Poin2KN001'],2) + POW($_POST['Poin2KN002'],2));        
    $Poin3 = SQRT(POW($_POST['Poin3KN001'],2) + POW($_POST['Poin3KN002'],2));
    $Poin4 = SQRT(POW($_POST['Poin4KN001'],2) + POW($_POST['Poin4KN002'],2));
    $Poin5 = SQRT(POW($_POST['Poin5KN001'],2) + POW($_POST['Poin5KN002'],2));
    $Poin6 = SQRT(POW($_POST['Poin6KN001'],2) + POW($_POST['Poin6KN002'],2));

    $Poin1KN1 = $Poin1KN1 / $Poin1;
    $Poin2KN1 = $Poin2KN1 / $Poin2;
    $Poin3KN1 = $Poin3KN1 / $Poin3;
    $Poin4KN1 = $Poin4KN1 / $Poin4;
    $Poin5KN1 = $Poin5KN1 / $Poin5;
    $Poin6KN1 = $Poin6KN1 / $Poin6;

    $Poin1KN2 = $Poin1KN2 / $Poin1;
    $Poin2KN2 = $Poin2KN2 / $Poin2;
    $Poin3KN2 = $Poin3KN2 / $Poin3;
    $Poin4KN2 = $Poin4KN2 / $Poin4;
    $Poin5KN2 = $Poin5KN2 / $Poin5;
    $Poin6KN2 = $Poin6KN2 / $Poin6;

?>