<?php

$age = [12,15,17,20,25,30,35,40,45,50];
$anak = 0;
$dewasa = 0;
echo"List Usia : ";
foreach($age as $umur){
    echo  " $umur ";
}
echo"<br>";
// $hitung = count($age);
// if($hitung >= 17){
//     echo"lorem";
// }else{
//     echo"si amet";
// }
foreach($age as $u){
    if($u >= 17 ){
        
        $dewasa++;
    }else{
        $anak++;
    }

   
}
echo"jumlah kategori dewasa : " . $dewasa . "<br>";
echo"jumlah kategori anak kecil : " . $anak;

// $dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
// $dewasa = 0;
// $anak2 = 0;
// foreach ($dataUsia as $usia) {
//     if ($usia <= 17) {
//         $anak2++;
//     } else {
//         $dewasa++;
//     }
// }

// echo "List Usia : " . implode(', ', $dataUsia);
// echo "<br>";
// echo "Jumlah Kategori Dewasa : $dewasa";
// echo "<br>";
// echo "Jumlah Kategori Anak-Anak : $anak2";