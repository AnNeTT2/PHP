<!--С помощью формы спросите у пользователя год. После отправки определите, этот год високосный или нет. Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год. -->

<?php
// Получаем текущий год
$currentYear = date("Y");
$enteredYear = '';

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredYear = (int)$_POST['year']; // Получаем введённый год
} else {
    $enteredYear = $currentYear; // Устанавливаем значение по умолчанию в текущее значение
}

// Функция для проверки високосного года
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true; // Год високосный
    }
    return false; // Год не високосный
}

// Определяем, является ли введённый год високосным
$isLeap = '';
if (!empty($enteredYear)) {
    $isLeap = isLeapYear($enteredYear) ? "год $enteredYear является високосным." : "год $enteredYear не является високосным.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка високосного года</title>
</head>
<body>
    <h2>Введите год:</h2>
        <form action="" method="post">
            <label for="year">Год:</label>
            <input type="number" id="year" name="year" value="<?php echo $enteredYear; ?>" required>
            <input type="submit" value="Проверить">
        </form>

<?php if (!empty($isLeap)): // Если есть результат проверки года ?>
    <h3><?php echo $isLeap; ?></h3>
<?php endif; ?>
</body>
</html>
