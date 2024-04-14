<?php 

class Product {
    public string $name;
    public float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function getProduct() {
        return "(Name{{$this->name}}; price{{$this->price}})";
    }
}