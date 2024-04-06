<?php
    // создание пустого массива
    $data = array();
    $size = rand(15, 25);

    for($i = 0; $i < $size; ++$i) {
        array_push($data, rand(-100, 100));
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
    <h1>Задача 1</h1>
    <hr/>
    <h3>
        Input array: 
        <?php
            foreach( $data as $number) {
                echo "$number, ";
            } 
        ?>
    </h3>
</body>
</html>