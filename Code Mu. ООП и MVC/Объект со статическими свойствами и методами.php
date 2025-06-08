<!--Не подсматривая в мой код реализуйте такой же класс User, подсчитывающий количество своих объектов. -->
<?php
class User
{
    public static $count = 0; // счетчик объектов
    public $name; // обычное свойство name

    public function __construct($name)
    {
        $this->name = $name; // запиcываем данные в свойство name
        self::$count++; // Увеличиваем счетчик при создании объекта:
    }
}
$user1 = new User('user1'); // создаем первый объект класса
echo User::$count."\n"; //выведет 1

$user2 = new User('user2'); // создаем второй объект класса
echo User::$count; //выведет 2
?>

