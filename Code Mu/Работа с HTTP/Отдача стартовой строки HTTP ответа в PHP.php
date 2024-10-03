<!--Допишите код так, чтобы отдавался заголовок 404 ошибки:
 $arr = ['a', 'b', 'c'];
	$key = $_GET['key'];

	if (isset($arr[$key])) {
		echo $arr[$key];
	} else {
		// отдать 404
		echo 'error';
	}-->

<?php
$arr = ['a', 'b', 'c'];
$key = $_GET['key'];

// Проверяем, существует ли ключ в массиве
if (isset($arr[$key])) {
    echo $arr[$key];
} else {
    header('HTTP/1.0 404 Not Found');
    // Устанавливаем код ответа 404
    // http_response_code(404);  header('HTTP/1.0 404 Not Found');

    // Выводим сообщение типа ошибки
    echo 'Ошибка 404: Запрашиваемый элемент не найден.';
}
?>