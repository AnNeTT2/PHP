<!--Модифицируйте предыдущую задачу так, чтобы выбранное значение не исчезало после отправки. -->

<h1>Выберите ваш язык:</h1>
    <form action="" method="get">
        <select name="language">
            <option value="Русский" <?php
                if(!empty($_GET['language']) and $_GET['language'] === 'Русский'){
                    echo 'selected';
                }
            ?>>Русский</option>

            <option value="Французский" <?php
            if(!empty($_GET['language']) and $_GET['language'] === 'Французский'){
                echo 'selected';
            }
            ?>>Французский</option>

            <option value="Испанский" <?php
            if(!empty($_GET['language']) and $_GET['language'] === 'Испанский'){
                echo 'selected';
            }
            ?>>Испанский</option>

        </select>
        <input type="submit">
    </form>

<?php
    var_dump($_GET['language']);
?>