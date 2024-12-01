<!--Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа. После отправки формы выведите на экран сумму этих чисел.-->
<meta charset="utf-8">
// форма на index.php

<?php
session_start(); //Запускаем сессию, если требуется хранить данные сессии
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
<h1>Введите свои данные</h1>
    <form action="result.php" method="get">
        <label for="num">Первое число:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="age">Второе число:</label>
        <input type="number" name="num2" id="num2" required>

        <label for="age">Третье число:</label>
        <input type="number" name="num3" id="num3" required>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>

// файл с обработкой формы result.php

<?php

session_start();

// Получаем данные из формы
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
</head>
<body>
    <h1>Результаты формы:</h1>
<?php
if(!empty($_GET)){
    echo  $_GET['num1'] + $_GET['num2'] + $_GET['num3'] ;
}
?>
</body>
</html>

