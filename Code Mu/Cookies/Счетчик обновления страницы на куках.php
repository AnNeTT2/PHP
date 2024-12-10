<!--Запишите в куку момент времени захода пользователя на страницу. При обновлении страницы выведите на экран, сколько времени прошло с момента первого захода на страницу.->
<?php

if(!isset($_COOKIE['first_visit'])){
    setcookie('first_visit', time(), time() +3600);
    echo "Добро пожаловать!";
}else{
    $firstVisit = $_COOKIE['first_visit'];

    $timePassed = time() - $firstVisit;
   echo $timePassed;
}

?>
