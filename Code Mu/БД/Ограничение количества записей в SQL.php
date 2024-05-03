<meta charset="UTF-8">
<?php
$host = 'localhost';
$pass = '';
$name = 'mydb';
$user = 'root';

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'UTF8'");

$query = 'select * from users';
$res = mysqli_query($link, $query) or die (mysqli_error($link));
var_dump($res);

$row = mysqli_fetch_assoc($res);
$data[] = $row;
$row1 = mysqli_fetch_assoc($res);
$data[] = $row;

for ($data = [], $res = mysqli_fetch_assoc($res); $data[] = $row) ;
var_dump($data);
?>

<!--Получите первых 4 юзера. -->

<?php
$query = "select * from users limit 4";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Получите юзеров со второго, 3 штуки. -->

<?php
$query = "select * from users limit 1, 3";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Отсортируйте юзеров по возрастанию зарплаты и получите первых 3 работника из результата сортировки. -->

<?php
$query = "select * from users order by salary limit 3";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Отсортируйте юзеров по убыванию зарплаты и получите первых 3 юзера из результата сортировки. -->

<?php
$query = "select * from users order by salary desc limit 3";
mysqli_query($link, $query) or die(mysqli_error($link));
?>
