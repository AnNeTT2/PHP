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

<!--подсчитаем всех, у кого зарплата равна 900: -->

<?php
$query = "SELECT COUNT(*) as count FROM users WHERE salary=900";
mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($res);
var_dump($data);
?>

<!--Подсчитайте всех юзеров с зарплатой 300. -->

<?php
$query = "select count(*) as count from users where salary = 300";
?>

<!--Подсчитайте всех юзеров с зарплатой 300 или возрастом 23. -->

<?php
$query = "select count(*) as count from users where salary = 300 and age = 23";
?>
