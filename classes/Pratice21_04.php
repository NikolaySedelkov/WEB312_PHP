<?php

abstract class Product
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

    abstract function getProduct() : string;
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

    public function getProduct() : string {
        return "
            <table>
                <caption>Телефон $this->brand</caption>
                <tbody>
                    <tr>
                        <td>Название</td><td>$this->name</td>
                    </tr>
                    <tr>
                        <td>Цена</td><td>$this->price</td>
                    </tr>
                    <tr>
                        <td>Описание</td><td>$this->description</td>
                    </tr>
                    <tr>
                        <td>ОС</td><td>$this->os</td>
                    </tr>
                </tbody>
            </table>
        ";
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

    public function getProduct() : string {
        return "
            <table>
                <caption>Монитор $this->brand</caption>
                <tbody>
                    <tr>
                        <td>Название</td><td>$this->name</td>
                    </tr>
                    <tr>
                        <td>Цена</td><td>$this->price</td>
                    </tr>
                    <tr>
                        <td>Описание</td><td>$this->description</td>
                    </tr>
                    <tr>
                        <td>Диагональ</td><td>$this->diagonal</td>
                    </tr>
                    <tr>
                        <td>астота</td><td>$this->frequency</td>
                    </tr>
                </tbody>
            </table>
        ";
    }
}
