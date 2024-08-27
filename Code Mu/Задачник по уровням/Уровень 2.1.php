<!--Дана некоторая строка. Найдите позицию первого нуля в строке. -->

<?php
$str = '5870 980 98720';
echo strpos($str, '0');
?>

<!-- Выведите в консоль все числа в промежутке от 1 до 1000, сумма первой и второй цифры которых равна пяти.-->
<?php
for ($i = 1; $i <= 1000; $i++) {
    $str = (string)$i;
    if (intval($str[0]) + intval($str[1]) === 5) {
        echo $i . "\n";
    }
}
?>
<!--Дан массив. Удалите из него элементы с заданным значением. -->

<?php
$arr = [8, 16, 32, 102, -8];
$res = array_filter($arr, function ($new_arr) {
    return $new_arr != 16;
});
print_r($res);
?>

<!--Дан некоторый массив, например, вот такой:
[1, 2, 3, 4, 5, 6]
Найдите сумму первой половины элементов этого массива. -->

<?php
function sumFirstHalf($arr)
{
    $length = count($arr);
    $halfLength = (int)($length / 2);
    $sum = 0;

    for ($i = 0; $i < $halfLength; $i++) {
        $sum += $arr[$i];
    }

    return $sum;
}

$arr = [1, 2, 3, 4, 5, 6]; // Пример массива

$sumFirstHalf = sumFirstHalf($arr);
echo "Сумма первой половины элементов массива: " . $sumFirstHalf;
?>
