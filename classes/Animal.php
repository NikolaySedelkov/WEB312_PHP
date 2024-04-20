<?php

// Создать класс животное, состоящий из полей, возраст, имя, вес

// Название классов объявляют с большой буквы
class Animal {
    public string $name;    // Имя      - строка
    public int $age;        // Возраст  - целое число
    public float $weight;   // Вес      - дробное число

    // конструктор - Инициализатор - инициализирует все поля класса
    public function __construct(string $name, int $age, float $weight) {
        // $name; - воспринимается как параметро функции, а не поля класса
        // для восприятия как поле класса нужно добавить $this-> : $this->name 
        $this->name     = $name;
        $this->age      = $age;
        $this->weight   = $weight;
    }

    public function rename(string $newName) {
        $this->name = $newName;
    }
}