<?php
    $task = array(
        '/task1' => 'Перевор массива',
        '/task2' => 'Поиск элемент в массиве',
        '/task3' => 'Баннер' 
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <code>
        <?php
            var_dump(json_encode($task)); 
        ?>
    </code>

    <ul>
        <?php
            foreach($task as $url => $title) {
                echo "
                    <li>
                        <a href='$url'>$title</a>
                    </li>
                ";
            } 
        ?>
    </ul>
</body>
</html>