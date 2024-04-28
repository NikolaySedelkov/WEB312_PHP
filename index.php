<?php 
    include("./classes/Category.php");

    $list_category;
    if(isset($_COOKIE['list_category'])) {
        // Достаем старые cookie в формате массива
        $cookie = json_decode($_COOKIE['list_category']);
        // если страница открыта в результате запроса
        if(isset($_POST['category'])) {
            // добавляем в них новое значение
            array_push($cookie, new Category($_POST['category']));
            // перезаписываем cookie на стороне клиента
            setcookie("list_category", json_encode($cookie));
        }
        $list_category = $cookie;
    } else {
        $list_category = array(
            new Category("Gatgets"),
            new Category("Холодильника"),
            new Category("Телефоны"),
            new Category("Стиральные машины"),
        );
        if(isset($_POST['category'])) {
            array_push($list_category,  new Category($_POST['category']));
        }
        setcookie("list_category", json_encode($list_category));
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
        <ul>
            <?php
                foreach($list_category as $category) {
                    echo "<li>$category->name</li>";
                } 
            ?>
        </ul>
        <hr/>
        <form
            method="post"
        >
            <input placeholder="Новая категория" type="text" name="category" required/>
            <button>Add</button>
        </form>
    </body>
</html>