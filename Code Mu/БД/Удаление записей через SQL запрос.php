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

<!-- Удалите юзера с id, равным 7.-->

<?php
$query = "delete from users where id = 7";
mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!--Удалите всех юзеров, у которых возраст 23 года. -->

<?php
$query = "delete from users where age = 23";
mysqli_query($link, $query) or die (mysqli_error($link));
?>

<!--Удалите всех юзеров. -->

<?php
$query = "delete from users";
mysqli_query($link, $query) or die(mysqli_error($link));
?>
