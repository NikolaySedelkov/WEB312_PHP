<?php

// Создать класс животное, состоящий из полей, возраст, имя, вес

// Название классов объявляют с большой буквы
class Animal {
    public string $name;    // Имя      - строка
    public int $age;        // Возраст  - целое число
    public float $weight;   // Вес      - дробное число
    protected string $id;   // Уникальный идентификатор

    private array $diseases;

    // конструктор - Инициализатор - инициализирует все поля класса
    public function __construct(
        string  $name, 
        int     $age, 
        float   $weight, 
        array   $diseases = array('ветрянка', 'сколиоз')
    ) {
        // $name; - воспринимается как параметро функции, а не поля класса
        // для восприятия как поле класса нужно добавить $this-> : $this->name 
        $this->name     = $name;
        $this->age      = $age;
        $this->weight   = $weight;

        $this->diseases = $diseases;
        $this->id = bin2hex(random_bytes(5));
    }

    // Для того, чтобы обеспечить доступ для Чтение/Записи не public полей, можно прописать
    //      функция get/set
    //  get - Выдать значение переменной
    //  set - Задать значение для переменной

    public function getId() : string {
        return $this->id;
    }

    public function getDiseases() : array {
        return $this->diseases;
    }

    protected function setId(string $newId) {
        // Если newId не занят, то тогда
        $this->id = $newId;
        // иначе
        // бросить исключение
    }

    public function rename(string $newName) {
        $this->name = $newName;
    }
}