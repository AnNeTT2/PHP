<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);

// Поиск ошибокв базе данных
$query = 'select * from users';
$res = mysqli_connect($link, $query) or die(mysqli_connect($link));
var_dump($res);
?>

<!-- обязательное правило для проблем с кодировкой-->
<?php
mysqli_connect($link, "SET NAMES 'UTF-8'");
?>
