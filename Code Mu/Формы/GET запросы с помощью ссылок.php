<!-- Сделайте три ссылки. Пусть первая передает число 1, вторая - число 2, третья - число 3. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.-->

<?php
// Проверка, была ли передана переменная через GET запрос
$number = isset($_GET['number']) ? $_GET['number'] : null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Передача чисел</title>
</head>
<body>

<h1>Передача чисел через GET-запрос</h1>

<ul>
    <li><a href="?number=1">Передать число 1</a></li>
    <li><a href="?number=2">Передать число 2</a></li>
    <li><a href="?number=3">Передать число 3</a></li>
</ul>

<?php
// Отображение переданного числа, если оно есть
if ($number !== null) {
    echo "<h2>Вы передали число: " . htmlspecialchars($number) . "</h2>";
}
?>

</body>
</html>

<!--Сформируйте в цикле 10 ссылок. Пусть каждая ссылка передает свое число. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число. -->

<?php

if(!empty($_GET['num1'])){
        $number = $_GET('num1');
        echo  "Число". $number. "<br><br>";
    }
echo "Ссылки для выбора чисел:<br>";
    for ($i = 0; $i < 10; $i++){
        echo "<a href='?num=$i'>Ссылка $i</a><br>";
    }
?>
<br><br>

<!--Дан массив: $arr = ['a', 'b', 'c', 'd', 'e'];Сделайте так, чтобы с помощью GET запроса можно было вывести любой элемент этого массива. Для этого с помощью цикла foreach сделайте ссылку для каждого элемента массива. -->

<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

if (isset($_GET['element'])) {
    $element = $_GET['element'];
    if (in_array($element, $arr)) {
        echo "Выбранный элемент: $element";
    } else {
        echo "Выбранный элемент не найден";
    }
}

foreach($arr as $elem) {
    ?>
    <a href="?element=<?=$elem?>"><?=$elem?></a>
    <?php
}
?>