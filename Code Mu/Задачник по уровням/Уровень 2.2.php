<!--Дан массив с числами. Подсчитайте количество отрицательных чисел в этом массиве. -->

<?php
$arr = [-1, -2, -3, -5, 8, 33];
foreach ($arr as $elem) {
    if ($elem < 0) {
        echo count($elem);
    }
}
?>

<!--Дан массив с числами. Оставьте в нем только положительные числа. -->

<?php
$arr = [8, 21, -8, -3, -100];
$res = array_filter($arr, function ($positiveArr) {
    return $positiveArr > 0;
});
print_r($res);
?>

<!--Дана строка. Удалите предпоследний символ из этой строки. -->

<?php
$str = 'abcdef';
echo substr($str, -2, 1);
?>

<!--Дана некоторая строка. Найдите позицию первого нуля в строке. -->

<?php
$str = '0 7850 935';
echo strpos($str, '0');
?>

<!--Дан некоторый массив, например, вот такой:
[1, 2, 3, 4, 5, 6]
Поделите сумму первой половины элементов этого массива на сумму второй половины элементов. -->

<?php
$arr = [1, 2, 3, 4, 5, 6];

$length = count($arr);
$halfLength = (int)($length / 2);

$sumFirstHalf = array_sum(array_slice($arr, 0, $halfLength));
$sumSecondHalf = array_sum(array_slice($arr, $halfLength));
if ($sumSecondHalf !== 0) {
$result = $sumFirstHalf / $sumSecondHalf;

echo $result;

//} else {
//    echo "Ошибка: попытка деления на 0";
//}
?>
