<!--С помощью выпадающего списка предложите пользователю выбрать страну, в которой он живет.-->

<h1>Выберите вашу страну:</h1>
    <form action="" method="GET">
            <select name="country">
                <option>Болгария</option>
                <option>Китай</option>
                <option>Испания</option>
            </select>
        <input type="submit">
    </form>

<?php
    var_dump($_GET['country']);
?>