<?php
    echo "Bilangan bulat kelipatan 6 mulai dari 3 s/d 127 antara lain";
    for($i=3; $i<=127; $i++){
        if($i%6==0){
            echo ", $i";
        }
    }

?>