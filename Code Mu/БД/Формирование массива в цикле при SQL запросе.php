<meta charset="utf-8">
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';


$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'UTF8'");

/*if ($link)
			{
				echo "OK";
			}
			else echo "Fail";
			*/

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

<!-- С помощью описанного цикла получите и выведите через var_dump на экран массив всех работников.-->
<!--Из полученного результата получите первого работника. Через echo выведите на экран его имя. -->
<!--Из полученного результата получите второго работника. Через echo выведите на экран его имя и возраст. -->
<!--Из полученного результата получите третьего работника. Через echo выведите на экран его имя, возраст и зарплату. -->

<?php
for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) ;
var_dump($data);

$firstWorker = reset($data);
echo $firstWorker['name'] . "<br>";

$nextWorker = next($data);
echo $nextWorker['name'] . "<br>" . $nextWorker['age'] . "<br>";

$thirdWorker = next($data);
echo $thirdWorker['name'] . "<br>" . $thirdWorker['age'] . "<br>" . $thirdWorker['salary'];

?>