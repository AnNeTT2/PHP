<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host; dbname=$name; charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // обработка ошибок. В случае выявление их, будет выбрасываться исключение
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //данные будут извлекаться из базы данных в виде аасоциативного массива
    PDO::ATTR_EMULATE_PREPARES => false,// отключение эмуляции, которое гарантирует, что подготовленные операторы будут обрабатываться на стороне базы данных
];
try {
    // подключаемся к БД
    $pdo = new PDO($dsn, $user, $pass,  $opt);

    // запрос
    $res = $pdo->query('select * from users1');

    // обработка результата
    while ($row = $res->fetch()){
        echo '<p>'. htmlspecialchars($row['name']).'</p>';

    }
} catch (PDOException $e){ // исключение, которое указывает на причину неудачи соединения
    echo "Connection failed: " . $e->getMessage();
}

?>
<hr>

<!--Выведите зарплату всех пользователей из таблицы users.-->
<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host; dbname=$name; charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    // подключаемся к БД
    $pdo = new PDO($dsn, $user, $pass,  $opt);

    // запрос
    $res = $pdo->query('select  salary from users1');// запрос к бд

    // обработка результата
    while ($row = $res->fetch()){
        echo '<p>'. htmlspecialchars($row['salary']).'</p>';

    }
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>

<hr>
<!-- Выведите все записи в формате имя: возраст.-->

<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host; dbname=$name; charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    // подключаемся к БД
    $pdo = new PDO($dsn, $user, $pass,  $opt);

    // запрос
    $res = $pdo->query('select name, age from users1');// запрос к бд

    // обработка результата
    while ($row = $res->fetch()){ // выводим ряд из запроса
        echo '<p>'. htmlspecialchars($row['name']). ':' . htmlspecialchars($row['age']).'</p>';

    }
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>

<hr>

<!-- Проблемы запросов в PDO-->
<!--Намеренно осуществите SQL-инъекцию к вашей базе.-->

<?php
//$sql = "SELECT * FROM users WHERE id=-1 OR role="admin"";
//	$res = $pdo->query($sql);
?>

<!--Подготовленные выражения в PDO -->
<!--Позиционные плейсхолдеры в PDO -->
<!-- -->
<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host; dbname=$name; charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    // подключаемся к БД
    $pdo = new PDO($dsn, $user, $pass,  $opt);


    $min = 1;
    $max = 5;
    // запрос
    $sql = 'SELECT * FROM users1 WHERE id>? and id<?';
    $res = $pdo->prepare($sql);
    $res->execute([$min, $max]);


    // обработка результата
    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>
<hr>

<!--Даны переменные:$age = 30;$salary = 1000;
Найдите всех пользователей, у которых возраст или зарплата равны заданным в переменных значениям. -->

<?php
$host = 'localhost';
$name = 'users';
$pass = '';
$user = 'root';

$dsn = "mysql:host=$host;dbname=$name; charset=utf8";

$opt = [
        PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,

];

try {
    $pdo = new PDO($dsn, $user, $pass,  $opt);

    $age = 30;
    $salary = 1000;

    $sql = 'select * from users1 where age=? or salary=?' ;
    $res = $pdo->prepare($sql);

    $res-> execute([$age, $salary]);

    while ($row = $res->fetch()){
        var_dump($row);
    }
}catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>
<hr>
<!--Именованные плейсхолдеры в PDO  -->
<!--Дана переменная:$age = 22;Найдите всех пользователей, у которых возраст равен заданному в переменной значению. -->
<?php
$host = "localhost";
$user = "root"; // исправлено
$name = "users";
$pass = "";

$dsn = "mysql:host=$host;dbname=$name;charset=utf8"; // убран пробел перед dbname

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO

    $age = 22;
    $sql = 'SELECT * FROM users1 WHERE age = :age';
    $res = $pdo->prepare($sql);

    $res->execute(['age' => $age]);

    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<hr>
<!--Даны переменные:$age1 = 20;$age2 = 30;Найдите всех пользователей, у которых возраст лежит в диапазоне, заданном значениями переменных. -->
<?php
$host = "localhost";
$user = "root";
$name = "users";
$pass = "";

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // Создаем экземпляр PDO
    $age1 = 20;
    $age2 = 30;

    // Исправленный SQL-запрос
    $sql = 'SELECT * FROM users1 WHERE age > :age1 AND age < :age2';

    $res = $pdo->prepare($sql);
    $res->execute(['age1' => $age1, 'age2' => $age2]);

    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<hr>
<!--Даны переменные:$age1 = 20;$age2 = 30;$salary1 = 1000;$salary2 = 2000;
Найдите всех пользователей, у которых возраст И зарплата лежат в диапазоне, заданном значениями переменных. -->
<?php
$host = "localhost";
$user = "root";
$name = "users";
$pass = "";


$dsn = "mysql:host=$host; dbname=$name; charset=utf8";

$opt = [

    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,


];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $age1 = 20;
    $age2 = 30;

    $salary1 = 1000;
    $salary2 = 2000;

    $sql = 'SELECT * FROM users1 WHERE age BETWEEN :age1 AND :age2 AND salary BETWEEN :salary1 AND :salary2';
    $res = $pdo->prepare($sql);
    // Передаем все параметры
    $res->execute([
        'age1' => $age1,
        'age2' => $age2,
        'salary1' => $salary1,
        'salary2' => $salary2,
    ]);

    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<hr>

<!--Позиционная привязка переменных в PDO -->
<!--Даны переменные:$name1 = 'name1';$name2 = 'name2';Получите юзеров, у которых имя совпадает со значением одной или второй переменной.-->
<?php
$host = "localhost";
$user = "root";
$name = "users";
$pass = "";

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt);// создание объекта PDO
    $name1 = 'name1';
    $name2 = 'name2';

    $sql = 'SELECT * FROM users1 WHERE name=? OR name=?';
    $res = $pdo->prepare($sql);

    //  используем метод bindValue
    $res->bindValue(1, $name1, PDO::PARAM_STR);
    $res->bindValue(2, $name2, PDO::PARAM_STR);

    // Выполняем запрос
    $res->execute();

    // Получаем и выводим данные
    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<hr>
<!--Даны переменные:	$age1 = 21; $age2 = 22;Получите юзеров, у которых возраст совпадает со значением одной или второй переменной. -->

<?php
$host = "localhost";
$user = "root";
$name = "users";
$pass = "";

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $age1 = 21;
    $age2 = 22;

    $sql = 'SELECT name FROM users1 WHERE age=? OR age=?';
    $res = $pdo->prepare($sql);

    // метод bindValue на объекте $res
    $res->bindValue(1, $age1, PDO::PARAM_INT);
    $res->bindValue(2, $age2, PDO::PARAM_INT);

    // Выполняем подготовленный запрос
    $res->execute();

    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
<hr>
<!--Именованная привязка переменных в PDO -->
<!--Даны переменные:$name1 = 'name1';$name2 = 'name2';Получите юзеров, у которых имя совпадает со значением одной или второй переменной. -->
<?php
$host = "localhost";
$user = "root";
$name = "users";
$pass = "";

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $name1 = 'name1';
    $name2 = 'name2';

    $sql = 'SELECT * FROM users1 WHERE name=:name1 OR name=:name2';
    $res = $pdo->prepare($sql);

   // метод bindValue на объекте $res
    $res->bindValue('name1', $name1, PDO::PARAM_STR);
    $res->bindValue('name2', $name2, PDO::PARAM_STR);

    // Выполняем подготовленный запрос
    $res->execute();

    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<hr>

<!--Даны переменные:$age1 = 21;$age2 = 22; Получите юзеров, у которых возраст совпадает со значением одной или второй переменной.-->
<?php
$host = "localhost";
$user = "root";
$name = "users";
$pass = "";

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $age1 = 21;
    $age2 = 22;

    $sql = 'SELECT * FROM users1 WHERE age=:age1 OR age=:age2';
    $res = $pdo->prepare($sql);

    // метод bindValue на объекте $res
    $res->bindValue('age1', $age1, PDO::PARAM_INT);
    $res->bindValue('age2', $age2, PDO::PARAM_INT);

    // Выполняем подготовленный запрос
    $res->execute();

    while ($row = $res->fetch()) {
        var_dump($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
<hr>

<!--Получение одного поля из таблицы в PDO -->
<!--Получите значения всех возрастов пользователей. -->

<?php
$host ='localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
       PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $sql = 'select age from users1';
    $res = $pdo->prepare($sql);

    $res->execute();

    while ($col = $res->fetchColumn()){
        var_dump($col);
    }

}catch (PDOException $e){
    echo "Connection failed:" . $e->getMessage();
}
?>
<hr>
<!--Все ряды из результата в PDO -->
<!--Выведите всех пользователей из таблицы users, используя описанный в уроке метод. -->
// использование метода fetchAll()
<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:$host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOS,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO


    $res = $pdo->query('select * from users1');

    $row = $res->fetchAll();
    var_dump($row);
} catch(PDOException $e){
    echo "Connection failed". $e->getMessage();
}
?>
<hr>
<!--Выведите один ряд данных из таблицы users. -->
// использование метода fetch_assos

<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:$host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOS,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO


    $res = $pdo->query('select * from users1');

    $row = $res->fetchAll(PDO::FETCH_ASSOS());    // или вместо fetchAll- fetch
    var_dump($row);
} catch(PDOException $e){
    echo "Connection failed". $e->getMessage();
}
?>
<hr>
<!--Выведите имя и возраст пользователей в виде пары ключ-значение -->
// использование метода fetch_key_pair

<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:$host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOS,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO


    $res = $pdo->query('select name, age from users1');

    $row = $res->fetchAll(PDO::fetch_key_pair());
    var_dump($row);
} catch(PDOException $e){
    echo "Connection failed". $e->getMessage();
}
?>

<hr>

<!--Многократное выполнение подготовленных выражений в PDO -->
<!--Дан массив с айдишниками и возрастами юзеров:
$ages = [
	1 => 20,
	3 => 30,
	5 => 40,
	];
Напишите код, который в цикле обновит данные юзеров. -->
<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:$host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOS,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $ages = [
        1 => 20,
        3 => 30,
        5 => 40,
    ];

    $res = $pdo->query('update users1 set age=? where id=?');

    foreach($ages as $id=>$age){
        $res->execute([$age, $id]);
        }
} catch(PDOException $e){
    echo "Connection failed". $e->getMessage();
}
?>
<hr>
<!--Работа с оператором LIKE в PDO -->
<!--Выведите всех пользователей из таблицы users, у которых зарплата равна 500. -->
<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO
    $salary = 500;
    $res = $pdo->prepare('SELECT * FROM users WHERE salary = ?');

    $res->execute([$salary]);
    $row = $res->fetchAll();
    var_dump($row);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<hr>
<!-- Выведите пользователей, у которых зарплата равна или более 900, а возраст меньше 35 лет.-->
<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt); // создание объекта PDO


    $res = $pdo->prepare('SELECT * FROM users WHERE salary >= ? AND age < ?');

    $salary = 900;
    $age = 35;

    $res->execute([$salary, $age]);

    // Извлекаем все строки
    $row = $res->fetchAll();

    var_dump($row);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
<hr>
<!--Работа с оператором LIMIT в PDO -->
<!--Составьте IN запрос, который выведет двух пользователей, начиная с третьего. -->

<?php
$host = 'localhost';
$name = 'users';
$user = 'root';
$pass = '';

$dsn = "mysql:$host=$host;dbname=$name;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOS,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

try{
    $pdo = new PDO($dsn, $user, $pass, $opt);// создание объекта PDO
    $start = 2;
    $offset =2;

    $res = $pdo->prepare('select * from users1 LIMIT ?,?');

    $res = bindValue(1, $start, PDO:: PARAN_INT );
    $res = bindValue(2, $offset, PDO:: PARAM_INT );

    $res->execute();
    $row = $res->fetchAll();
    var_dump($row);

      } catch(PDOException $e){
    echo "Connection failed". $e->getMessage();
}
?>