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

<!--Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты. -->

<?php
$query = "select * from users order by salary";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Достаньте всех юзеров и отсортируйте их по убыванию зарплаты. -->

<?php
$query = "select * from users order by salary desc";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Достаньте юзеров с зарплатой 500 и отсортируйте их по возрасту. -->

<?php
$query = "select * from users where salary = 500 order by age";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Достаньте всех юзеров и отсортируйте их по имени и по зарплате. -->

<?php
$query = "select * from users order by salary, name";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Достаньте всех юзеров и отсортируйте их по имени. -->

<?php
$query = "select * from users order by  name";
mysqli_query($link, $query) or die(mysqli_error($link));
?>