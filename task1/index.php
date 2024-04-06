<?php
    // создание пустого массива
    $data = array();
    $size = rand(15, 25);

    for($i = 0; $i < $size; ++$i) {
        array_push($data, rand(-100, 100));
    }

    // a.
    $even = array();
    // b
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    foreach($data as $number) {
        if ($number % 2 === 0) {
            array_push($even, $number);
        }

        if ($number > $max) $max = $number;
        if ($number < $min) $min = $number;
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
            // implode - с конкатенировать все элементы массива 
            // implode(' | ', [1, 2, 3]) -> 1 | 2 | 3
            echo implode(', ', $data);
        ?>
    </h3>
    <h3>
        even numbers: 
        <?php
            echo implode(', ', $even);
        ?>
    </h3>
    <h3>
        Max: <?php echo $max;?>
    </h3>
    <h3>
        Min: <?php echo $min;?>
    </h3>
</body>
</html>