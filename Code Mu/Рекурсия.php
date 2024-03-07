<!--Рекурсия-->
<?php

$i = 1;

function func()
{
    echo $i;
    $i++;

    if ($i <= 10) {
        func(); // здесь функция вызывает сама себя
    }
}

func();
?>
<!-- Дан массив: $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];С помощью рекурсии выведите элементы этого массива на экран.-->

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
function getElems($arr)
{
    if (is_array($arr) && count($arr) > 0) {
        $keys = array_keys($arr);
        echo $keys[0] . " => " . $arr[$keys[0]] . "\n";
        array_shift($arr);
        getElems($arr);
    }
}

getElems($arr);
?>

<!--Дан массив:$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]; С помощью рекурсии найдите сумму элементов этого массива.-->

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
function getSum($arr, &$sum)
{
    if (is_array($arr) && count($arr) > 0) {
        $keys = array_keys($arr);
        $sum = $sum + $arr[$keys[0]];
        array_shift($arr);
        getSum($arr, $sum);
    }
}

$sum = 0;
getSum($arr, $sum);
echo "сумма = " . $sum . "\n";
?>

<!--Дан многомерный массив произвольного уровня вложенности, например, такой:$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
С помощью рекурсии выведите все примитивные элементы этого массива на экран.-->

<?php
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
function rec($arr)
{
    foreach ($arr as $elem) {
        if (is_array($elem)) {

        } else {
            echo $elem;
        }
    }
}

rec([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]);
?>

<!--Дан многомерный массив произвольного уровня вложенности, например, такой:$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
С помощью рекурсии найдите сумму элементов этого массива.-->

<?php
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
function getSum($arr)
{
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += getSum($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}

var_dump(getSum([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]));
?>
<!--Дан многомерный массив произвольного уровня вложенности, содержащий внутри себя строки, например, такой:$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
 С помощью рекурсии слейте элементы этого массива в одну строку:'abcdefgjk'-->

<?php
$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
function getString($arr)
{
    $str = '';
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $str .= getString($elem);
        } else {
            $str .= $elem;
        }
    }
    return $str;
}

var_dump(getString(['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]]));
?>
<!--Дан многомерный массив произвольного уровня вложенности, например, такой: $arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
-Возведите все элементы-числа этого массива в квадрат.-->

<?php
$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
function func($arr)
{
    $length = count($arr);

    for ($i = 0; $i < $length; $i++) {
        if (is_array($arr[$i])) {
            $arr[$i] = func($arr[$i]);
        } else {
            $arr[$i] = $arr[$i] * $arr[$i];
        }
    }

    return $arr;
}

var_dump(func([1, [2, 7, 8], [3, 4, [5, 6]]]));
?>
