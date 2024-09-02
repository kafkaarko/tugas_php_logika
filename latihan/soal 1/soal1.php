<?php
function deteksiAngka($teks) {
    // Mencari semua angka dalam string menggunakan regular expression
    preg_match_all('/\d+/', $teks, $matches);
    
    // Jika ada angka dalam string, maka tampilkan angka-angka tersebut
    if (!empty($matches[0])) {
        echo "Teks mengandung angka: " . implode(", ", $matches[0]);
    } else {
        echo "Teks tidak mengandung angka";
    }
}

if (isset($_GET['btn'])) {
    $teks = $_GET['text'];
    deteksiAngka($teks);
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
    <form action="" method="get">
        <input type="text" name="text">
        <button type="submit" name="btn">Kirim</button>
    </form>
</body>
</html>
