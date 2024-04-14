<?php
    // Саздание шаблона для объекта 'ЗАДАЧА'
    // для создания шаблона используется ключевое слово 'class' после которого указываетя
    // название для обектов шаблона

    class Task {
        // Для создания шаблона указываются из каких полей будет состоять объект
        public string $url;
        public string $title;
    }

    // Для создания объекта Task используется следущая запись 'new Task()'
    $task1 = new Task(); // были созданны 2 переменны $url и $title 
    $task1->url = '/task1';
    $task1->title = 'Задача#1';

    $task2 = new Task(); // были созданны 2 переменны $url и $title 
    $task2->url = '/task2';
    $task2->title = 'Задача#2';

    $tasks = array($task1, $task2);
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
            foreach($tasks as $task) {
                echo "
                    <li>
                        <a href='$task->url'>$task->title</a>
                    </li>
                ";
            }
            
        ?> 
        </ul>
    </body>
</html>