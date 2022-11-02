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
    
    $angka = [7,34,8,1,2];
    $kotak = array('anjing','kurakura','koala','anjing');
    $nama = ['Hilman','Andi','Tiqa'];

    print_r($kotak);
    echo $kotak[0];

    print_r(array_unique($kotak));
    print_r(array_reverse($kotak));

    shuffle($kotak);
    print_r($kotak);

    echo count($kotak);

    sort($angka);
    print_r($angka);


    // asosiatif array
    $data = ['nama' => 'hilman', 'umur' => 21, 'pekerjaan' => 'pengacara'];
    $data2 = ['istri' => 'belum ada', 'laptop' => 'chromebook'];

    print_r($data);
    echo 'Namanya adalah '. $data['nama'];

    $data['nama'] = 'Hilman ramadhan';
    echo 'Namanya adalah '. $data['nama'];

    print_r(array_values($data));
    print_r(array_keys($data));
    print_r(array_merge($data,$data2));


    ?>
</body>
</html>