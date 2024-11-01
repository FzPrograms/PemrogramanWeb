<?php
    echo "Bilangan bulat kelipatan 10 s/d 100 antara lain";
    for($i=10; $i<=100; $i=$i+10){
        echo ", $i";
    }
    
    echo "<br/>Bilangan bulat kelipatan 10 s/d 100 antara lain";
    for($j=5; $j<=100; $j++){
        if($j%10==0){
            echo ", $j";
        }
    }
?>