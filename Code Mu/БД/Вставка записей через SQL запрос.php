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

<!-- Добавьте нового юзера 'user7', 26 лет, зарплата 300.-->

<?php
$query = "insert into users (name, age, salary) values ('user7', 26, 300)";
mysqli_query($link, $query) or die(mysqli_error($link));
?>
