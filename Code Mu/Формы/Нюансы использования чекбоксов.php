<!--С помощью флажка спросите у пользователя, есть ему уже 18 лет или нет. Если есть, разрешите ему доступ на сайт, а если нет - не разрешите. -->

<?php
if(!empty($_GET)){
    if($_GET['age'] === "да"){
        echo "Доступ разрешен";
    }else{
        echo "Доступ запрещен";
    }
}

?>

<h1>Вам есть 18 лет?</h1>
<form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    <label>да</label>
    <input type="checkbox" name="age" value="да">
    <label>нет</label>
    <input type="checkbox" name="age" value="нет">
    <input type="submit" value="Отправить">
</form>
