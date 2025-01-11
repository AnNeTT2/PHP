<?php
<!--Пусть у вас есть файлы 1.txt и 2.txt, в тексте которых записаны какие-то числа. Напишите скрипт, который выведет на экран сумму записанных в этих файлах чисел.-->

<?php
echo file_get_contents('1.txt') + file_get_contents('2.txt')
?>

<!-- Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt.-->

<?php


$numbers = [1, 2, 3, 4, 5]
$sum = array_sum($numbers);

file_put_contents('sum.txt', $sum);

echo "Сумма чисел: $sum записана в файл sum.txt";
?>

<!-- Пусть у вас есть файл, в котором записано некоторое число. Откройте этот файл, возведите число в квадрат и запишите обратно в файл.-->

<?php
$text = file_get_contents('2.txt');
file_put_contents('2.txt', $text ** 2);
?>

<!-- Пусть в корне вашего сайта лежит файл count.txt. Изначально в нем записано число 0. Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал это число на 1. То есть у нас получится счетчик обновления страницы в виде файла.-->

<?php
// Путь к файлу count.txt
$filename = 'count.txt';


if (!file_exists($filename)) {
    file_put_contents($filename, 0);
}

// Читаем текущее значение из файла
$count = (int)file_get_contents($filename);

// Увеличиваем значение на 1
$count++;

// Записываем новое значение в файл
file_put_contents($filename, $count);

// Выводим текущее значение счетчика на страницу
echo "Количество обновлений страницы: " . $count;
?>


<!--Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом, прочитайте содержимое каждого из файлов, слейте его в одну строку и запишите в новый файл new.txt. Изначально этого файла не должно быть.-->

<?php

$files = ['1.txt', '2.txt', '3.txt'];
// Инициализируем переменную для хранения содержимого
$content = '';

foreach ($files as $file) {
    if (file_exists($file)) {
        // Читаем содержимое файла и добавляем его к переменной $content
        $content .= file_get_contents($file) . "\n"; // перенос строки для разделения
    } else {
        echo "Файл $file не найден.\n";
    }
}

// Записываем объединенное содержимое в новый файл new.txt
file_put_contents('new.txt', $content);

echo "Содержимое файлов объединено и записано в new.txt.";

?>

<!--Относительные пути-->
<!--Напишите код, который прочитает содержимое текстового файла:

index.php
/dir1/
/dir2/
test.txt -->

<?php
    echo file_get_contents('../dir1/dir2/test.txt');
?>

<!--Напишите код, который прочитает содержимое текстового файла:

/script/
index.php
/dir1/
/dir2/
test.txt -->

<?php
    echo  file_get_contents('../dir1/dir2/test.txt');
?>

<!--Напишите код, который прочитает содержимое текстового файла:

/script1/
/script2/
index.php
/dir/
test.txt -->

<?php
    echo file_get_contents('../dir/test.txt');
?>

<!--Напишите код, который прочитает содержимое текстового файла:

/script1/
/script2/
/script3/
index.php
/dir1/
/dir2/
/dir3/
test.txt -->

<?php
    echo file_get_contents('../../dir1/dir2/dir3/test.txt');
?>

<!-- Абсолютные пути -->
<!-- Прочитайте файл, используя абсолютный путь
/script/
index.php
/directory/
test.txt
-->

<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    echo file_get_contents($root . '../directory/test.txt');
?>

<!--Напишите код, который прочитает содержимое текстового файла:

/script1/
/script2/
index.php
/dir/
test.txt -->
<?php
    echo __DIR__ . '/test.txt';
?>

<!--Напишите код, который прочитает содержимое текстового файла:

/script1/
/script2/
/script3/
index.php
/dir1/
/dir2/
/dir3/
test.txt -->
<?php
    echo __DIR__ . '/test.txt';
?>

<!--Переименовывание файлов-->
<!--Пусть в корне вашего сайта лежит файл old.txt. Переименуйте его на new.txt. -->

<?php
    rename('old.txt', 'new.txt');
?>

<!--Перемещение файлов-->
<!--Пусть в корне вашего сайта лежит файл file.txt. Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку. -->

<?php
    rename('file.txt', 'dir/file.txt');
?>

<!--Пусть в корне вашего сайта лежит папка dir1, а в ней файл file.txt. Пусть также в корне вашего сайта лежит папка dir2. Переместите файл в эту папку. -->

<?php
    rename('dir1/file.txt', 'dir2/file.txt');
?>

<!--Копирование файлов-->
<!-- Пусть в корне вашего сайта лежит файл. С помощью цикла положите в папку copy пять копий этого файла. Именем файлов копий пусть будут их порядковые номера.-->

<?php
$root = 'message.txt'; // Исходный файл
$rootDir = 'copy'; // Директория для копий
// Проверяем, существует ли директория 'copy', если нет - создаем её
if (!is_dir($rootDir)) {
    mkdir($rootDir);
}
// Проверяем, существует ли файл 'message.txt'
if (!file_exists($root)) {
    echo "Исходный файл $root не найден.<br>";
    exit; // Завершаем выполнение скрипта, если файл не найден
}

for ($i = 1; $i <= 5; $i++) {
    $copyFile = $rootDir.'/'.$i.'.txt';
    // Путь к копии файла
    // Копируем файл
    if (copy($root, $copyFile)) {
        echo "Файл успешно скопирован в $copyFile<br>";
    } else {
        echo "Ошибка копирования в $copyFile<br>";
    }
}

?>

<!--Удаление файлов-->
<!-- Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы.-->

<?php
$files = ['1.txt', '2.txt', '3.txt'];

foreach ($files as $file){
    if(file_exists($file)){
        if(unlink($file)){
            echo "Файл '$file' был успешно удален.<br>";
        } else {
            echo "Не удалось удалить файл '$file'. <br>";
        }
    } else {
        echo "Файл '$file' не найден.<br>";
    }
}

?>

<!-- Определение размера файлов-->
<!--Пусть в корне вашего сайта лежит файл. Узнайте его размер, выведите на экран. -->

<?php
    echo filesize('1.txt'); // байты
?>

<!--Модифицируйте предыдущую задачу так, чтобы размер файла выводился в килобайтах. -->

<?php
    echo  filesize('1.txt') / 1024; // килобайты
?>

<!--Положите в корень вашего сайта какую-нибудь картинку размером более мегабайта. Узнайте размер этого файла и переведите его в мегабайты. -->

<?php
echo filesize('pic.png') / 1024 /1024; // мегабайты
?>

<!--Положите в корень вашего сайта какой-нибудь фильм размером более гигабайта. Узнайте размер этого файла и переведите его в гигабайты. -->

<?php
    echo filesize('films.mp4') /1024 /1024 /1024;//гигабайты
?>

<!--Проверка существования файлов-->
<!--Проверьте, лежит ли в корне вашего сайта файл file.txt. -->

<?php
    if(file_exists('test.txt')){
        echo filesize('test.txt');
    } else {
        echo "файла не существует";
    }
?>

<!--Проверьте, лежит ли в корне вашего сайта файл file.txt. Если нет - создайте его и запишите в него текст '!'. -->

<?php
    if(file_exists('test.txt')){
        echo filesize('test.txt');
        }else {
        file_put_contents('test.txt', '!');
	echo filesize('test.txt');
    }
?>

<!--Проверьте, лежит ли в корне вашего сайта файл message.txt. Если такой файл есть - выведите текст этого файла на экран. -->

<?php
    if(file_exists('message.txt')){
        echo file_get_contents('message.txt');
    }else {
        file_put_contents('message.txt', 'Привет!');
        file_get_contents('message.txt');
    }
?>

<!--Создание папок -->
<!--Создайте в корне вашего сайта папку с названием dir. -->

<?php
    mkdir('dir');
?>

<!--Дан массив со строками. Создайте в корне вашего сайта папки, названиями которых служат элементы этого массива -->

<?php
mkdir('Files');
$arr = ['file1', 'file2', 'file3'];
    foreach ($arr as $value){
        mkdir('Files/'.$value);
    }
?>

<!--Создайте в корне вашего сайта папку с названием test. Затем создайте в этой папке три файла: 1.txt, 2.txt, 3.txt -->

<?php
    mkdir('tests');
    mkdir('tests/'.'1.txt');
    mkdir('tests/'.'2.txt');
    mkdir('tests/'.'3.txt');
?>

<!--Удаление папок-->
<!--Удалите папку с названием tests. -->

<?php
    rmdir('tests');
?>

<!--Переименование папок-->
<!-- Пусть в корне вашего сайта лежит папка dir. Переименуйте ее на test.-->
<?php
    rename('dir', 'test');
?>

<!--Перемещение папок-->
<!-- Пусть в корне вашего сайта лежит папка dir. Переместите ее в папку test.-->

<?php
    rename('dir', 'tests/dir');
?>

<!--Чтение содержимого папки-->
<!-- Пусть в корне вашего сайта лежит папка Files, а в ней какие-то текстовые файлы. Выведите на экран столбец имен этих файлов.-->

<?php
    $files = array_diff(scandir('Files'), ['..', '.']);
    var_dump($files);
?>

<!--  Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Переберите эти файлы циклом и выведите их тексты в браузер.-->

<?php
$directory = 'dir';
$files =  array_diff(scandir($directory), ['.', '..']);

if (!is_dir($directory)) {
    echo "Директория '$directory' не найдена.";
    exit;
}
foreach ($files as $file) {
if (is_file($directory . '/' . $file)) { // Проверяем, что это файл
 echo file_get_contents($directory . '/' . $file);

    }
}
?>

<!--Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак-->

<?php

$directory = 'Files';
$files = array_diff(scandir($directory), ['.', '..']); // Игнорируем текущую и родительскую директории

foreach ($files as $file) {
    if (is_file($directory . '/' . $file)) { // Проверяем, что это файл
        file_put_contents($directory . '/' . $file, '!', FILE_APPEND); // Записываем '!' в конец файла
    }
}

echo " Восклицательный знак добавлен к всем файлам в папке '$directory'.";

?>

<!--Отличаем папку от файла-->
<!--Пусть дан путь. Если путь ведет к папке выведите сообщение об этом.-->

<?php
$path = 'dir';
var_dump(is_dir($path));
?>

<!--Пусть дан путь. Если путь ведет к файлу выведите сообщение об этом.-->

<?php
$path = 'test.txt';
var_dump(is_file($path);
?>

<!--Разбираем содержимое папки -->
<!--Дана папка. Выведите на экран столбец имен подпапок из этой папки.-->

<?php
$tests = 'tests';
$files = array_diff(scandir($tests), ['..', '.']); // Получаем все файлы и папки, игнорируя текущую и родительскую директории

foreach ($files as $file) {
    if (is_dir($tests . '/' . $file)) {
        echo $file . "<br>"; // Выводим имя папки
    }
}
?>

<!--Дана папка. Выведите на экран столбец имен файлов из этой папки.-->

<?php
$tests = 'Files';
$files = array_diff(scandir($tests), ['..', '.']); // Получаем все файлы и папки, игнорируя текущую и родительскую директории

foreach ($files as $file) {
    // Проверяем, является ли элемент папкой
    if (is_file($tests . '/' . $file)) {
        echo $file . "<br>"; // Выводим имя папки
    }
}
?>

<!--Дана папка. Запишите в конец каждого файла этой папки текущий момент времени. -->

<?php
$root = 'dir'; // Директория с файлами
$files = array_diff(scandir($root), ['.', '..']); // Получаем список файлов, исключая '`.`' и '`..`'
$currentTime = date('Y-m-d H:i:s'); // Получаем текущую дату и время

foreach ($files as $file) {
    if (is_file($root . '/' . $file)) { // Проверяем, является ли элемент файлом
        // Создаем новое имя файла с добавлением времени
        $newFileName = $root . '/' . $file . '_' . str_replace([':', ' '], ['-', '_'], $currentTime);
        // Переименовываем файл
        if (rename($root . '/' . $file, $newFileName)) {
            echo "Файл $file переименован в $newFileName<br>";
        } else {
            echo "Ошибка переименования файла $file.<br>";
        }
    }
}
?>




<!-- Деление верстки на элементы -->
<!--Даны файлы со следующей версткой:
<!DOCTYPE html>
<html>
   <head>
      <title>title</title>
   </head>
   <body>
      <header>
         header
      </header>
      <aside>
         sidebar
      </aside>
      <main>
         content
      </main>
      <header>
         footer
      </header>
   </body>
</html>
Пусть верстка файлов отличается лишь тайтлами и контентом. Вынесите содержимое хедера, футера и сайдбара в отдельные подключаемые файлы.
 -->
<?php
	//основой файл index.php
<!DOCTYPE html>
<html>
   <head>
      <title>title</title>
   </head>
   <body>
      <?php include 'elem/header.php' ?>
      <?php include 'elem/sidebar.php'?>
      <main>
         content
      </main>
      <?php include 'elem/footer.php'?>
   </body>
</html>

?>
<?php
	//файл elem/header.php
<header>
    header
</header>

?>
<?php
	файл //файл elem/sidebar.php
<aside>
    sidebar
</aside>
?>
<?php
	// //файл elem/footer.php
<header>
    footer
</header>

?>

<!--  Сделайте файл, который будет генерировать из массива дней выпадающий список дней недели. Запишите результат в переменную в вашем основном файле. Выведите эту переменную в нескольких местах файла. -->
<?php
// Массив с днями недели
$daysOfWeek = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
// Генерация выпадающего списка
ob_start(); //  буферизацию вывода
?>

<select name="days">
    <?php foreach ($daysOfWeek as $day): ?>
        <option value="<?php echo strtolower($day); ?>"><?php echo $day; ?></option>
    <?php endforeach; ?>
</select>

<?php
// Сохраняем результат в переменной
$dropdown = ob_get_clean(); // Получаем содержимое буфера и очищаем его

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Выпадающий список дней недели</title>
</head>
<body>
<h1>Выберите день недели</h1>
<!-- Выводим выпадающий список в одном месте -->
<div>
    <label for="days">Дни недели:</label>
    <?php echo $dropdown; ?>
</div>

</body>
</html>

<!--Подключение файлов-->
<!--Сделайте файл с полезным набором функций. Подключите его к вашему основному файлу. -->

<?php
// файл  с полезной функцией, которая определяет високосный год или нет functionIsLeapYear.php
function isLeapYear($year){
    if(($year % 4 === 0) and ($year % 100 != 0) or ($year % 400 == 0)){
        echo 'Високосный год';
    } else{
        echo 'Не високосный год';
    }
}
echo isLeapYear(2058);

?>

<?php
 //  основной файл index.php
require 'functionIsLeapYear.php';
echo isLeapYear(3007);
?>


<!--Однократное подключение файлов -->
<!--Сделайте несколько файлов с полезными наборами функций. Подключите эти файлы друг к другу и к вашему основному файлу. -->

<?php
// файл pow.php
function square($num) {
    return $num ** 2;
}

function cube() {
    return $num ** 3;
}

?>

<?php
// файл  sum.php
require 'pow.php';

function squareSum($arr) {
    $res = 0;

    foreach ($arr as $elem) {
        $res += square($elem);
    }

    return $res;
}

function cubeSum($arr) {
    $res = 0;

    foreach ($arr as $elem) {
        $res += cube($elem);
    }

    return $res;
}
?>

<?php
require_once 'pow.php';
require_once 'sum.php';