<?php
include('Shape.php');
class Square extends Shape {
    public int $a;

    public function __construct(int $x, int $y, int $a) {
        parent::__construct($x, $y);
        $this->a = $a;
    }

    public function getSqea() : float {
        return $this->a * $this->a;
    }
}