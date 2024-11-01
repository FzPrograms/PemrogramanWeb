<?php
// NIM saya adalah 220312601080
echo 'NIM = 220312601080';
// a)
echo '<br>a) ';
$jumlah_a = 1;
echo $jumlah_a;
for ($i=2; $i<=80; $i++){
    $jumlah_a = $jumlah_a+$i;
    echo '+' .$i;
}
echo '= '. $jumlah_a.'<br>';

// b)
echo '<br>b) Cara pertama <br>';
$jumlah_b = 2;
echo $jumlah_b;
for ($j=4; $j<=80; $j=$j+2){
    $jumlah_b = $jumlah_b+$j;
    echo '+' .$j;
}
echo '= '. $jumlah_b;

echo '<br>Cara kedua <br>';
$jumlah_b = 2;
echo $jumlah_b;
for ($j=3; $j<=80; $j++){
    if ($j%2==0){
        $jumlah_b = $jumlah_b+$j;
        echo '+' .$j;
    }
}
echo '= '. $jumlah_b.'<br>';

// c)
echo '<br>c) ';
$nim = 2;
echo 'Angka terakhir NIM = 0, 0+2 = '.$nim .'<br>';
for ($k=1; $k<=$nim; $k++){
    for($l=1; $l<=$k; $l++){
        echo '*';
    }
    echo '<br>';
}


// d)
echo '<br>d)';
$n = 3;
echo "<table border='1' cellspacing='0' cellpadding='5'>"; 
for ($m=1; $m<=$n; $m++) {
    echo "<tr>"; 
    for ($o=1; $o<=$n; $o++) {
        echo "<td>($m,$o)</td>"; 
    }
    echo "</tr>";
}
echo "</table>"; 

?>