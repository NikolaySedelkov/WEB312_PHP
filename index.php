<?php 
    // Счётчик перезагрузок страницы

    $times = 0;
    // Проверяем есть ли что-то в хранилише
    if(isset($_COOKIE['times'])) {
        // если есть, то достаем и увеличиваем на 1 (т.к счётчи)
        $times = (int)$_COOKIE['times'] + 1;
    } 
    // Перезапись
    setcookie("times", $times);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <b><i>Счётчик обновления страниц: <?php echo $times; ?> </i></b>
    </body>
</html>