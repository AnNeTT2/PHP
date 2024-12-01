<!--С помощью выпадающего списка попросите пользователя выбрать его язык.-->

<h1>Выберите ваш язык:</h1>
    <form action="" method="GET">
        <select name="language">
            <option value="Русский">Русский</option>
            <option value="Французский">Французский</option>
            <option value="Испанский">Испанский</option>
        </select>
    <input type="submit">
    </form>

<?php
    var_dump($_GET['language']);
?>