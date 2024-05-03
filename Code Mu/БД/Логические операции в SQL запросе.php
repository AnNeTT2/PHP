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

<!--Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно). -->

<?php
$query = 'select * from users where age >25 and age <=28';
?>

<!--Выберите юзера user1. -->

<?php
$query = "select * from users where name = 'user1'";
?>

<!--Выберите юзеров user1 и user2. -->
<?php
$query = "select * from users where name = 'user1' and name = 'user2'";
?>

<!--Выберите всех, кроме юзера user3. -->

<?php
$query = "select * from users where name <> 'user3'";
?>

<!--Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000. -->

<?php
$query = 'select * from users where age = 27 or salary = 1000';
?>

<!--Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400. -->

<?php
$query = 'select * from users where age = 27 and salary != 400';
?>

<!--Выберите всех юзеров в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000. -->

<?php
$query = 'select * from users where (age >= 25 and age < 27) or salary = 1000';
?>

<!--Выберите всех юзеров в возрасте от 23 лет до 27 лет или с зарплатой от 400 до 1000. -->

<?php
$query = 'select * from users where (age > 23 and age < 27) or (salary > 400 and salary < 1000 ';
?>
