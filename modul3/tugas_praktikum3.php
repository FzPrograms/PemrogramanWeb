<?php
    $bulan = date(2);
    $tahun = 1900;

    switch ($bulan){
        case $bulan==4 || $bulan==6 || $bulan==7 || $bulan==9 || $bulan==11: $jumlahHari=30; break;
        case $bulan==1 || $bulan==3 || $bulan==5 || $bulan==8 || $bulan==10 || $bulan==12: $jumlahHari=31; break;
        case $bulan==2:
            switch($tahun){
                case $tahun%4==0 && $tahun%100==0 && $tahun%400==0: $jumlahHari=29; break;
                case $tahun%4==0 && $tahun%100!=0: $jumlahHari=29; break;
                case $tahun%4!=0: $jumlahHari=28; break; 
                default: $jumlahHari=28; break; 
            }
    }
    echo "Jumlah hari pada bulan ke -$bulan tahun $tahun adalah ". $jumlahHari;

?>