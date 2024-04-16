<!--Дан массив со строками. Оставьте в этом массиве только те строки, которые начинаются на http://. -->

<?php

$arr = array('http://.', 'https://.', 'www://leningradspb.ru');
$filteredArray = array_filter($arr, function ($elem) {
    return substr($elem, 0, 7) === "http://";
});

print_r($filteredArray);
?>

<!--Дан массив со строками. Оставьте в этом массиве только те строки, которые заканчиваются на .html. -->

<?php


$arr = array('index.html', 'index.php', 'aaaa.html', 'login.php');

$filteredArray = array_filter($arr, function ($elem) {
    return substr($elem, -5) === ".html";
});

print_r($filteredArray);

?>

<!--Дан массив с числами. Увеличьте каждое число из массива на 10 процентов. -->

<?php
$arr = [80, 15, 36, 900, 1200];
foreach ($arr as &$elem) {
    $elem += $elem * 0.1;
}
print_r($arr);
?>
