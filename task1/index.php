<?php
    // создание пустого массива
    $data = array();
    $size = rand(15, 25);

    for($i = 0; $i < $size; ++$i) {
        array_push($data, rand(-100, 100));
    }

    // a.
    $even = array();
    foreach($data as $number) {
        if ($number % 2 === 0) {
            array_push($even, $number);
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
        Even numbers: 
        <?php
            echo implode(', ', $even);
        ?>
    </h3>
    <h3>
        Max: <?php echo max($data);?>
    </h3>
    <h3>
        Min: <?php echo min($data);?>
    </h3>
    <h3>
        Sorted: <?php
            sort($data); 
            echo implode(', ', $data);
        ?>
    </h3>
</body>
</html>