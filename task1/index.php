<?php

    $array = array();
    for($i = 0; $i < 10; ++$i) {
        array_push($array, rand(10, 100));
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
    <h1>
        Input: <?php echo implode(', ', $array); ?>
    </h1>

    <h1>
        Output: <?php echo implode(', ', array_reverse($array)); ?>
    </h1>
</body>
</html>