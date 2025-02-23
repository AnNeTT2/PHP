<!--Создайте описанные таблицы. -->

CREATE TABLE `users` (
`id` int NOT NULL,
`login` varchar(50) NOT NULL,
`password` varchar(40) NOT NULL,
`role` int NOT NULL
)

CREATE TABLE `prods` (
`id` int NOT NULL,
`name` varchar(50) NOT NULL,
`cost` varchar(40) NOT NULL
)

CREATE TABLE `notes` (
`id` int NOT NULL,
`text` int NOT NULL,
`user_id` int NOT NULL
)

<!-- Комментарии в SQL запросе-->
<!-- Опробуйте два типа комментариев в своем коде.-->

<?php
$query = 'select * from users --комментарий';
$res = mysqli_query($link, $query) or die(mysqli_error($link));

$query1 = 'select * from users /*
комментарий
*/';
$res1 = mysqli_query($link, $query1) or die(mysqli_error($link));
?>

<!--Кавычки в SQL запросах-->
<!--Пусть у вас есть некоторая таблица articles со статьями. Пусть есть также следующая форма:
 <form action="" method="POST">
	<input name="title">
	<textarea name="text"></textarea>
	<input type="submit">
</form>
Убедитесь, что эта форма имеет проблему с кавычками. Избавьтесь от проблемы.-->

<?php


// SELECT * FROM users WHERE login='admin' --' AND password='abc'
// в поле с логином вбиваем ' or role=1 --
// SELECT * FROM users WHERE login='' OR role=1 --' AND password=''( фактически SELECT * FROM users WHERE login='' OR role=1)
// в поле с логином вбиваем ' or id=1 --
//SELECT * FROM users WHERE login='' OR id=1 --' AND password=''(фактически SELECT * FROM users WHERE login='' OR id=1)

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'DB';

$connect = mysqli_connect($host, $user, $pass, $name);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = mysqli_real_escape_string($connect, $_POST['title']); // обрабатываем все входящие строковые данные
    $password = mysqli_real_escape_string($connect, $_POST['text']); // обрабатываем все входящие строковые данные


    $sql = "INSERT INTO articles (title, text) VALUES ('$title', '$text')";
    if (mysqli_query($connect, $sql)) {
        echo "Новое объявление успешно размещено!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($connect);
    }
}

?>


<form action="" method="POST">
    <label for="title">Заголовок:</label>
    <input name="title">
    <label for="Text">Текст:</label>
    <input name="text" type="text">
    <input type="submit">
</form>

<!--SQL инъекция в строковый параметр-->
<!--Опробуйте все описанные варианты использования уязвимости. Устраните уязвимость.
 Убедитесь, что она исчезла.-->

<?php

// SELECT name, cost FROM prods WHERE id=-1 or cost=1000
// SELECT name, cost FROM prods WHERE id=-1	UNION SELECT login, password FROM users WHERE role=1

$host = 'localhost';
$user = 'root';
$name = 'DB';
$pass = '';

$link = mysqli_connect($host, $user, $pass, $name);
if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

//  кодировки
mysqli_query($link, "SET NAMES 'UTF8'");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['login']) && isset($_GET['password'])) {

        $login = mysqli_real_escape_string($link, $_GET['login']); // обрабатываем все входящие строковые данные
        $password = mysqli_real_escape_string($_GET['password']); //обрабатываем все входящие строковые данные


        $query = "SELECT * FROM users WHERE login='$login'";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));

        if ($row = mysqli_fetch_assoc($res)) {

            var_dump($row);  // Вывод информации
        } else {
            echo "Пользователь не найден";
        }
    }
}
?>

<form action="" method="GET">
    <label for="login">Логин:</label>
    <input name="login" required>
    <label for="Password">Пароль:</label>
    <input name="password" type="password" required>
    <input type="submit">
</form>

<!-- SQL инъекция в числовой параметр-->
<!-- Устраните уязвимость в следующем коде:


$from = $_GET['from'];

$query = "SELECT * FROM products LIMIT $from";
$res = mysqli_query($link, $query);

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
var_dump($data);-->

<?php
$from = (int) $_GET['from']; // принудительно приводим к числу

$query = "SELECT * FROM products LIMIT $from";
$res = mysqli_query($link, $query);

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
var_dump($data);

?>

<!--Выключение ошибок базы данных SQL-->
<!--Реализуйте описанное переключение режима. Потестируйте его. -->

<?php
// файл index.php
error_reporting(0); // Отключение всех ошибок
ini_set('display_errors', 'off'); // Отключение отображения ошибок
require 'config.php'; // подключение файла config.php

?>

<?php
//файл config.php
define('MODE', 'prod'); // устанавливаем режим


$host = 'localhost';
$user = 'root';
$name = 'DB';
$pass = '';

$link = mysqli_connect($host, $user, $pass, $name);

if (!$link) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

$query = 'select * from users where  id=1';
$res = mysqli_query($link, $query);

if(!$res and MODE === 'dev'){
    die(mysqli_error($link));

}

?>


<!--Подмена значения в SQL -->
<!--Воспроизведите пример, приведенный в уроке. Проверьте наличие уязвимости. Устраните ее.
 В приведенном коде также есть возможность провести SQL-инъекцию. Придумайте, как ее сделать. Воспользуйтесь уявимостью. Устраните уязвимость.-->

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'DB';

$connect = mysqli_connect($host, $user, $pass, $name);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = mysqli_real_escape_string($connect, $_POST['login']); // обрабатываем все входящие строковые данные
    $password = mysqli_real_escape_string($connect, $_POST['password']); // обрабатываем все входящие строковые данные

 // SQL- инъекция INSERT INTO users SET login='admin' --',password='', role=2

    $sql = "INSERT INTO users SET login='$login',password='$password', role=2" ;
    mysqli_query($connect, $sql);
    if (mysqli_query($connect, $sql)) {
        echo "Добро пожаловать, $login!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($connect);
    }
}



?>


<form action="" method="POST">
    <label for="login">Логин:</label>
    <input name="login">
    <label for="password">Пароль:</label>
    <input name="password" type="password">
    <input name="role" type="hidden" value="2">
    <input type="submit">
</form>

<!--Список значений в SQL  -->
<!-- Черные списки -->


<!--Белые списки. Воспроизведите пример, приведенный в уроке. Проверьте наличие уязвимости. Устраните ее -->

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'DB';

$connect = mysqli_connect($host, $user, $pass, $name);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = mysqli_real_escape_string($connect, $_POST['login']); // преобразование строки, которая экранирует все символы
    $password = mysqli_real_escape_string($connect, $_POST['password']); // обрабатываем все входящие строковые данные
    $role = (int) $_POST['role']; // преобразовываем тип
    $list = [2, 3];

// в поле можно вбить логин - (' OR '1'='1) и получится примерный запрос INSERT INTO users SET login='' OR '1'='1',password='',role=$role
    if (in_array($role, $list)) {
        //  Если роль правильная, выполняем запрос
        $sql = "INSERT INTO users SET login='$login', password='$password', role=$role";

        //  Выполняем запрос и проверяем его результат
        if (mysqli_query($connect, $sql)) {
            echo "Добро пожаловать, $login!";
        } else {
            echo "Ошибка: " . $sql . "<br>" . mysqli_error($connect);
        }
    } else {
        echo "Ошибка: Неверная роль.";
    }
}

?>

<form action="" method="POST">
    <label for="login">Ваш логин:</label>
    <input name="login">
    <label for="password">Пароль:</label>
    <input name="password" type="password">

    <select name="role">
        <option value="2">ученик</option>
        <option value="3">учитель</option>
    </select>

    <input type="submit">
</form>

<!--Список полей в SQL -->
<!--Воспроизведите пример, приведенный в уроке. Проверьте наличие уязвимости. Устраните ее, воспользовавшись белым списком полей. -->

<!-- Динамическое формирование запроса-->
<!--Исправьте проблему с помощью белого списка разрешенных полей.-->

<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'DB';

$link = mysqli_connect($host, $user, $pass, $name);

// Проверка на успешное подключение
if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Проверяем, был ли отправлен запрос
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Экранирование пользовательского ввода
    $login = mysqli_real_escape_string($link, $_POST['login']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // Формируем массив для обновления
    $updates = [];

    if (!empty($login)) {
        $updates[] = "login='$login'";
    }
    if (!empty($password)) {
        $updates[] = "password='$password'";
    }

    if (count($updates) > 0) {
        // Объединяем массив в строку
        $set = implode(', ', $updates);

        $sql = "UPDATE users SET $set WHERE id=1";

        if (mysqli_query($link, $sql)) {
            echo "Данные успешно обновлены.";
        } else {
            echo "Ошибка при обновлении данных: " . mysqli_error($link);
        }
    } else {
        echo "Нет данных для обновления.";
    }
}

// Закрываем соединение с базой данных
mysqli_close($link);

?>


<form action="" method="POST">
    <label for="login">Логин :</label>
    <input name="login">
    <label for="password">Ваш пароль:</label>
    <input name="password" type="password">
    <input type="submit">
</form>


