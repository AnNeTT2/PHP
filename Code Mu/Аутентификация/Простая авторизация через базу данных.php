<!--Сделайте так, чтобы, если пользователь прошел авторизацию - выводилось сообщение об этом, а если не прошел - то сообщение о том, что введенный логин или пароль вбиты не правильно.-->
<h1>Авторизуйтесь:</h1>
<form action="" method="POST">
    <label>Введите логин:</label>
    <input name="login">
    <label>Введите пароль:</label>
    <input name="password" type="password">
    <input type="submit">
</form>

<?php
// Проверяем, не пусты ли поля 'login' и 'password' из POST-данных
if(!empty($_POST['login']) and !empty ($_POST['password'])){
    // Сохраняем логин и пароль в переменные
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Параметры подключения к базе данных
    $host = 'localhost'; // Хост (сервер), где находится база данных
    $user = 'root';      // Пользователь базы данных
    $pass = '';          // Пароль пользователя базы данных
    $name = 'users';     // Имя базы данных, к которой подключаемся

    // Устанавливаем соединение с базой данных
    $link = mysqli_connect($host, $user, $pass, $name);
    // Устанавливаем кодировку для корректного отображения символов
    mysqli_query($link, "SET NAMES 'UTF8'");

    // Запрос к базе данных для проверки существования пользователя с указанными логином и паролем
    $query = "select * from users where login = '$login' and password = '$password' ";
    // Выполняем запрос
    $res = mysqli_query($link, $query);
    // Получаем ассоциативный массив с результатом запроса
    $user = mysqli_fetch_assoc($res);

    // Проверяем, был ли найден пользователь
    if(!empty($user)){
        // Если пользователь найден, выводим сообщение об успешной авторизации
        echo "Вы авторизовались!";
    } else {
        // Если пользователь не найден, выводим сообщение об ошибке
        echo "Вы ввести не верный логин или пароль";
    }
}
?>

<br><br>

<!--Модифицируйте код так, чтобы в случае успешной авторизации форма для ввода пароля и логина не показывалась на экране. -->

<?php
if (empty($_POST)) {
    ?>
    <h1>Авторизуйтесь:</h1>
    <form action="" method="POST">
        <label>Введите ваш логин:</label>
        <input name="login">
        <label>Введите ваш пароль:</label>
        <input name="password" type="password">
        <input type="submit">
    </form>
    <?php
} else {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $name = 'users';

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES utf8");

        $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        $res = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($res);

// Проверяем, был ли найден пользователь
        if (!empty($user)) {
            echo "Добро пожаловать" . ","  . $login . "!";
        } else {
            echo "Вы ввели неверный логин или пароль";
        }
    }
}
?>

<br><br>

<!-- Модифицируйте код так, чтобы в случае успешной авторизации происходил редирект на страницу index.php.-->

<?php
    if(empty($_POST)){
?>

    <h1>Авторизуйтесь:</h1>
    <form action="" method="POST">
        <label>Введите логин:</label>
        <input name="login">
        <label>Введите пароль:</label>
        <input name="password" type="password">
        <input type="submit">
    </form>
    <?php
} else {

        if (!empty($_POST['login']) and !empty ($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $name = 'users';


        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES 'UTF8'");

        $query = "select * from users where login = '$login' and password = '$password' ";
        $res = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($res);

// Если юзер найден
            if (!empty($user)) {
                header('Location: index.php'); // выполняем редирект на index.php
                die();
            } else {
                echo "Вы ввели неверный логин или пароль";
            }
    }
}

?>
<!-- Модифицируйте код так, чтобы на странице index.php выводилось сообщение об успешной авторизации. Решите задачу через флеш-сообщения на сессиях.-->
<?php
session_start(); // Начинаем сессию для работы с переменными сессии
$_SESSION['flash'] = 'Добро пожаловать!'; // Устанавливаем временное сообщение для приветствия пользователя
header('Location: index.php'); // Перенаправляем пользователя на главную страницу
die(); // Завершаем выполнение скрипта

?>

<?php
if (!empty($user)) { // Проверяем, существует ли пользователь
    $_SESSION['flash'] = 'Добро пожаловать!'; // Устанавливаем приветственное сообщение
    header('Location: index.php'); // Перенаправляем на главную страницу
    die(); // Завершаем выполнение скрипта
}
?>

<?php
session_start(); // Начинаем сессию
if (empty($_POST)) { // Проверяем, отправлены ли данные формы
    ?>
    <h1>Авторизуйтесь:</h1> // Заголовок страницы
    <form action="" method="POST"> // Форма для авторизации
        <label>Введите ваш логин:</label> // Метка для поля логина
        <input name="login"> // Поле ввода для логина
        <label>Введите ваш пароль:</label> // Метка для поля пароля
        <input name="password" type="password"> // Поле ввода для пароля
        <input type="submit"> // Кнопка отправки формы
    </form>
    <?php
} else {
    // Выполняем проверку, если данные формы были отправлены
    if (!empty($_POST['login']) && !empty($_POST['password'])) { // Проверяем наличие логина и пароля
        $login = $_POST['login']; // Получаем логин из формы
        $password = $_POST['password']; // Получаем пароль из формы

        // Устанавливаем параметры для подключения к базе данных
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $name = 'users';

        $link = mysqli_connect($host, $user, $pass, $name); // Подключаемся к базе данных
        mysqli_query($link, "SET NAMES utf8"); // Устанавливаем кодировку

        // Формируем запрос для проверки логина и пароля в базе данных
        $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        $res = mysqli_query($link, $query); // Выполняем запрос
        $user = mysqli_fetch_assoc($res); // Получаем данные пользователя

        if (!empty($user)) { // Если пользователь найден
            $_SESSION['flash'] = 'Добро пожаловать!'; // Устанавливаем приветственное сообщение
            header('Location: index.php'); // Перенаправляем на главную страницу
            die(); // Завершаем выполнение скрипта
        } else {
            echo "Вы ввели неверный логин или пароль"; // Сообщаем об ошибке
        }
    }
}
?>

// выводим флеш сообщение в файле index.php
<?php
session_start(); // Начинаем сессию, чтобы получить флеш сообщение

if (isset($_SESSION['flash'])) { // Проверяем, установлено ли флеш сообщение
    echo $_SESSION['flash']; // Выводим флеш сообщение на экран
    unset($_SESSION['flash']); // Удаляем флеш сообщение, чтобы оно не отображалось повторно
}