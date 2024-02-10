<!--Выведите с помощью цикла столбец чисел от 1 до 100-->

<?php
$i = 1;

while ($i <= 100) {
    echo $i;
    $i++;
}
?>

<!--Выведите с помощью цикла столбец чисел от 100 до 1.-->

<?php

for ($i = 100; $i >= 0; $i--) {
    echo $i;
}
?>

<!--Выведите с помощью цикла столбец четных чисел от 1 до 100.-->

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . '<br>';
    }
}
?>

<!--Заполните массив 10-ю иксами с помощью цикла.-->

<?php
$arr = [];


for ($i = 0; $i < 10; $i++) {
    $arr[] = 'x';
}
var_dump($arr);

?>

<!--Заполните массив числами от 1 до 10 с помощью цикла.-->

<?php
$arr = [];

for ($i = 1; $i <= 10; $i++) {
    $arr[] += $i;
}
var_dump($arr);
?>

<!--Дан массив с числами. С помощью цикла выведите только те элементы массива, которые больше нуля и меньше 10-ти.-->

<?php
$arr = [2, 3, 7, -15, 94, 375];

foreach ($arr as $elem) {
    if ($elem > 0 and $elem < 10) {
        echo $elem . '<br>';
    }
}
?>

<!--Дан массив с числами. С помощью цикла проверьте, что в нем есть элемент со значением 5.-->

<?php
$arr = [5, 35, 7, 98, 5];
$flag = false;

foreach ($arr as $elem) {
    if ($elem == 5) {
        $flag = true;
        break;
    }
}

if ($flag === true) {
    echo 'есть';
} else {
    echo 'нет';
}
?>
<!--Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.-->

<?php
$arr = [2, 8, 99, 378];
$sum = 0;

foreach ($arr as $elem) {
    $sum += $elem;
}
echo $sum;
?>

<!--Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.-->

<?php
$arr = [2, 8, 99, 378];
$sum = 0;

foreach ($arr as $elem) {

    $sum += $elem ** 2;
}
echo $sum;

?>

<!--Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов, делить на количество).-->

<?php
$arr = [8, 34, -7, 66, -1, 0];
$sum = 0;

foreach ($arr as $elem) {
    $sum += $elem;
}
$avg = $sum / count($arr);
echo $avg;
?>

<!--Напишите скрипт, который будет находить факториал числа. Факториал - это произведение всех целых чисел, меньше данного, и его самого.-->

<?php

$num = 3;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo $factorial;
?>
