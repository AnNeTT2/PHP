<!--На странице index.php сделайте форму. Отправьте ее на страницу result.php. Проверьте оба метода отправки формы.-->

// форма index.php

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
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required>

        <label for="age">Возраст:</label>
        <input type="text" name="age" id="age" required>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>

// файл result.php

<?php

session_start();

// Получаем данные из формы
$name = $_GET['name'];
$age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
</head>
<body>
    <h1>Результаты формы</h1>
        <p>Имя: <?php echo $name; ?></p>
    <p>Возраст: <?php echo $age; ?></p>
</body>
</html>