<!-- С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите. -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>

<?php
    if (empty($_POST)){ // Если имя не было введено
?>
    <h2>Введите ваше имя:</h2>
        <form method="post" action="">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="Отправить">
        </form>
<?php
} else {
     echo "Привет, ". $_POST['name']. "!";
}
?>
</body>
</html>
