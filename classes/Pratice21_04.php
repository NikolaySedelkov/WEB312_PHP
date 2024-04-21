<?php

class Product
{
    public string   $name;
    public float    $price;
    public string   $description;
    public string   $brand;
    //private int $id;

    public function __construct(string $name, float $price, string $description, string $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
        //$this->id = 11111;
    }
}

class Phone extends Product
{
    public string   $cpu;
    public int      $ram;
    public int      $countSim;
    public int      $hdd;
    public string   $os;

    public function __construct(
        string $name,
        float $price,
        string $description,
        string $brand,
        string $cpu,
        int $ram,
        int $countSim,
        int $hdd,
        string $os
    ) {
        parent::__construct($name, $price, $description, $brand);
        //$this->id = 2222;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }
}

class Monitor extends Product
{
    public float $diagonal;
    public int $frequency;
    public array $ports;

    public function __construct(
        string $name,
        float $price,
        string $description,
        string $brand,
        float $diagonal,
        int $frequency,
        array $ports
    ) {
        parent::__construct($name, $price, $description, $brand);
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }
}
