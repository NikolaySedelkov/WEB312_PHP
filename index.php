<?php
    // Пустой массив
    $empty_arr = array(); // []
    // Заполненый массив
    // $fulled_arr[0] = 1; $fulled_arr[1] = 2; ... $fulled_arr[4] = 5;
    $fulled_arr = array(1, 2, 3, 4, 5); // [1, 2, 3, 4, 5]

    $options = ["Москва", "Санкт-петербург", "Воронеж", "Ялта"];

    $size_cities = count($options);
    for($i = 0; $i < $size_cities; ++$i) {
        $size_postfixs = count( $fulled_arr );
        for($j = 0; $j < $size_cities; ++$j) {
            array_push(
                $options,
                "$options[$i]-$fulled_arr[$j]"
            );
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
        <select>
            <?php
                $size_cities = count($options);
                for($i = 0; $i < $size_cities; ++$i) {
                    echo "<option>$options[$i]</option>";
                }
            ?>
        </select>
    </body>
</html>