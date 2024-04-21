<?php 

class Circle extends Shape {
    public int $r;

    public function __construct(int $x, int $y, int $r) {
        parent::__construct($x, $y);
        $this->r = $r;
    }

    public function getSqea() : float {
        return M_PI * $this->r * $this->r;
    }
}