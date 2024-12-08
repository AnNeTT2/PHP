<!--Вот код счетчика из предыдущего урока:session_start();

	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter']++;
	}

	echo $_SESSION['counter'];
	Модифицируйте этот код так, чтобы при достижении счетчиком значения 10, отсчет начинался сначала.-->

<?php
    session_start();

    if(!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter']++;
    }
    if ($_SESSION['counter'] == 10){
        unset($_SESSION['counter']);
    }
echo $_SESSION['counter'];
?>