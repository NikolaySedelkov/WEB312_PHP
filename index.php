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
        <ul>
            <?php
                // array_keys - получить ключи массива
                foreach(array_keys($obj) as $key) {
                    echo "
                        <li>
                            <a href='$key'>{$obj[$key]}</a>
                        </li>
                    ";
                }
            ?>
        </ul>
    </body>
</html>