<!--Сделайте класс City, в котором будут следующие свойства: name, population
(количество населения).Создайте 5 объектов класса City, заполните их данными и запишите в массив.
Переберите созданный вами массив с городами циклом и выведите города и их население на экран-->

<?php
// файл класса City
class City {
    public $name; // объявляем имя публичным
    public $population; // объявляем численость публичным

    public function __construct($name, $population)
    {
        $this->name = $name; // запиcываем данные в свойство name
        $this->population = $population; // запиcываем данные в свойство population
    }
}

// создаем массив созданных объектов
$cities = [new City('London', 8982000),
    new City('Paris', 2102650),
    new City('Berlin', 3645000),
    new City('Barcelona',1620000 )
    new City('Sidney', 5312000)];

// перебираем массив циклом
foreach ($cities as $city){
    echo $city->name. ' ' . $city->population . '<br>';
}

?>

<?php
require_once 'City.php'; // подключаем файл класса к index.php
?>




