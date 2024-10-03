<!-- Сделайте страницу, на которую вы будете отправлять запрос либо методом GET, либо методом POST.-->

<?php
    $method = $_SERVER['REQUEST_METHOD'];
    var_dump($method);
?>

<!-- Сделайте так, чтобы ваша страница определяла, каким методом отправлен запрос и выводила информацию об этом.-->
<?php

$requestMethod = $_SERVER['REQUEST_METHOD']; // Получаем метод запроса

echo "<h1>Метод запроса</h1>";

echo "<p>Метод: <strong>$requestMethod</strong></p>";


if ($requestMethod === 'GET') {
    echo "<h2>Параметры запроса GET:</h2>";
    if (!empty($_GET)) {
        echo "<ul>";
        foreach ($_GET as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Нет параметров GET.</p>";
    }
} elseif ($requestMethod === 'POST') {
    echo "<h2>Параметры запроса POST:</h2>";
    if (!empty($_POST)) {
        echo "<ul>";
        foreach ($_POST as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Нет параметров POST.</p>";
    }
} else {
    echo "<p>Этот метод запроса не поддерживается.</p>";
}
?>
