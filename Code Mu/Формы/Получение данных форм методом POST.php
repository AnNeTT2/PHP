<!-- С помощью формы спросите у пользователя его имя и возраст. После отправки формы выведите эти данные на экран.-->

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
<form action="result.php" method="post">
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
$name = $_POST['name'];
$age = $_POST['age'];
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




<!--Пусть с помощью формы у пользователя спрашивается пароль:
 <form action="/result.php" method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form>
Пусть на странице с результатом в переменной хранится правильный пароль:
$pass = '12345';
Сделайте так, чтобы после отправки формы на странице результата сравнивался пароль из переменной и пароль из формы. После сравнения сообщите пользователю, правильный он ввел пароль или нет.-->

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
    <h1>Введите свой пароль:</h1>
        <form action="result.php" method="post">
            <label for="pass">Пароль:</label>
            <input type="password" name="pass" id="pass" required>

            <input type="submit" value="Отправить">
        </form>
</body>
</html>
<?php

session_start();

// Получаем данные из формы
$pass = $_POST['pass'];

if (isset($_POST['pass'])) {

    $enteredPass = $_POST['pass'];

    $pass1 = '12345';

    // Проверяем, правильный ли пароль
    if ($enteredPass === $pass1) {
        echo "Пароль введен правильно!";
    } else {
        echo "Неверный пароль. Попробуйте снова.";
    }
} else {
    // Если форма не отправлена, перенаправляем на главную страницу
    header("Location: index.php");
    exit();
}
?>


<!--С помощью трех инпутов спросите у пользователя год, месяц и день рождения пользователя. После отправки формы определите день недели, в который родился пользователь. -->

<form action="" method="POST">
    <input name="year">
    <input name="month">
    <input name="day">
    <input type="submit" value="Отправить">
</form>
<?php
?>