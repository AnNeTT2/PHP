<meta charset="UTF-8">
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'UTF8'");

$query = 'select * from users';
$res = mysqli_query($link, $query) or die (mysqli_error($link));
var_dump($res);

$row = mysqli_fetch_assoc($res);
$data[] = $row;
$row1 = mysqli_fetch_assoc($res1);
$data[] = $row1;

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $res) ;
var_dump($data);

?>

<!-- Добавьте нового юзера 'xxxx', не указав ему возраст и зарплату.-->

<?php
$query = "insert into users(name) values ('xxxx')";
mysqli_query($link, $query) or die(mysqli_error($link));
?>