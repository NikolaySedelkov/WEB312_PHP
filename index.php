<?php 
    include("./classes/Category.php");

    $list_category = array(
        new Category("Gatgets"),
        new Category("Холодильника"),
        new Category("Телефоны"),
        new Category("Стиральные машины"),
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
        <ul>
            <?php
                foreach($list_category as $category) {
                    echo "<li>$category->name</li>";
                } 
            ?>
        </ul>
        <hr/>
        <form>
            <input placeholder="Новая категория" type="text" name="category"/>
            <button>Add</button>
        </form>
    </body>
</html>