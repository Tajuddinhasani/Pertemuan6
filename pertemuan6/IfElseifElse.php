<?php
    $harga_motor = 700;

    if($harga_motor > 600){
        $grade = "Mewah";
    }elseif($harga_motor > 450){
        $grade = "B";
    }elseif($harga_motor > 300){
        $grade = "C";
    }elseif($harga_motor > 120){
        $grade = "D";
    }elseif($harga_motor > 150){
        $grade = "E";
    }else{
        $grade = "F";
    }

    echo "Harga Sewa Motor Anda : $harga_motor Ribu<br>";
    echo "Grade : $grade";
?>