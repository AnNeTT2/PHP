<?php
$res = mysqli_connect($link, 'select * from users');
?>

<?php
$query = 'select * from users';
$res = mysqli_connect($link, $query);
?>