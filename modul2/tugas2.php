<?php
    $radius = 6;
    $tinggi = 8;

    $garisPelukis = sqrt($radius**2 + $tinggi**2);

    $luasAlas = pi()*($radius**2);

    $luasPermukaan = pi()*($radius**2) + pi()*$radius*$garisPelukis;

    echo "Luas Alas Bangun Ruang Kerucut = " . number_format($luasAlas, 2, ",", ".") . "cm<sup>2</sup></sup>" ."<br>";
    echo "Luas Permukaan Bangun Ruang Kerucut = " . number_format($luasPermukaan, 2, ",", ".") . "cm<sup>2</sup>";

?>