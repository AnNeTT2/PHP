<!-- Реализуйте предложенный класс Circle самостоятельно.-->
<!--С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10. -->
<?php

class Test{
    const CONSTANT = 'test'; // задаем значение

    function getConstant(){
        return self::CONSTANT;
    }
}
$test = new Test;
echo $test->getConstant();
?>

<?php
class Circle {
    const PI = 3.14; // задаем значение константы ПИ
    private $radius; // приватное свойство для радиуса круга

    //
    public function __construct($radius){
        $this->radius = $radius; // записываем данные в свойство $radius
    }

    // площадь круга
    public function getSquareOfCircle(){
        return self::PI * pow ($this->radius, 2);
    }

    // длина окружности

    public function getCircuit(){
        return $this->radius * (2 * self::PI );
    }
}


$circle = new Circle(10); // создаем экземпляр класса
echo $circle->getSquareOfCircle(). "\n";// выводим площадь круга радиусом 10
echo $circle->getCircuit(); // выводим длину окружности радиусом 10
?>