<!--Самостоятельно повторите описанные мною классы Arr и SumHelper. -->
<!--Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив и возвращать среднее арифметическое этого массива (сумма элементов делить на количество). -->
<!--Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет принимать массив и возвращать среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество). -->
<!-- Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums.-->

<?php

class Arr
{
    private $nums = []; // массив чисел
    private $sumHelper; // Записываем объект класса SumHelper
    private $AvgHelper; // Записываем объект класса AvgHelper

    // Конструктор класса:
    public function __construct()
    {
        $this->sumHelper = new SumHelper; // Записываем объект вспомогательного класса в свойство:
             $this->AvgHelper = new AvgHelper; // Записываем объект вспомогательного класса в свойство

         }

    // находим сумму среднего арифметического и среднего квадратичного из массива
    public function getAvgMeanSum(){
        // Для краткости запишем $this->nums в переменну
        $nums = $this->nums;

        return $this->AvgHelper->getAvg($nums) +
            $this->AvgHelper->getMeanSquare($nums); //
    }


    // Находим сумму квадратов и кубов элементов массива:
    public function getSum23()
    {
        // Для краткости запишем $this->nums в переменную:
        $nums = $this->nums;

        // Найдем описанную сумму:
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->
            getSum3($nums);
    }
    // Добавляем число в массив:
    public function add($number)
    {
        $this->nums[] = $number;
    }
}
$arr = new Arr(); // создаем объект класса
$arr->add(1);
$arr->add(2);
$arr->add(3);
echo $arr->getSum23() ."\n";     // Находим сумму квадратов и кубов:

echo $arr->getAvgMeanSum(); // находим сумму среднего арифметического и среднего квадратичного из массива

?>
<?php

class AvgHelper {

    // вспомогательный метод для нахождения среднего арифметического

    public function getAvg($arr){
        $avg = array_sum($arr) / count($arr);
        return $avg;
    }

    public function getMeanSquare($arr){
        $sumOfSquares = $this->getSum1($arr, 2); // возводим во вторую степень
         $meanSquare = sqrt($sumOfSquares / count($arr)); // Извлекаем квадратный корень
         return $meanSquare; // Возвращаем результат
     }


    // вспомогательная функция нахождения суммы
    private function getSum1($arr, $power){
        $sum = 0;
        foreach($arr as $elem){
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}
?>

<?php
class sumHelper {
    // сумма квадратов

    public function getSum2($arr){
        return $this->getSum($arr, 2);
    }
    // сумма кубов
    public function getSum3($arr){
        return $this->getSum($arr, 3);
    }
    // вспомогательная функция нахождения суммы
    private function getSum($arr, $power){
        $sum = 0;
        foreach($arr as $elem){
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}

?>
