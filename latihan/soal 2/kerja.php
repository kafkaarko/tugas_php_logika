<?php

$kerja = 8;
$kompepertama = 50000;
$komperselanjutnya = 25000;
if(isset($_POST['btn'])){
    if(isset($_POST['num']) && $_POST['num']  >= $kerja){
            echo"lama kerja : " . $_POST['num'] . "<br>";
            echo"jam lebih : " . $_POST['num'] - $kerja . "<br>";
            if($_POST['num'] - $kerja <= 1){
                echo"uang kompensasi: " . $kompepertama . "<br>";
            }else{
            $kompe = $kompepertama + ($_POST['num'] - $kerja - 1) * $komperselanjutnya;
            echo"uang kompensansi anda: " . $kompe . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num">
        <button type="submit" name="btn">kirim</button>
    </form>
</body>
</html>