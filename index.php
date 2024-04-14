<?php
    // Саздание шаблона для объекта 'ЗАДАЧА'
    // для создания шаблона используется ключевое слово 'class' после которого указываетя
    // название для обектов шаблона

    class Task {
        // Для создания шаблона указываются из каких полей будет состоять объект
        public string $url;
        public string $title;
    }

    // Конструктор для создания задача : Возвращаемый тип - тип задачи (url,  title)
    function contructorTask($url = '#', $title = 'NONAME') : Task {
        // Для создания объекта Task используется следущая запись 'new Task()'
        $temp = new Task();
        $temp->url = $url;
        $temp->title = $title;

        return $temp;
    }

    $tasks = array(contructorTask("/task1", "Задача#1"), contructorTask("/task2", "Задача#2"));
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