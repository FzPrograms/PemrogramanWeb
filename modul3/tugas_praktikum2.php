<?php
    echo "Hasil menggunakan if-else <br>";
    
    $nilaiAngka = 1000;

    if ($nilaiAngka<=100){
        $nilaiHuruf = "A";
        $keterangan = "Baik Sekali";
    }elseif ($nilaiAngka <=89){
        $nilaiHuruf = "B";
        $keterangan = "Baik";
    }elseif ($nilaiAngka <=75){
        $nilaiHuruf = "C";
        $keterangan = "Cukup";
    }elseif ($nilaiAngka <=59){
        $nilaiHuruf = "D";
        $keterangan = "Hampir Cukup";
    }elseif ($nilaiAngka >= 0 && $nilaiAngka <=49){
        $nilaiHuruf = "E";
        $keterangan = "Kurang";
    }else {
        $nilaiHuruf = "Tidak Masuk Akal";
        $keterangan = "Anomali";
    }

    echo "Nilai anda adalah <b>". $nilaiAngka ."</b> sehingga anda masuk ke dalam kategori <b>". $nilaiHuruf ."</b> yang merupakan <b>" .$keterangan. "</b> <br>";

    echo "<br>Hasil menggunakan switch-case <br>";

    switch($nilaiAngka){
        case $nilaiAngka <=100: 
            $nilaiHuruf = "A";
            $keterangan = "Baik Sekali";
            break;
        case $nilaiAngka <=89: 
            $nilaiHuruf = "B";
            $keterangan = "Baik";
            break;
        case $nilaiAngka <=75: 
            $nilaiHuruf = "C";
            $keterangan = "Cukup";
            break;
        case $nilaiAngka <=59: 
            $nilaiHuruf = "D";
            $keterangan = "Hampir Cukup";
            break;
        case $nilaiAngka >= 0 && $nilaiAngka <=49: 
            $nilaiHuruf = "E";
            $keterangan = "Kurang";
            break;
        default:
            $nilaiHuruf = "Tidak Masuk Akal";
            $keterangan = "Anomali";
            break;

        }
    echo "Nilai anda adalah <b>". $nilaiAngka ."</b> sehingga anda masuk ke dalam kategori <b>". $nilaiHuruf ."</b> yang merupakan <b>" .$keterangan. "</b> <br>";
?>