<?php

// Абстрактный класс - в котором описана структура метода, но не сам метод

// Класс для шаблона геометрической фигуры
abstract class Shape {
    public int $x, $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() : int {
        return $this->x;
    }
    // Абстрактный метод - метод без выполняемый команд
    //      Этот метод говорит, что он будет принимать, как параметры
    //      и что будет возврашать в результате вызова
    abstract public function getSqea() : float;
}