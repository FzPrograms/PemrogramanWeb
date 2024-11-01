<?php
    echo "Selamat datang di fotokopi KAPAL LAWT <br>";

    $lembaran=158;
    
    if($lembaran > 200){
        $harga = 80;
    }elseif($lembaran >= 100){
        $harga = 100;
    }else{
        $harga = 150;
    }

    $biaya = $lembaran * $harga;

    echo "Anda ingin fotokopi sebanyak ".number_format($lembaran)." lembar, sehingga biayanya sebesar Rp.".number_format($biaya,2,",",".");
?> 