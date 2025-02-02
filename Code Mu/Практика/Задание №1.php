/*
Реализуйте доску объявлений.
Пользователь заходит на сайт, выбирает рубрику и размещает в ней свое объявление

*/
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Доска объявлений</title>
</head>
<body>
    <h1>Доска объявлений</h1>

<form action="" method="POST">
  <label for="category">Выберите категорию:</label>

    <select name="category" id="category">
        <option value="Работа">Работа</option>
        <option value="Для дома и дачи">Для дома и дачи</option>
        <option value="Транспорт">Транспорт</option>
        <option value="Готовый бизнес и оборудование">Готовый бизнес и оборудование</option>
        <option value="Хобби и отдых">Хобби и отдых</option>
    </select>

    <label for="ad_text">Текст для объявления:</label>
    <textarea name="ad_text" id="ad_text"></textarea>
    <button type="submit">Отправить объявление.</button>

</form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] ==='POST') {
        $category = $_POST['category'];
        $ad_text = $_POST['ad_text'];


        echo "Ваше объявление размещено в категорию '{$category}':<br>{$ad_text}";
    } else {
        echo "Не получилось отправить объявление. Пожалуйста, перепроверьте данные";
    }
?>