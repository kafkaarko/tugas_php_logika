<?php

function HitungStr($str1,$str2){
    $string1 = strlen($str1);
    $string2 = strlen($str2);

    if($string1 < $string2){
        echo $str2 . " Memiliki jumlah karakter lebih banyak dari pada " . $str1 . " selesih " . $string2 - $string1 . ' karakter';
    }else{
        echo $str1 . " Memiliki jumlah karakter lebih banyak dari pada " . $str2 . " selesih " . $string1 - $string2 . ' karakter';
    }
}

HitungStr("kafka",'arkoganteng');