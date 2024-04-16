<!-- Дана строка:'abcde'
Получите массив букв этой строки.-->

<?php
$str = 'abcde';
$arr = str_split($str);
print_r($arr);
?>

<!--Дано некоторое число:12345
Получите массив цифр этого числа. -->

<?php
$num = (string)12345;
$arr = str_split($num);
print_r($arr);
?>

<!--Дано некоторое число:12345
Переверните его:54321 -->

<?php
$num = (string)12345;
echo strrev($num);
?>

<!--Дано некоторое число:12345
Найдите сумму цифр этого числа -->

<?php
$num = 12345;
$arr = str_split($num);
echo array_sum($arr);
?>
