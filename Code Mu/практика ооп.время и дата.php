//Объект с датой и временем в PHP

<?php

//Создайте объект DateTime с текущим моментом времени. Выведите содержимое этого объекта с помощью var_dump
// Создаем объект DateTime с текущим моментом
$date = new DateTime();
// Выводим содержимое объекта с помощью var_dump
var_dump($date);

?>

//Форматирование вывода времени в PHP

<?php
// Дана дата:$date = new DateTime(); Выведите ее в формате день-месяц-год.

$date = new DateTime(); // Создаем объект DateTime с текущим моментом
echo $date->format('d.m.Y'); //Выведите текущую дату в формате день.месяц.год.


?>
<?php
//Дана дата:$str = '2025-12-31';Выведите ее в формате день-месяц-год.

$date = new DateTime(); // Создаем объект DateTime с текущим моментом
echo $date->format('d-m-Y'); //Выведите текущую дату в формате день-месяц-год.

?>

<?php

//Дана дата: Получите день недели, соответствующий этой дате.
 $str = '2025-12-31';

$date = new DateTime($str); // Создаем DateTime из строки
$weekdayName = $date->format('l');// День недели по имени
echo "День недели: ". $weekdayName;
?>

<?php

// Дана дата: $str1 = '2025-12-31 12:59:59';Выведите ее в формате час:минута день.месяц.год.
$str1 = '2025-12-31 12:59:59';
$date = new DateTime($str1); // Создаем объект DateTime с заданным моментом
$weekdayFormat = $date->format('H:i d.m.Y'); //Выводим  в формате час:минута день.месяц.год.
echo "Время и дата: " . $weekdayFormat;

?>

//Временной интервал в ООП стиле в PHP

<?php

//Создайте интервал в 3 года и 2 месяца и 1 день. Выведите содержимое объекта с интервалом.
$interval = new DateInterval('P3Y2M1D'); // Создаем объект с  заданным интервалом
var_dump($interval);

?>

<?php

//Создайте интервал в 5 часов, 30 минут и 15 секунд. Выведите содержимое объекта с интервалом.
$interval = new DateInterval('PT5H30M15S'); // Создаем объект с  заданным интервалом
var_dump($interval);

?>
<?php

//Создайте интервал в 1 год, 6 месяцев, 3 дня, 12 часов и 45 минут. Выведите содержимое объекта с интервалом.
$interval = new DateInterval('P3Y6M3DT12H45M'); // Создаем объект с  заданным интервалом
var_dump($interval);

?>
<?php

//Создайте интервал только из 90 секунд. Выведите содержимое объекта с интервалом.
$interval = new DateInterval('PT90S'); // Создаем объект с  заданным интервалом
var_dump($interval);

?>

<?php
//Создайте отрицательный интервал в 1 месяц и 15 минут. Выведите содержимое объекта с интервалом.

$interval = new DateInterval('P1MT15M'); // создаем интервал 1 месяц и 15 минут
$interval->invert = 1; //создаем отрицательный интервал
var_dump($interval);

?>

//Форматирование временного интервала в ООП стиле

<?php
//Создайте интервал в 3 года и 2 месяца и 1 день. Выведите содержимое объекта с интервалом.

$interval = new DateInterval('P3Y2M1D'); // создаем интервал на заданный период
echo $interval->format('%y years %m months %d days');// выводим в виде отформатированной строки

?>


<?php
//Создайте интервал в 5 часов, 30 минут и 15 секунд. Выведите содержимое объекта с интервалом

$interval = new DateInterval('PT5H30M15S');
echo $interval->format('%h hours %i minutes %s seconds');

?>

<?php
//Создайте интервал в 1 год, 6 месяцев, 3 дня, 12 часов и 45 минут. Выведите содержимое объекта с интервалом.

$interval = new DateInterval('P1Y6M3DT12H45M');
echo $interval->format('%y years %m months %d days %h hours %i minutes');

?>

<?php
//Создайте интервал только из 10000 секунд. Выведите содержимое объекта с интервалом.

$interval = new DateInterval('PT10000S');
echo $interval->format('%s seconds');

?>

//Изменение на интервал в PHP в ООП

<?php
//Дана дата:$date = new DateTime('2025-12-31 12:59:59');Прибавьте к этой дате 3 года и 2 месяца и 1 день. Выведите эту дату в каком-нибудь формате.

$date = new DateTime('2025-12-31 12:59:59'); // Создаем объект DateTime с заданным моментом
$interval = new DateInterval('P3Y2M1D');// создаем интервал
$date->add($interval); // Добавляем интервал к дате  через метод add
echo $date->format('Y-m-d H:i:s');

?>

<?php
//Дана дата:$date = new DateTime('2025-12-31 12:59:59');Прибавьте к этой дате 5 лет, 4 месяца и 10 дней. Выведите эту дату в каком-нибудь формате.

$date = new DateTime('2025-12-31 12:59:59');
$interval = new DateInterval('P5Y4M10D');
$date->sub($interval);// Вычитаем интервал из даты  через метод sub
echo $date->format('Y-m-d H:i:s');

?>

<?php
//Дана дата:$date = new DateTime('2025-12-31 12:59:59');Вычтите из этой даты 2 года, 6 месяцев и 15 дней. Выведите эту дату в каком-нибудь формате.

$date = new DateTime('2025-12-31 12:59:59');
$interval = new DateInterval('P5Y4M10D');
$date->sub($interval);
echo $date->format('Y-m-d H:i:s');

?>

<?php
//Дана дата:$date = new DateTime('2025-12-31 12:59:59');Прибавьте к этой дате 5 часов и 50 минут. Выведите эту дату в каком-нибудь формате

$date = new DateTime('2025-12-31 12:59:59');
$interval = new DateInterval('PT5H50M');
$date->add($interval);
echo $date->format('Y-m-d H:i:s');

?>

//Модификация объекта со временем в PHP в ООП стиле

<?php
// Дана дата:$date = new DateTime('2025-03-15 08:30:00');Прибавьте к этой дате 5 дней.

	$date = new DateTime('2025-03-15 08:30:00');// Создаем объект DateTime с заданной датой
	$date->modify('+5 day'); // через метод modify добавляем к заданной дате 5 дней
	echo $date->format('Y-m-d H:i:s');
?>

<?php
// Дана дата:$date = new DateTime('2026-07-20 18:45:15');Вычтите из этой даты 2 месяца.

	$date = new DateTime('2026-07-20 18:45:15'); // Создаем объект DateTime с заданной датой
	$date->modify('-2 month'); // через метод modify вычитаем из заданной даты 2 месяца
	echo $date->format('Y-m-d H:i:s');
?>

<?php
// Дана дата:$date = new DateTime('2025-05-10 10:10:10');Прибавьте к этой дате 5 часов и 50 минут.

	$date = new DateTime('2025-05-10 10:10:10');
	$date->modify('+5 hour +50 minutes'); // добавляем к дате 5 ч и 50 мин
	echo $date->format('Y-m-d H:i:s');
?>

<?php
// Дана дата:$date = new DateTime('2025-12-31 12:59:59');Прибавьте к этой дате 3 года и 2 месяца и 1 день. Выведите эту дату в каком-нибудь формате.

	$date = new DateTime('2025-12-31 12:59:59');
	$date->modify('+3 years +2 months +1 days');
	echo $date->format('Y-m-d H:i:s');
?>

<?php
/// Дана дата:$date = new DateTime('2025-12-31 12:59:59');Вычтите из этой даты 3 года, 5 месяцев и 10 дней. Выведите эту дату в каком-нибудь формате.
	$date = new DateTime('2025-12-31 12:59:59');
	$date->modify('-3 years -5 months -10days');
	echo $date->format('Y-m-d H:i:s');
?>

<?php
/// Дана дата: $date = new DateTime('2024-01-01 00:00:00');

	$date = new DateTime('2024-01-01 00:00:00');
	$date->modify('+1 years +1 weeks');
	echo $date->format('Y-m-d H:i:s');
?>

/// Установка момента времени в объекте с датой в PHP

<?php
///Дана дата:$date = new DateTime('2025-03-15 08:30:00');Установите новую дату: 2026 год, 5 месяц и 20 число.

$date = new DateTime('2025-03-15 08:30:00');// создаем объект даты с заданным временем  датой
$date->setDate(2026,5,12); // через метод setDate устанавливаем новую дату(число, месяц и год)
	echo $date->format('Y-m-d H:i:s');
?>

<?php
///Дана дата:$date = new DateTime('2025-07-01 00:00:00');Установите новое время: 15 часов, 30 минут и 45 секунд.

$date = new DateTime('2025-07-01 00:00:00'); // создаем объект даты с заданным временем  датой
$date->setTime(15, 30, 45); // через метод setTime устанавливаем новое время(минуты, часы, сек)
echo $date->format('Y-m-d H:i:s');
?>

<?php
// Дана дата:$date = new DateTime('2024-01-01 12:00:00');Установите новую дату (2025 год, 10 месяц, 31 число) и новое время (23 часа, 59 минут, 59 секунд).

$date = new DateTime('2024-01-01 12:00:00');
    // вызываем методы цепочкой
	echo $date->setDate(2025, 10, 31)
        ->setTime(23, 59, 59)
        ->format('Y-m-d H:i:s');
?>

//Сравнение дат в ООП стиле в PHP

<?php
//Даны две даты: Определите, какая дата больше.

	$date1 = new DateTime('2026-01-01');
	$date2 = new DateTime('2025-03-02');
	//Сравниваем две даты через условную конструкцию if
	if($date1 < $date2){
        echo '+++';
    }else{
        echo '---';
    }
?>

//Разница между моментами времени в ООП стиле

<?php
//Даны две даты:Получите разницу в днях между ними.

	$date1 = new DateTime('2026-01-01');
	$date2 = new DateTime('2025-03-02');

	$interval = $date1->diff($date2);
		var_dump($interval->days);
?>

<?php
//Даны две даты:Выведите разницу между этими датами в отформатированном виде.

	$date1 = new DateTime('2026-01-01');
	$date2 = new DateTime('2025-03-02');

	$interval = $date1->diff($date2); //С помощью метода diff объекта DateTime вычисляем разницу между датами. Разница возвращается в виде объекта DateInterval.
	echo $interval->format('%y years %m months %d days');
?>
//Диапазон дат в ООП

<?php
//Даны две даты.Выведите дни между этими датами в формате день.месяц.год.

$date1 = new DateTime('2025-01-01');
$date2 = new DateTime('2025-01-10');
$interval = new DateInterval('P1D');
$period = new DatePeriod($date1, $interval, $date2);//создаем последовательность дат между заданными точками, с определенным шагом(1день)

	foreach($period as $date){
        echo $date->format('Y.m.d') . '<br>';
    }


?>

<?php
//Даны две даты.Выведите дни между этими датами с шагом 2 в формате день.месяц.год.

$date1 = new DateTime('2025-01-01');
	$date2 = new DateTime('2025-01-30');
	$interval = new DateInterval('P2D');
	$period = new DatePeriod($date1, $interval, $date2);// создаем последовательность дат с периодом между датами равную 2дня

	foreach($period as $date){
        echo $date->format('d.m.Y'). '<br>';
    }


?>
//Часовые пояса

<?php
//Установите для даты ваш часовой пояс.

$timeZone = new DateTimeZone('Europe/Moscow');// Создаем новый объект часового пояса для Москвы
$date = new DateTime('now', $timeZone); // Создаем новый объект DateTime с текущей датой и временем в указанном часовом поясе

echo $date->format('Y-m-d H:i:s e'); // Выводим дату и время в формате: год-месяц-день часы:минуты:секунды часовой пояс

?>

<?php

//Установите для даты часовой пояс Сиднея.
$date = new DateTime('now');
$date->setTimezone(new DateTimeZone('Australia/Sydney'));

echo $date->format('Y-m-d H:i:s e');

?>

