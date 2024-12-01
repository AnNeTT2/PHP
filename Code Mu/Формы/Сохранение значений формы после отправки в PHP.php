<!-- С помощью формы спросите город и страну пользователя. После отправки формы выведите введенные данные на экран. Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.-->
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
     <form action="" method="GET">
         <label for="country">Введите вашу страну :</label>
        <input name="country" value="<?php if(isset( $_GET['country'])) echo $_GET['country'] ?>"><br><br>
         <label for="town">Введите ваш город:</label>
         <input name="town" value="<?php if(isset($_GET['town'])) echo $_GET['town'] ?>"><br><br>
        <input type="submit" value="Отправить">
    </form>
</form>
</body>
</html>



