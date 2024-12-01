<!--Спросите у пользователя фамилию, имя и отчество. После отправки формы выведите на экран введенные данные. -->

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
    <h1>Введите ваши данные:</h1>

    <form action="" method="POST">
        <label for="surname">Фамилия:</label>
        <input name="surname"><br><br>
        <label for="name">Имя:</label>
        <input name="name"><br><br>
        <label for="patronymic">Отчество:</label>
        <input name="patronymic"><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?php
    if (!empty($_POST)) {
    echo $_POST['surname'] . "<br>" . $_POST['name'] . "<br>" . $_POST['patronymic'];
}
?>
