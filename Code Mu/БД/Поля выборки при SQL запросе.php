<!--Выберите из таблицы users имя, возраст и зарплату для каждого работника. -->

<?php
$query = "select name, age, salary from users";
?>

<!--Выберите из таблицы users имена всех работников. -->

<?php
$query = "select name from users";
?>

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
