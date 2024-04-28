<?php

class Category {
    // обьявление полей класса
    // MODIFY TYPE $NAME;
    public string $name;
    public array $list_product;

    public function __construct(string $name, array $products = array()) {
        $this->name = $name;
        $this->list_product = $products;
    }

    // Метод - функуция, которая обьявлена внутри класса
    //  метод принажлежит экземпляру класса - имеет доступ ко всем его полям
    // MODIFY function NAME_METHOD(ARGS...) : RETURN_TYPE {}

    public function getCategoryName() : string {
        return $this->name;
    }

    public function getCategoryProducts() : array {
        return $this->list_product;
    }
}

// Создание экземпляра класса | Создани объекта, который описывается классом
// new NAME_CLASS();
//$category = new Category("Холодильники", array("LG", "HP"));