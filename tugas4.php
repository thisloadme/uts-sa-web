<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    
    $angka = 1000;
    $angka2 = 3;
    $angka3 = 2.64;

    $angka += $angka2;

    echo $angka;

    echo round($angka3);
    echo rand($angka2, $angka);
    echo max($angka, $angka2, $angka3);
    echo "Angka hari ini adalah ".min($angka, $angka2, $angka3);

    $text = 'Hai semuanya';
    echo strlen($text);
    echo str_word_count($text);
    echo str_replace('Hai','Halo',$text);
    echo str_repeat('Hai',10);
    echo str_repeat(str_replace('Hai','Halo',$text), 10);
    
    ?>
</body>
</html>