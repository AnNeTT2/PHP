<!-- Сделайте страницу logout.php, при заходе на которую будет завершаться сессия пользователя.-->

<?php
// файл index.php

session_start();

if(!empty($_POST)){
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];


    header('Location: test2.php');
    exit();
}
?>

<form action="" method="POST">
    <label>Введите фамилию:</label>
    <input name="surname"><br><br>
    <label>Введите имя:</label>
    <input name="name"><br><br>
    <label>Введите возраст:</label>
    <input name="age"><br><br>
    <input type="submit" value="Отправить">
</form>

//файл logout.php


<?php
session_start();

session_destroy();
?>

<h1>Ваши данные:</h1>

<?php if (isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age'])): ?>
    <p>Фамилия: <?php echo $_SESSION['surname']; ?></p>
    <p>Имя: <?php echo $_SESSION['name']; ?></p>
    <p>Возраст: <?php echo $_SESSION['age']; ?></p>
<?php endif; ?>