<!--Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2. Запишите в первое свойство число 2, а во второе - число 3. Выведите сумму значений свойств на экран. -->

<?php
class Num{
    public static $num1; // статическое свойство num1
    public static $num2; // статическое свойство num2


}
Num::$num1 = '2'; // записывает значение в статическое свойство num1
Num::$num2 = '3'; // записываем значение в статическое свойство num2

echo Num::$num1 + Num::$num2;  // выводим сумму значений свойств num1 и num2.
?>

<!--Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2. Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.-->
<!--Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2. -->

<?php
class Num1 {

    private static $num1 = 2; // Начальное значение свойства num1
    private static $num2 = 3; // Начальное значение свойства num2

    // статический метод получения суммы значения от двух статических переменных
    public static function getSum(){
        // Статическое свойство внутри класса
        return self::$num1 + self::$num2;
    }
}

echo Num1::getSum(); // выводит сумму
?>

<!--Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. С помощью этого метода выведите на экран объем шара с радиусом 10. -->

<?php
class Geometry {

    private static $pi = 3.14; // вынесем Пи в свойство
    // Площадь круга:
    public static function getCircleSquare($radius){
        return self::$pi * $radius * $radius;
    }
    // Длина окружности:
    public static function getCircleСircuit($radius){
        return 2 * self::$pi * $radius;
    }
    // объем шара
    public static function getVolumeOfTheBall($radius){
        return 4 / 3 * self::$pi ** 3;
    }
}

echo Geometry::getVolumeOfTheBall(10); // получаем объем шара с радиусом 10
?>









