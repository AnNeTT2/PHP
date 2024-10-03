<!--Исправьте ошибку, допущенную в этом коде:

<!DOCTYPE html>
<html>
	<head>
		<?php
header('Content-Type: text/html');
?>
	</head>
	<body>
		text
	<body>
<html>-->


!DOCTYPE html>
<html>
	<head>
		<?php
header('Content-Type: text/html');
?>
	</head>
	<body>
		text
	</body>
</html>

<!--Намеренно создайте вывод на экран перед функцией header. Изучите текст возникающей ошибки. -->

<?php

$str = 'abc';
var_dump($str);

header('Content-Type: text/html')
?>