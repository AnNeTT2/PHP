<!--Сделайте класс City, в котором будут следующие свойства - name, foundation (дата основания), population (население). Создайте объект этого класса. -->

<?php
class City {
    public $name; //создаем свойство для имени
    public $foundation; //создаем свойство для основания
    public $population; //создаем свойство для численности

    public function __construct($name, $population, $foundation){
        $this->name = $name; // запиcываем данные в свойство name
        $this->population = $population; // запиcываем данные в свойство  population
        $this->foundation = $foundation; //записываем данные в свойство  foundation
    }
}
$cities =  new City('London', 8982000, 47);
echo $cities->name;
echo $cities->population;
echo $cities->foundation;

?>

<!--Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств. -->

<?php
class City1 {
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $population, $foundation){
        $this->name = $name;
        $this->population = $population;
        $this->foundation = $foundation;
    }
}
$city1 =  new City1('London', 8982000, 47);
$props = ['name', 'population', 'foundation'];
foreach ($props as $prop){
    echo $city1->$prop;
}
?>

<!--Скопируйте мой код класса User и массив $props. В моем примере на экран выводится фамилия юзера. Выведите еще и имя, и отчество.-->

<?php
class User
{
    public function __construct($surname, $name, $patronymic)
    {
        $this->patronymic = $patronymic;
        $this->name = $name;
        $this->surname = $surname;
    }

    public $surname;
    public $name;
    public $patronymic;
}

$props = ['surname', 'name', 'patronymic'];
$user = new User('Иванов', 'Иван', 'Иванович');
?>
<pre>
<?php
echo $user->{$props[0]}. "\n"; //выводим Иванов
echo $user->{$props[1]}. "\n"; // выводим Иван
echo $user->{$props[2]}; // выводим Иванович
?>
