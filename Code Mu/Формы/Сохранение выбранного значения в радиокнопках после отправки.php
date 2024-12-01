<!--С помощью переключателей попросите пользователя выбрать его язык. Сделайте так, чтобы выбор не пропадал после отправки формы. -->

<h1>Выберите ваш язык</h1>

<form action="" method="POST">
    <input type="radio" name="radio" value="1" id="russian" <?php if(!empty($_POST['radio']) and $_POST['radio'] === "1"){ echo "checked"; } ?>>
    <label for="russian">Русский</label><br>

    <input type="radio" name="radio" value="2" id="english" <?php if(!empty($_POST['radio']) and $_POST['radio'] === "2"){ echo "checked"; } ?>>
    <label for="english">Английский</label><br>

    <input type="radio" name="radio" value="3" id="spanish" <?php if(!empty($_POST['radio']) and $_POST['radio'] === "3"){ echo "checked"; } ?>>
    <label for="spanish">Испанский</label><br><br>

    <input type="submit" value="Отправить">
</form>