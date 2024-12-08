<!--Сделайте два файла. При запуске первого файла запишите в сессию два числа, а при запуске второго файла - выведите на экран сумму этих чисел. -->

<?php
// файл1
session_start();
$_SESSION['login'] = 'qwerty';
?>

<?php
//файл2
session_start();
echo $_SESSION['login'];
?>

<?php

session_start();

$_SESSION['num1'] = 3;
$_SESSION['num2'] = 5;

?>

<?php

session_start();
echo  $_SESSION['num1'] + $_SESSION['num2'];
?>
