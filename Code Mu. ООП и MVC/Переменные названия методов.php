<!-- Пусть массив $methods будет ассоциативным с ключами method1 и method2:
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
Выведите имя и возраст пользователя с помощью этого массива.-->

<?php
class User {
    private $name; //создаем свойство для имени приватным
    private $age; //создаем свойство для возраста

    public function __construct($name, $age)   // конструктор объекта
    {
        $this->name = $name; // запиcываем данные в свойство name
        $this->age = $age; // запиcываем данные в свойство age
    }
// Геттер для name
    public function getName(){
        return $this->name;
    }
// Геттер для  age
    public function getAge(){
        return $this->age;
    }
}

$methods = ['method1' => 'getName', 'method2' => 'getAge']; // создаем ассоциативный массив сс ключами method1 и method2:
$user = new User('Ann', 30); // создаем объект

echo 'Возраст - ' . $user->{$methods['method2']}();// выводим возраст 30
echo 'Имя - ' . $user->{$methods['method1']}();// выводим имя Ann
?>
