<!--На одной странице с помощью формы спросите у пользователя имя, возраст, зарплату и еще что-нибудь. Запишите эти данные в одну переменную сессии в виде массива. При заходе на другую страницу переберите сохраненные данные циклом и выведите каждый элемент массива в своем теге li тега ul. -->


<?php

// файл test1.php

session_start();

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $country = $_POST['country'];

    // Записываем данные в сессию
    $_SESSION['user'] = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'country' => $country
    ];

    // Перенаправляем на страницу отображения данных
    header('Location: test2.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>
<body>
<h1>Введите свои данные</h1>
<form method="post" action="">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="age">Возраст:</label>
    <input type="number" id="age" name="age" required><br>

    <label for="salary">Зарплата:</label>
    <input type="number" id="salary" name="salary" required><br>

    <label for="country">Страна проживания:</label>
    <input type="text" id="country" name="country"><br>

    <input type="submit" value="Отправить">
</form>
</body>
</html>

// файл test2.php

<?php
session_start();

// Проверяем, есть ли данные в сессии
if (isset($_SESSION['user'])) {
    $userData = $_SESSION['user'];
} else {
    // Если данных нет - перенаправляем на форму
    header('Location: test1.php');
    exit();
}
?>


<h1>Ваши данные:</h1>
<ul>
    <?php

    foreach ($userData as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    ?>
</ul>