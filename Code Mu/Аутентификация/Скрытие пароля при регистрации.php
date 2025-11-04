//Модифицируйте ваш код так, чтобы при отправке формы пароль сравнивался с его подтверждением. Если они совпадают - то продолжаем регистрацию, а если не совпадают - то выводим сообщение об этом.
//⊗ppPmAuPHi
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
    if (!empty($_POST['login']) && !empty($_POST['password'])  && (!empty($_POST['birthday']) && (!empty($_POST['email'])))) {
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
            echo "Пожалуйста, пароли не совпадают.";
        }
    }
}
