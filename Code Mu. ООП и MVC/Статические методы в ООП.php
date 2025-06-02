<!--Переделайте методы класса ArraySumHelper на статические. -->
<!--Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper сумму квадратов элементов этого массива. -->

<?php
class ArraySumHelper
{ // Метод возвращает сумму элементов массива, возведенных в первую степень (то есть сами элементы).
    public static function getSum1($arr)
    {
        return self::getSum($arr, 1);
    }
// Метод возвращает сумму элементов массива, возведенных в квадрат
    public static function getSum2($arr)
    {
        return self::getSum($arr, 2);
    }
// Метод возвращает сумму элементов массива, возведенных в третью степень.
    public static function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }
// Метод возвращает сумму элементов массива, возведенных в четвертую степень.
    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }
//вспомогательный метод нахождения суммы элементов в массиве возведенных в степень
    private static function getSum($arr, $power) {
        $sum = 0;  // Инициализация переменной суммы
// Добавляем к сумме элемент, возведенный в заданную степень
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum; // Возвращаем итоговую сумму.
    }
}
?>

<?php
$arr = [1, 2, 3, 4, 5, 6];
echo ArraySumHelper::getSum2($arr);
?>