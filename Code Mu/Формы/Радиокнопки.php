<!--С помощью двух переключателей спросите у пользователя его пол. Выведите результат на экран.-->

<?php
    if(!empty($_POST['radio'])){
    echo $_POST['radio'];
}
?>

<h1>Выберите ваш пол:</h1>
    <form action="" method="POST">
        <input type="hidden" name="radio" value="0">
        <label>Мужской</label>
        <input type="radio" name="radio" value="Мужской" >
        <label>Женский</label>
        <input type="radio" name="radio" value="Женский" >
        <input type="submit" value="Отправить">
    </form>