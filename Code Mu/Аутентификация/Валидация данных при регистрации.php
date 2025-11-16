//Модифицируйте ваш код так, чтобы нельзя было зарегистрировать пользователя с пустым логином или паролем.
//Модифицируйте ваш код так, чтобы логин мог содержать только латинские буквы и цифры. В случае, если это не так, выводите сообщение об этом над формой.
//Модифицируйте ваш код так, чтобы логин был длиной от 4 до 10 символов. В случае, если это не так, выводите сообщение об этом над формой.
//модифицируйте ваш код так, чтобы пароль был длиной от 6 до 12 символов. В случае, если это не так, выводите сообщение об этом над формой.
//Модифицируйте ваш код так, чтобы, если логин или пароль вбиты некорректно, над соответствующим инпутом выводилось сообщение об этом.
//Спросите у пользователя при регистрации еще и email. Занесите его в базу данных. Выполните проверку емейла на корректность и, если он некорректен, над соответствующим инпутом выведите сообщение об этом.
//Спросите у пользователя при регистрации еще и дату рождения в формате день.месяц.год. Занесите дату в базу данных. Выполните проверку даты на соответствие формату.
//Спросите у пользователя при регистрации еще и страну проживания. Предложите ему выбрать одну из стран с помощью выпадающего списка select.

<?php

if(empty($_POST)){
    ?>
    <h1>Зарегистртруйтесь:</h1>
    <form action="" method="POST">
        <label>Введите ваш логин:</label>
        <input name="login" required>
        <label>Введите ваш пароль:</label>
        <input name="password" type="password" required>
        <label for="Подтверждение пароля:">Подтвердите ваш пароль:</label>
        <input type="password" name="confirm" required>
        <label for="Ваш день рождения:">Ваш день рождения:</label>
        <input name="birthday">
        <label for="Введите ваш email:">Введите ваш email:</label>
        <input name="email">
        <label for="Страна проживания">Страна проживания:</label>
        <select name="country" required>
            <option>Russia</option>
            <option>Germany</option>
            <option>Australia</option>
            <option>USA</option>
            <option>Spain</option>
        </select>
        <input type="submit">
    </form>
    <?php
} else {
    if (!empty($_POST['login']) && !empty($_POST['password']) && (!empty($_POST['birthday']) && (!empty($_POST['email']) && (!empty($_POST['country']))))) {
        $login = $_POST['login'];
        $errors = []; // Инициализация массива ошибок

        if (empty($_POST['login'])) {
            $errors[] = "Поле логина не может быть пустым.";
        } else {
            $login = $_POST['login'];
            if (!preg_match('/^[a-zA-Z0-9]+$/', $login)) {
                $errors[] = "Логин может содержать только латинские буквы и цифры.";
            }
            if (strlen($login) < 4 || strlen($login) > 10) {
                $errors[] = "Логин должен быть от 4 до 10 символов.";
            }
        }

        if (empty($_POST['password'])) {
            $errors[] = "Поле пароля не может быть пустым.";
        } elseif (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 12) {
            $errors[] = "Пароль должен быть от 6 до 12 символов.";
        } else {
            $password = md5($_POST['password']); // преобразуем пароль в его хеш
        }

        if (empty($_POST['birthday']) || !preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $_POST['birthday'])) {
            $errors[] = "Вы ввели неверный формат даты рождения.";
        } else {
            $birthday = $_POST['birthday'];
        }

        $email = $_POST['email'];
        if(empty($_POST['email']) || !preg_match("/^\\w+\\.?\\w+@\\w+\\.\\w{2,6}$/", $email)){
             $errors[] = "Не верный email.";
        }else {
            $email = $_POST['email'];
        }

        $country = $_POST['country'];
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
                $query = "INSERT INTO users (login, password, birthday, email, country, registration_date) VALUES ('$login', '$password', '$birthday', '$email','$country', '$registration_date')";
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

?>


