<?php

$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

echo"Angka yang ada di dalam kedua variable";
echo"<br>";

$inter = array_intersect($bil1,$bil2);
foreach($inter as $i){
    echo $i . " ";
}
echo"<br>";
echo"Angka yang tidak ada di dalam kedua variable";
echo"<br>"; 
$diff = array_diff($bil1,$bil2);
foreach($diff as $d){
    echo $d . " ";
}

    

