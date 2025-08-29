//Реализуйте описанную выше регистрацию. После этого зарегистрируйте нового пользователя и авторизуйтесь под ним. Убедитесь, что все работает, как надо.
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

        // Подготовка SQL запроса и внесение данных в табл users
        $query = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
        $res = mysqli_query($link, $query);

        if ($res) {
            echo "Добро пожаловать, " . htmlspecialchars($login);
        } else {
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
}
?>

//Модифицируйте ваш код так, чтобы кроме логина и пароля пользователю нужно было ввести еще и дату своего рождения и email. Сохраните эти данные в базу данных.
/* sql запрос на добавление двух колонок (email и birthday)
alter table users add birthday DATE, add email varchar(50);
*/

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
        $login       = $_POST['login'];
        $password    = $_POST['password'];
        $birthday    = $_POST['birthday'];
        $email       = $_POST['email'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $name = 'users';

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES utf8");

        // Подготовка SQL запроса и внесение данных в табл users
        $query = "INSERT INTO users (login, password,birthday, email) VALUES ('$login', '$password', '$birthday', '$email')";
        $res = mysqli_query($link, $query);

        if ($res) {
            echo "Добро пожаловать, " . htmlspecialchars($login);
        } else {
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
}
?>


// Модифицируйте ваш код так, чтобы в базу автоматически сохранялась дата регистрации.

/* sql запрос на добавление  колонки registration_date
alter table users ADD registration_date DATETIME;
*/

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
        $login       = $_POST['login'];
        $password    = $_POST['password'];
        $birthday    = $_POST['birthday'];
        $email       = $_POST['email'];
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

        if ($res) {
            echo "Добро пожаловать, " . htmlspecialchars($login);
        } else {
            echo "Ошибка: " . mysqli_error($link);
        }
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
}
?>