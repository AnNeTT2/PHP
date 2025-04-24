<!-- Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.-->
<?php
class Arr
{
    private $numbers = []; // задаем начальное значение свойства как []

    public function add($number)
    {
        $this->numbers[] = $number;// добавляем переданное число в массив
        return $this; // возвращаем ссылку сами на себя для цепочного вызова
    }

    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers); // объединяем существующий массив $this->numbers с новым массивом $numbers
        return $this; // влзвращаем ссылку сами на себя для цепочного вызова
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr;
echo $arr->add(1)->add(2)->push([3, 4])->getSum();
?>
