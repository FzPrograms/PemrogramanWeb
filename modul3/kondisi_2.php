<?php
    $nilai = 80;

    if ($nilai >= 90){
        echo "Nilai anda $nilai, Bagus sekali bung!!";
    }elseif ($nilai >= 75){
        echo "Nilai anda $nilai, Kerja bagus!";
    }elseif ($nilai >= 50){
        echo "Nilai anda $nilai, Kita butuh medkit";
    }else {
        echo "Nilai anda kurang sekali bung, cuma $nilai";
    }
?>