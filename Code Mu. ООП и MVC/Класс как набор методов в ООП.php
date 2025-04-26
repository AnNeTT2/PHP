<!--
Напишите реализацию методов класса ArrayAvgHelper, заготовки методов которого расположены ниже:

class ArraySumHelper
{
/*
Находит сумму первых
степеней элементов массива:
*/
public function getAvg1($arr)
{

}

/*
Находит сумму вторых степеней
элементов массива и извлекает
из нее квадратный корень:
*/
public function getAvg2($arr)
{

}

/*
Находит сумму третьих степеней
элементов массива и извлекает
из нее кубический корень:
*/
public function getAvg3($arr)
{

}

/*
Находит сумму четвертых степеней
элементов массива и извлекает
из нее корень четвертой степени:
*/
public function getAvg4($arr)
{

}

/*
Вспомогательный метод, который параметром
принимает массив и степень и возвращает
сумму степеней элементов массива:
*/
private function getSum($arr, $power)
{

}

/*
Вспомогательный метод, который параметром
принимает целое число и степень и возвращает
корень заданной степени из числа:
*/
private function calcSqrt($num, $power)
{

}
}
-->
<?php
class ArrSumHelper {

 /*
        Находит сумму первых степеней элементов массива:
    */
    public function getAvg1($arr) {
        return $this->getSum($arr, 1);
    }

    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */
    public function getAvg2($arr) {
        return sqrt($this->getSum($arr, 2));
    }

    /*
        Находит сумму третьих степеней
        элементов массива и извлекает
        из нее кубический корень:
    */
    public function getAvg3($arr) {
        return pow($this->getSum($arr, 3), 1/3);
    }

        /*
            Находит сумму четвертых степеней
            элементов массива и извлекает
            из нее корень четвертой степени:
        */

        public function getAvg4($arr){
            return pow($this->getSum($arr, 4), 1/4);
        }

    public function getSum1($arr) {
        return $this->getSum($arr, 3);
    }

    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum($arr, $power) {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }
        return $sum;
    }
        /*
            Вспомогательный метод, который параметром
            принимает целое число и степень и возвращает
            корень заданной степени из числа:
        */
    /*Математическая подсказка:
     корень первой степени - это само число. То есть calcSqrt(число, 1) должно просто вернуть само число.*/
    private function calcSqrt($num, $power) {
    if ($power === 1) {
        return $num; // просто возвращаем число
    } else if ($power > 1) {
        return pow($num, 1 / $power); // корень заданной степени
    } else {
        // проверка для негативной степени
       return 'Степень должна быть положительной';
    }
}
// метод getCalcSqrt, который является публичным и позволит  вызвать приватный метод calcSqrt из вне класса
 public function getCalcSqrt($num, $power) {
        return $this->calcSqrt($num, $power);
    }
}

$ArrSumHelper = new ArrSumHelper;

echo $ArrSumHelper->getSum1([1, 2, 3]) . '<br>'; // Возвращает сумму кубов
echo $ArrSumHelper->getAvg2([1, 2, 3]) . '<br>'; // Возвращает квадратный корень суммы квадратов
echo $ArrSumHelper->getAvg3([1, 2]) . '<br>'; // Возвращает кубический корень суммы кубов
echo $ArrSumHelper->getAvg4([8, 2]) . '<br>'; // Вызывает корень четвертой степени суммы четвертых степеней
echo $ArrSumHelper->getAvg1([5, 6]) . '<br>'; // Возвращает сумму единиц
echo $ArrSumHelper->getCalcSqrt(2, 2);


?>