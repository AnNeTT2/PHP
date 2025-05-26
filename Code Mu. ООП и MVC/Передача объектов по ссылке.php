<!-- Сделайте класс Product, в котором будут следующие свойства: name, price.-->
<!--Создайте объект класса Product, запишите его в переменную $product1. -->
<!--Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на один и тот же объект. -->

<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
    public function getName() {
        return $this->name; // Метод для доступа к имени
    }

    public function getPrice() {
        return $this->price; // Метод для доступа к цене
    }
}
$product = new Product('apple', 89);
$product1 = $product; // Переменная1 ссылается на тот же объект
$product2 = $product1; // Переменная1и переменная2 ссылаются на один и тот же объект

echo $product1->name . " "; // вызов метода для имени
echo $product2->price; // вызов метода для цены

?>



