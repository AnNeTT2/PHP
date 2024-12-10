<!--Удалите какую-нибудь куку с помощью хитрого приема. Убедитесь, что она будет удалена сразу. -->

<?php

if(isset($_COOKIE['login'])) {
    setcookie('login', '', time());
        unset($_COOKIE['login']);
    }
var_dump($_COOKIE['login']);
?>