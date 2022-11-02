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
    
    $data = [
        ['programmer','21','males'],
        ['designer','24','rajin'],
        ['manajer','34','males banget'],
    ];

    $data[2][0] = 'projek manager';
    print_r($data);
    echo $data[1][1];

    echo $_SERVER;

    ?>
</body>
</html>