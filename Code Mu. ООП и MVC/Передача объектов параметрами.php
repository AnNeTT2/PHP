<!--Сделайте класс Product, в котором будут приватные свойства name, price и quantity. Пусть все эти свойства будут доступны только для чтения.-->
<!--Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество).-->
<!--Сделайте класс Cart. Данный класс будет хранить список продуктов (объектов класса Product) в виде массива. Пусть продукты хранятся в свойстве products. -->
<!--Реализуйте в классе Cart метод add для добавления продуктов. -->
<!--Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта. -->
<!--Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов. -->
<!--Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов). -->
<!--Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов). -->

<?php
class Product {
    private $name; // создаем свойство для имени
    private $price; // создаем свойство для цены
    private $quantity; // создаем свойство для количества

    public function __construct($name, $price, $quantity){
        $this->name = $name; // записываем данные в свойство name
        $this->price = $price; // записываем данные в свойство price
        $this->quantity = $quantity; // записываем данные в свойство quantity
     }

    // геттеры
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    //полная стоимость продукта(цена * количество)
    public function getCost(){
        return $this->price * $this->quantity;
    }
}

?>

<?php
class Cart {
    private $products = []; // массив продуктов

    // добавляем продукт
    public function add($product){
        $this->products[] = $product;
    }
    // удаляем продукт
    public function remove($name){
        unset($this->products[$name]);
    }

    // ссумарная стоимость продуктов
    public function getTotalCost(){

        $sum = 0;
        foreach($this->products as $product){
            $sum += $product->getCost(); // текущая стоимость продукта,возвращаемая методом getCost() объекта $product
         }
        return $sum;
    }
    // суммарное количество продуктов
    public function getTotalQuantity(){
        $res = 0;
        foreach($this->products as $product){
            $res += $product->getQuantity(); // текущее количество продуктов ,возвращается методом getQuantity() объекта $product
         }
        return $res;
    }
    //средняя стоимость продуктов
    public function getAvgPrice(){
        $res = $this->getTotalCost();
        $res1 = $res / $this->getTotalQuantity();
        return $res1;

    }
}

$product = new Product('apple', 12 , 30);
$product1 = new Product('bread', 50, 75);

$cart = new Cart();
$cart->add($product);
$cart->add($product1);

echo $cart->getTotalCost() ."\n";
echo $cart->getTotalQuantity() . "\n";
echo $cart->getAvgPrice();

?>
