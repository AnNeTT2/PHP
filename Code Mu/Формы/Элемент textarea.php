<!-- Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран.-->

<?php
    if(!empty($_GET)){
        echo $_GET['text'];
    }
?>

<form action="" method="get">
    <textarea name="text" placeholder="Оставьте ваш отзыв"></textarea><br><br>
    <input type="submit" value="Отправить">
</form>
