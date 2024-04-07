<?php
    $banners = array(
        "1.png",
        "2.gif",
        "3.png"
    );

    // получаем случайное число в интервале от 0 до количества баннеров
    $rindex = rand(0, count($banners) - 1);
    // Получаем случайный индекс массива
    $rindex = array_rand($banners, 1);

    $currentBanner = $banners[$rindex];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php  echo "task3/banners/$currentBanner"; ?>"/>
</body>
</html>