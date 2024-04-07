<?php

    $array = array();
    for($i = 0; $i < 10; ++$i) {
        array_push($array, rand(10, 100));
    }

    $number = rand(10, 100);

    $index = false;
    for ($i = 0; $i < 10; ++$i) {
        if($array[$i] === $number) {
            $index = $i;
            break;
        }
    }

    $index = array_search($number, $array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Input: <?php echo implode(', ', $array); ?>
    </h1>
    <h2>
        <?php
            if($index === false) {
                echo "No result for $number";
            } else {
                echo "Number $number for index $index";
            }
        ?>
    </h2>
</body>
</html>