<?php

$nmbr = [80,90,75,100,85,100,66];

$cari = array_count_values($nmbr);
$max = max($cari);
$itung = array_search($max,$cari);
echo "Jumlah angka $itung = $max";
