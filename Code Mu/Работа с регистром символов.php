<!--Дана строка 'php'. Сделайте из нее строку 'PHP'.-->

<?php
$str = 'php';
echo strtoupper($str);
?>

<!--Дана строка 'PHP'. Сделайте из нее строку 'php'.-->

<?php
$str = 'PHP';
echo strtolower($str);
?>

<!--Дана строка 'london'. Сделайте из нее строку 'London'.-->

<?php
$str = 'london';
echo ucfirst($str);
?>
<!--Дана строка 'London'. Сделайте из нее строку 'london'.-->

<?php
$str = 'London';
echo lcfirst($str);
?>

<!--Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.-->

<?php
$str = 'london is the capital of great britain';
echo ucwords($str);
?>

<!--Дана строка 'LONDON'. Сделайте из нее строку 'London'.-->

<?php
$str = 'LONDON';
$str1 = strtolower($str);
echo ucfirst($str1);
?>