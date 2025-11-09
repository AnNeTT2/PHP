//Модифицируйте ваш код так, чтобы при попытке регистрации выполнялась проверка на занятость логина и, если он занят, - выводите сообщение об этом и просите ввести другой логин.
<?php
if(empty($_POST)){
    ?>
    <h1>Зарегистрируйтесь:</h1>
    <form action="" method="POST">
        <label>Введите ваш логин:</label>
        <input name="login">
        <label>Введите ваш пароль:</label>
        <input name="password" type="password">
        <label for="Подтверждение пароля:">Подтвердите ваш пароль:</label>
        <input type="password" name="confirm">
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

        if ($_POST['password'] == $_POST['confirm']) {

            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $name = 'users';

            $link = mysqli_connect($host, $user, $pass, $name);
            mysqli_query($link, "SET NAMES utf8");

            $query = "select * from users where login = '$login'";
            $user = mysqli_fetch_assoc(mysqli_query($link, $query));

            if (empty($user)) {
                $query = "INSERT INTO users (login, password, birthday, email, registration_date) VALUES ('$login', '$password', '$birthday', '$email', '$registration_date')";
                if (mysqli_query($link, $query)) {
                    $_SESSION['auth'] = true; // пометка об авторизации
                    $_SESSION['id'] = mysqli_insert_id($link); // записывает id в сессию
                } else {
                    echo "Ошибка выполнения запроса: " . mysqli_error($link);
                }
            } else {
                echo "Данный логин уже существует";
            }
        } else {
            echo "Пароли не совпадают";
        }
    }
}