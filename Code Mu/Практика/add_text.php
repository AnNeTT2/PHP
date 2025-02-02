/*
Реализуйте доску объявлений.
Пользователь заходит на сайт, выбирает рубрику и размещает в ней свое объявление

*/

<meta charset="utf-8">

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'NoticeBoard';

$connect = mysqli_connect($host, $user, $pass, $name);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = mysqli_real_escape_string($connect, $_POST['category']);
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $content = mysqli_real_escape_string($connect, $_POST['description']);

    $sql = "INSERT INTO ad (category, title, description) VALUES ('$category', '$title', '$content')";
    if (mysqli_query($connect, $sql)) {
        echo "Новое объявление успешно размещено!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($connect);
    }
}

// Получение категории
$category = isset($_GET['category']) ? mysqli_real_escape_string($connect, $_GET['category']) : '';

// Получение объявлений по категории
if ($category) {
    $sql = "SELECT * FROM ad WHERE category='$category'";
    $result = mysqli_query($connect, $sql);
} else {
    $sql = "SELECT * FROM ad";
    $result = mysqli_query($connect, $sql);
}
?>

<form action="" method="POST">

    <label for="category">Выберите категорию:</label>
    <select name="category" id="category">
        <option value="Работа">Работа</option>
        <option value="Для дома и дачи">Для дома и дачи</option>
        <option value="Транспорт">Транспорт</option>
        <option value="Готовый бизнес и оборудование">Готовый бизнес и оборудование</option>
        <option value="Хобби и отдых">Хобби и отдых</option>
    </select>

    <br>
    <label for="title">Заголовок:</label>
    <input type="text" name="title" required>
    <br>
    <label for="description">Описание:</label>
    <textarea name="description" required></textarea>
    <br>
    <input type="submit" value="Опубликовать">
</form>

<h2>Объявления</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
    }
} else {
    echo "Нет объявлений.";
}
mysqli_close($connect);
?>