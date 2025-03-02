<!--Введение -->
<!-- Переделайте следующую структуру PHP в строку JSON: $data = [1, 2, 3];-->
<?php

$data = '[1, 2, 3]';
?>


<!-- Переделайте следующую структуру PHP в строку JSON:  $data = ['x', 'y', 'z',];-- >
<?php
$data = '["x" ,"y" ,"z"]';
?>
<!-- Переделайте следующую структуру PHP в строку JSON: $data = [
		'x' => 'a',
		'y' => 'b',
		'z' => 'c',
	]; -->
<?php
$data = '{
    "x": "a",
    "y": "b",
    "z": "c"
}';
?>

<!--Переделайте следующую структуру PHP в строку JSON:  $data = [
		'ru' => ['1', '2', '3'],
		'en' => ['a', 'b', 'c'],
	]; -->

<?php
$data = '{
"ru":["1","2","3"],
"en":["a","b","c"]
}';
?>

<!-- Преобразование данных в json. Использование функции json_encode-->
<!-- Преобразуйте в JSON следующую структуру PHP:	$data = [
		'x' => 1,
		'y' => 2,
		'z' => 3,
	]; -->


<?php
$data = [
'x' => 1,
'y' => 2,
'z' => 3,
];

$json = json_encode($data); //преобразование данныч в PHP формат в формат JSON
var_dump($json);
?>

<!-- Преобразование данных из Json-->
<!--Преобразуйте следующий JSON в структуру PHP: $json = '[
		"x",
		"y",
		"z"
	]';

-->

<?php
$json = '["x", "y", "z"]';
$data = json_decode($json); // Декодируем JSON в ассоциативный массив
var_dump($data);
?>

<!-- Преобразование объектов из Json -->
<!--Преобразуйте следующий JSON в структуру PHP:

$json = '{
		"user": {
			"name": "john",
			"surn": "smit"
		},
		"city": "London"
	}';
Выведите на экран имя, фамилию и город. -->

<?php
$json = '{
    "user": {
    "name": "john",
    "surn": "smit"
    },
    "city": "London"
}';

$data = json_decode($json); // Декодируем JSON в ассоциативный массив
var_dump($data);
?>

<!--Преобразуйте следующий JSON в структуру PHP: $json = '{
		"user": {
			"name": "john",
			"surn": "smit"
		},
		"city": "London"
	}';
Выведите на экран имя, фамилию и город.
-->

<?php
$json = '{
    "ru": ["пн", "вт", "ср"],
    "en": ["mn", "tu", "wd"]
}';

$data = json_decode($json); // Декодируем JSON в ассоциативный массив
var_dump($json);
?>

<!-- Объекты из Json в ассоциативные массивы-->
<!--Преобразуйте следующий JSON в ассоциативный массив PHP:

$json = '{
		"ru": ["пн", "вт", "ср"],
		"en": ["mn", "tu", "wd"]
	}';

Выведите на экран английское название вторника. -->

<?php
$json = '{ "ru": ["пн", "вт", "ср"], "en": ["mn", "tu", "wd"] }';

// Декодируем JSON в ассоциативный массив
$data = json_decode($json, true);

// Выводим английское название вторника
echo $data["en"][1];

?>

<!-- Отправка данных в формате Json -->
<!-- По обращению к некоторому файлу создайте массив с числами от 1 до 100 и отдайте его в формате JSON.-->
<?php
$nums = range(1, 100);

$json = json_encode($nums); // преобразование в json
header('Content-Type: application/json'); // установка заголовка для json-ответа
echo  $json;
?>

<!-- Ошибки парсера при разборе JSON-->
<!--Дана строка с некоторым JSON. Разберите его в структуру данных PHP. Выведите результат разбора или причину ошибки, если разобрать JSON не удалось.-->

<?php

$json = '["a", "b", "c",';
$jsonData = json_decode($json);
$error = json_last_error();

switch ($error) {
    case JSON_ERROR_NONE:
        echo 'ошибок нет';
        break;
    case JSON_ERROR_DEPTH:
        echo 'достигнута максимальная глубина стека';
        break;
    case JSON_ERROR_STATE_MISMATCH:
        echo 'некорректные разряды или несоответствие режимов';
        break;
    case JSON_ERROR_CTRL_CHAR:
        echo 'некорректный управляющий символ';
        break;
    case JSON_ERROR_SYNTAX:
        echo 'синтаксическая ошибка, некорректный JSON';
        break;
    case JSON_ERROR_UTF8:
        echo 'некорректные символы UTF-8, возможно неверно закодирован';
        break;
    default:
        echo 'неизвестная ошибка';
        break;
}

var_dump($error);

?>
