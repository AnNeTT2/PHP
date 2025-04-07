<!-- Не подсматривая в мой код реализуйте такой же класс User с методом show().-->

<?php
class User
{
    public $name;
    public $age;

    // Создаем метод:
    public function show()
    {
        return '!!!';
    }
}
$user = new User;
$user->name = 'john';
$user->age = 25;

echo $user->show(); // Вызовем наш метод:

?>

<!--Параметры метода-->
<!--Не подсматривая в мой код реализуйте такой же класс User с методом show(). -->

<?php
class User
{
    public $name;
    public $age;

    // Создаем метод:
    public function show($str)
    {
        return $str .'!!!';
    }
}
$user = new User;
$user->name = 'john';
$user->age = 25;

echo $user->show('Hello');// Вызовем наш метод:

?>


