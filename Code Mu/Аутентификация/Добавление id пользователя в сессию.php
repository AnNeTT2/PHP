//Запишите при регистрации в сессию еще и id пользователя.

<?php
session_start();
?>
<?php
if(empty($_POST)){
    ?>
    <h1>Авторизуйтесь:</h1>
    <form action="" method="POST">
        <label>Введите ваш логин:</label>
        <input name="login">
        <label>Введите ваш пароль:</label>
        <input name="password" type="password">
        <label for="Ваш день рождения:">Ваш день рождения:</label>
        <input name="birthday">
        <label for="Введите ваш email:">Введите ваш email:</label>
        <input name="email">
        <input type="submit">
    </form>
    <?php
} else {
    if (!empty($_POST['login']) && !empty($_POST['password']) && (!empty($_POST['birthday']) && (!empty($_POST['email'])))) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $registration_date = date('Y-m-d H:i:s'); // получаем текущее время

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $name = 'users';

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES utf8");

        // Подготовка SQL запроса и внесение данных в табл users
        $query = "INSERT INTO users (login, password,birthday, email, registration_date) VALUES ('$login', '$password', '$birthday', '$email', '$registration_date')";
        $res = mysqli_query($link, $query);

        $_SESSION['auth'] = true; //делаем пометку об авторизации

        $id = mysqli_insert_id($link);
        $_SESSION['id'] = $id; // записывает id в сессию.

        if ($res) {
            echo "Добро пожаловать, " . htmlspecialchars($login);
        } else {
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
}