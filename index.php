<?php
    // Пустой массив
    $empty_arr = array(); // []
    // Заполненый массив
    // $fulled_arr[0] = 1; $fulled_arr[1] = 2; ... $fulled_arr[4] = 5;
    $fulled_arr = array(1, 2, 3, 4); // [1, 2, 3, 4, 5]

    $options = ["Москва", "Санкт-петербург", "Воронеж", "Ялта"];

    $size_cities = count($options);
    
    // Создать копию массива $copy_option = $options;
    foreach($options as $city) {
        foreach($fulled_arr as $postfix) {
            array_push($options, "$city-$postfix");
        }
    }
    // Для вывода массивов и объектов var_dump($copy_option);

?>

<?php
    // Объекты - ассоциативные массивы
    // Для навигации по занятию | ключ[url-задачи] => значение[название задачи]
    $obj = array(
        "/task1" => "Задача#1",
        "/task2" => "Задача#2",
        "/task3" => "Задача#3"        
    )
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
                // foreach($array as $iter)
                foreach($options as $item_option ) {
                    echo "<option>$item_option</option>";
                }
            ?>
        </select>
        <hr/>
        <?php
            echo "
                <ul>
                    <li>
                        <a href='/task1'>{$obj['/task1']}</a>
                    </li>
                    <li>
                        <a href='/task2'>{$obj['/task2']}</a>
                    </li>
                    <li>
                        <a href='/task3'>{$obj['/task3']}</a>
                    </li>
                </ul>
            " 
        ?>
    </body>
</html>