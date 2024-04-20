<?php 

// класс Тирг должен состоять из полей возраст, имя, вес и скорость бега
// Класс Тирг должен только расширить(не модифицирова) класс животное - 
//  - в таком случае можно применить мехазимн наследования классов

// Для наследования класса B от класса A используется следующая запись
// class B extends A {}
class Tigr extends Animal {
    /*
        ...extends Animal
        public string $name;    // Имя      - строка
        public int $age;        // Возраст  - целое число
        public float $weight;   // Вес      - дробное число
    */
    public float $velocity;

    public function __construct(string $name, int $age, float $weight, float $velocity) {
        $this->name         = $name;
        $this->age          = $age;
        $this->weight       = $weight;
        $this->velocity     = $velocity;
                                // bin to hex
        $this->id           = bin2hex(random_bytes(5));
        // $this->diseases     = array('ветрянка', 'сколиоз'); ошибка
    }
}