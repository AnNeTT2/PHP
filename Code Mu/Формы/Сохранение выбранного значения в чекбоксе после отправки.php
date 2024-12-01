<!--Сделайте три чекбокса, которые будут сохранять свое значение после отправки.-->

<form action="" method="POST">
    <input type="hidden" name="flag" value="0">

    <input type="checkbox" name="flag1" value="1"
        <?php if(!empty($_POST['flag1'])) echo "checked"?>>

    <input type="checkbox" name="flag2" value="2"
        <?php if(!empty($_POST['flag2'])) echo "checked"?>>

    <input type="checkbox" name="flag3" value="3"
        <?php if(!empty($_POST['flag3'])) echo "checked"?>>
    <input type="submit">
</form>
