//Реализуйте описанную выше авторизацию с соленым паролем. Попробуйте зарегистрируйтесь, авторизуйтесь, убедитесь, что все работает.
<?php
session_start()
?>
<?php
// генерация соли
function generateSalt(){
    $salt = '';
    $saltLength = 8;
    for($i = 0;$i < $saltLength;$i++){
        $salt .= chr(mt_rand(33, 126));  // символ из ASCII-table
    }
    return $salt;
}
$salt = generateSalt();
$password = md5($salt.$_POST['password']);

?>
<?php
if (empty($_POST)) {
    ?>
    <h1>Авторизуйтесь:</h1>
    <form action="" method="POST">
        <label>Введите ваш логин:</label>
        <input name="login">
        <input name="password" type="password">
        <input type="submit">
    </form>
    <?php
} else {
    if (!empty($_POST['login']) && !empty($_POST['password']) )
    {
        $login = $_POST['login'];
        // подключение к бд
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $name = 'users';

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES utf8");



        $query = "select * from users where login='$login'";
        $res = mysqli_query($link, $query);
        $dbUser = mysqli_fetch_assoc($res);

        if (!empty($dbUser) ) {
            $salt = $dbUser['salt']; // соль из БД
            $hash = $dbUser['password']; // соленый пароль из БД


            $password = md5($salt.$_POST['password']);
            if($password == $hash){ // // Сравниваем соленые хеши
                echo "Добро пожаловать, " . htmlspecialchars($login);
            } else {
                echo "Ошибка: " . mysqli_error($link);
            }
        } else {
            echo "Пользователя с таким логином не существует.";
        }
    }
}