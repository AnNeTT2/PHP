<!--Отправьте с помощью GET-запроса число. Выведите его на экран. -->

<?php
// http://localhost:63342/php_learning/Code%20Mu/%D0%A4%D0%BE%D1%80%D0%BC%D1%8B/GET%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D1%8B.php?num=2
    echo $_GET['num'];
?>

<!--Отправьте с помощью GET-запроса число. Выведите его на экран квадрат этого числа -->

<?php
//http://localhost:63342/php_learning/Code%20Mu/%D0%A4%D0%BE%D1%80%D0%BC%D1%8B/GET%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D1%8B.php?num1=80
    echo $_GET['num1'] * $_GET['num1'];
?>

<!--Отправьте с помощью GET-запроса два числа. Выведите его на экран сумму этих чисел. -->

<?php
//http://localhost:63342/php_learning/Code%20Mu/%D0%A4%D0%BE%D1%80%D0%BC%D1%8B/GET%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D1%8B.php?num1=80&num2=100
    echo  $_GET['num1'] + $_GET['num2'];
?>

<!--Пусть с помощью GET-запроса отправляется число. Сделайте так, чтобы если передано число 1 - на экран вывелось слово 'hello', а если 2 - то слово 'bye' -->

<?php
    if (!empty($_GET['num3']) && $_GET['num3'] === "1") {
        echo 'hello';
    } elseif (!empty($_GET['num3']) && $_GET['num3'] === "2") {
        echo 'bye';
    }
?>

<!--Дан массив: $arr = ['a', 'b', 'c', 'd', 'e'];Пусть с помощью GET-запроса можно передать число. Сделайте так, чтобы на экран вывелся элемент массива с переданным в запросе номером.  -->

<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $index = $_GET['num4'];

    if($index >= 0 && $index < count($arr)){
        echo $arr[$index];
    }
?>
