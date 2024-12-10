<!-- Опробуйте описанный прием-->

<?php
if(!isset($_COOKIE['login'])) {
    setcookie('login', 'qwerty1');
    $_COOKIE['login'] = 'qwerty1';
}
echo $_COOKIE['login'];
?>