<?php 
    $bulan = date("M");
    switch($bulan){
        case "Jan": $namabulan = "Januari"; break;
        case "Feb": $namabulan = "Februari"; break;
        case "Mar": $namabulan = "Maret"; break;
        case "Apr": $namabulan = "April"; break;
        case "May": $namabulan = "Mei"; break;
        case "Jun": $namabulan = "Juni"; break;
        case "Jul": $namabulan = "Juli"; break;
        case "Aug": $namabulan = "Agustus"; break;
        case "Sept": $namabulan = "September"; break;
        case "Oct": $namabulan = "Oktober"; break;
        case "Nov": $namabulan = "November"; break;
        case "Dec": $namabulan = "Desember"; break;
    }
    echo "Nama bulan sekarang adalah ".$namabulan;
?>