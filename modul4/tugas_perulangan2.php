<?php
    $i = 2;
    $jumlah = 0;
    while ($i<=50){
        $jumlah = $jumlah + $i;
        $i++;
    }
    echo "Penjumlahan 2-50 dengan while-loop = $jumlah<br/>";
    
    $total = 0;
    for ($j=2; $j<=50; $j++){
        $total = $total + $i;
    }
    echo "Penjumlahan 2-50 dengan for-loop = $jumlah<br/>";
?>