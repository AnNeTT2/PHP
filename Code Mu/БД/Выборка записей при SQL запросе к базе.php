<meta charset="utf-8">
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';


$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'UTF8'");

$query = 'select * from users';
$res = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($res);

$row = mysqli_fetch_assoc($res);
$data[] = $row;

$row1 = mysqli_fetch_assoc($res);
$data[] = $row1;

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) ;
var_dump($data); // здесь будет массив с результатом
?>

<!--Выберите юзера с id, равным 3. -->

<?php
$query = 'select * from users where id = 3';
?>

<!--Выберите юзеров с зарплатой 900. -->

<?php
$query = 'select * from users where salare = 900';
?>

<!--Выберите юзеров в возрасте 23 года. -->

<?php
$query = 'select * from users where age = 23';
?>

<!--Выберите юзеров с зарплатой более 400. -->

<?php
$query = 'select * from users where salary > 400';
?>

<!--Выберите юзеров с зарплатой равной или большей 500. -->

<?php
$query = 'select * from users where salary >= 500';
?>

<!--Выберите юзеров с зарплатой НЕ равной 500. -->

<?php
$query = 'select * from users where salary != 500';
?>

<!--Выберите юзеров с зарплатой равной или меньшей 500. -->

<?php
$query = 'select * from users where salary <= 500';
?>
