<!--Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.-->
<?php
class Arr{
    private $numbers = []; // массив чисел

    public function __construct($numbers){
        $this->numbers = $numbers; // записываем массив $numbers в свойство
    }

   public function add($number){
    $this->numbers[] = $number; // Медот, который добавляет одно число в массив
   }

   public function getSum(){
        return array_sum($this->numbers); // возвращаем сумму элементов массива
   }
}
echo(new Arr([8, 6, 32]))->getSum(); // вызывает метод getSum сразу после создания объекта

?>
