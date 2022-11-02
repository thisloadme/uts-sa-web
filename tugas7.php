<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <h1>Loop PHP</h1>
    
    <?php
    
    $hewan = ['anjing','babi','cicak','domba'];

    for ($i=0; $i < 5; $i++) { 
        echo 'sekolah koding <br>';
    }

    for ($i=0; $i < count($hewan); $i++) { 
        echo $hewan[$i];
    }

    foreach ($hewan as $h) {
        echo $h;
    }

    $data = ['nama' => 'hilman', 'umur' => 24, 'sifat' => 'malas'];

    foreach ($data as $key => $value) {
        echo $key .'<br>';
        echo $value .'<br>';
    }


    $i = 0;
    while ($i < count($hewan)) {
        echo $hewan[$i];
        $i++;
    }

    $i = 0;
    do {
        echo '-----';
        echo $hewan[$i];
        $i++;
    } while ($i < count($hewan));

    ?>
</body>
</html>