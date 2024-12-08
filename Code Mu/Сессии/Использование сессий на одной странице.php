<!--Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт. -->
<?php

session_start();

// Проверяем, установлено ли время захода
if (!isset($_SESSION['visit_time'])) {
    // Если не установлено, сохраняем текущее время
    $_SESSION['visit_time'] = time();
}

// Вычисляем разницу в секундах
$time_since_visit = time() - $_SESSION['visit_time'];
echo "Вы посещали сайт " . $time_since_visit ."секунд назад";

?>

<!--Использование счетчика в одном файле -->

<?php
session_start();

if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
echo $_SESSION['counter'];
?>