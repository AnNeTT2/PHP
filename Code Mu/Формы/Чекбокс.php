<!-- Сделайте форму с инпутом и флажком.
С помощью инпута спросите у пользователя имя. После отправки формы, если флажок был отмечен, поприветствуйте пользователя, а если не был отмечен - попрощайтесь.-->

<?php
if(!empty($_GET)){
    if(isset($_GET['flag'])){
        echo "Привет, ", $_GET['name'] . "!";
    }else{
        echo "Прощай, ", $_GET['name'] . "!";
    }
}


?>
<h1>Введите ваше имя: </h1>
    <form action="" method="GET">
        <input type="checkbox" name="flag">
        <input type="text" name="name">
        <input type="submit" value="Отправить">
    </form>
