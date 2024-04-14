<?php
    // Саздание шаблона для объекта 'ЗАДАЧА'
    // для создания шаблона используется ключевое слово 'class' после которого указываетя
    // название для обектов шаблона

    class Task {
        // Для создания шаблона указываются из каких полей будет состоять объект
        public string $url;
        public string $title;

        // Конструктор для создания задача : Возвращаемый тип - тип задачи (url,  title)

        // Это функция, которая принадлежит шаблону и предназачена для первичной инициализации объекта
        //  при его создании 'new Task()'
        public function __construct($url = '#', $title = 'NONAME') {
            $this->url = $url;
            $this->title = $title;
        }

        // Функция которая принадлежит конкретному объекта класса(Метод)
        public function Echo() {
            echo "<a href='$this->url'>$this->title</a>";
        }
    }

    $tasks = array(new Task("/task1", "Практическая | Product"), new Task("/task2", "Задача#2"));
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
                echo "<li>";
                $task->Echo();
                echo "</li>";
            }
        ?> 
        </ul>
    </body>
</html>