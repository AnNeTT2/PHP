<!--Пусть в textarea вводится русский текст. После отправки формы выведите на экран транслит этого текста. Сделайте так, чтобы содержимое формы сохранялось после отправки. -->
<?php
session_start();
?>
<?php
// Функция для преобразования русского текста в транслит
function translit($text) {
    $translitTable = [
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo',
        'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M',
        'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',

        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
        'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
        'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    ];

    return strtr($text, $translitTable); // Заменяем символы на транслит
}

// Переменная для хранения текста
$inputText = '';
$transliteratedText = '';

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST['text']; // Получаем текст из textarea
    $transliteratedText = translit($inputText); // Преобразуем его в транслит
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Транслит текста</title>
</head>
<body>
    <h2>Введите русский текст:</h2>
        <form method="post" action="">
            <textarea id="text" name="text" rows="10" cols="50" required><?php echo htmlspecialchars($inputText); ?></textarea><br>
            <input type="submit" value="Преобразовать">
        </form>

<?php if (!empty($transliteratedText)): // Если есть результат преобразования текста ?>
    <h3>Транслит:</h3>
    <p><?php echo htmlspecialchars($transliteratedText); ?></p>
<?php endif; ?>
</body>
</html>

