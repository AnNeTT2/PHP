<meta charset="utf-8">
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

<!--Юзеру с id 4 поставьте возраст 35 лет. -->

<?php
$query = "update users set age = 35 where id = 4";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Всем, у кого зарплата 500, сделайте ее 700. -->

<?php
$query = "update users set salary = 700 where salary = 500";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23. -->

<?php
$query = "update users set age = 23 where id > 2 and id <= 5";
mysqli_query($link, $query) or die(mysqli_error($link));
?>