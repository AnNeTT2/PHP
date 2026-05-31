//Пусть при регистрации мы спрашивали у пользователя логин, пароль, имя, отчество, фамилию, дату рождения. Выведите в профиле пользователя все эти данные, кроме пароля.
<?php
session_start();
?>
<?php
function generateSalt()
{
    $salt = '';
    $saltLength = 8; // длина соли

    for($i = 0; $i < $saltLength; $i++) {
        $salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
    }

    return $salt;
}


$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
?>

<?php
if(empty($_POST)){
?>
<h1>Зарегистрируйтесь:</h1>
<form action="" method="post">
    <label>Введите ваш логин:</label>
    <input type="login" name="login">
    <label>Введите ваш пароль:</label>
    <input type="password" name="password">
    <label>Введите ваше имя:</label>
    <input type="name" name="name">
    <label>Введите ваше отчество:</label>
    <input type="patronymic" name="patronymic">
    <label>Введите вашу фамилию:</label>
    <label>
        <input type="surname" name="surname">
    </label>
    <label>Введите ваш день рождения:</label>
    <input type="birthday" name="birthday">
    <input type="submit">
</form>
<?php
}else {
    if (!empty($_POST['login']) && !empty($_POST['password']) && (!empty($_POST['name']) && (!empty($_POST['patronymic']) && (!empty($_POST['surname']) && (!empty($_POST['birthday'])))))) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $patronymic = $_POST['patronymic'];
        $surname = $_POST['surname'];
        $birthday = $_POST['birthday'];
        // Преобразуем строку в объект DateTime
        $birthdate = new DateTime($birthday);
        $today = new DateTime(); // текущая дата

// Вычисляем разницу в годах
        $age = $today->diff($birthdate)->y;

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'users';

        $link = mysqli_connect($host, $user, $name, $pass);
        mysqli_query($link, "SET NAMES utf8");

        $query = "select * from users where login = '$login'";
        $dbUser = mysqli_fetch_assoc(mysqli_query($link, $query));

        $_SESSION['auth'] = true; //делаем пометку об авторизации

        echo "<h1>Ваш профиль</h1>";
        echo "<p>Логин: " . htmlspecialchars($user['login']) . "</p>";
        echo "<p>Имя: " . htmlspecialchars($user['name']) . "</p>";
        echo "<p>Отчество: " . htmlspecialchars($user['patronymic']) . "</p>";
        echo "<p>Фамилия: " . htmlspecialchars($user['surname']) . "</p>";
        echo "<p>Возраст: " . $age . " лет</p>";
    }
}