
<!--Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата). -->
<?php

class Employee
{
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
}
?>

<!--Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).-->
<?php

class Student
{
    public $name;
    public $scholarship;
    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}

?>

<!--Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr. -->

<?php
$employee1 = new Employee('Ann', 200);
$employee2 = new Employee('Rick', 300);
$employee3 = new Employee('Mark', 400);

$student1 = new Student('Ariel', 750);
$student2 = new Student('Karl', 1000);
$student3 = new Student('Olga', 550);

$arr =[$employee1, $employee2, $employee3, $student1, $employee2, $employee3];

?>

<!--Переберите циклом массив $arr и выведите на экран столбец имен всех работников. -->

<?php
foreach ($arr as $obj){
    if($obj instanceof Employee){
        echo $obj->name;
    }
}
?>

<!--Аналогичным образом выведите на экран столбец имен всех студентов. -->

<?php
foreach ($arr as $obj){
    if($obj instanceof Student){
        echo $obj->name;
    }
}
?>

<!--Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов. После цикла выведите эти два числа на экран. -->

<?php
$totalSalary = 0;
$totalScholarship = 0;
foreach ($arr as $obj){
    if($obj instanceof Employee){
$totalSalary += $obj->salary;
    }elseif ($obj instanceof Student){
        $totalScholarship += $obj->scholarship;
    }
}
echo "Сумма зарплат сотрудников: $totalSalary.\n";
echo "Сумма стипендий студентов : $totalScholarship";
?>

<!--Сделайте класс User с публичным свойствами name и surname. -->

<?php
class User
{
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}
?>

<!--Сделайте класс Employee, который будет наследовать от класса User и добавлять свойство salary. -->

<?php
class Employee extends User
{
    public $salary;

    public function __construct($name, $surname,$salary)
    {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }
}
?>

<!--Сделайте класс City с публичными свойствами name и population. -->

<?php
class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}
?>

<!--Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City, и в произвольном порядке запишите их в массив $arr. -->

<?php
$user1 = new User('Ann' , 'Ivanova');
$user2 = new User('Eric', 'Vasilev');
$user3 = new User('Kate', 'Lee');

$employee1 = new Employee('Boris','Fillipe', 3500);
$employee2 = new Employee('David','Lorca',5000);
$employee3 = new Employee('Kler','Garcia',8400);

$city1 = new City('London', 87450000);
$city2 =  new City('Berlin', 5450000);
$city3 = new City('Barcelona', 7650000);

$arr = [$user1, $user2, $user3, $employee1, $employee2, $employee3, $city1, $city2, $city3];
?>

<!--Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат классу User или потомку этого класса. -->
<?php

foreach ($arr as $obj){
  if($obj instanceof User){
      echo $obj->name."\n";
  }
}

?>

<!--Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые не принадлежат классу User или потомку этого класса. -->
<?php

foreach ($arr as $obj){
    if(!($obj instanceof User)){
        echo $obj->name."\n";
    }
}
?>

<!--Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат именно классу User, то есть не классу City и не классу Employee. -->
<?php

foreach ($arr as $obj){
    if($obj instanceof User && !($obj instanceof Employee) && !($obj instanceof City));
    echo $obj->name;
}
?>

<!--Скопируйте мой код классов Employee и Student и самостоятельно не подсматривая в мой код реализуйте такой же класс UsersCollection.-->
<?php

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
?>

<?php
class Student
{
    private $name;
    private $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}
?>

<?php

class UsersCollection
{
    private $employees = [];
    private $students = [];

    public function add($user)
    {
        if($user instanceof Employee){
            $this->employees[] = $user;
        }
        if($user instanceof Student){
            $this->students[] = $user;
        }
    }



    public function getTotalSalary()
    {
    $sum = 0;

    foreach ($this->employees as $employee){
        $sum += $employee->getSalary();
    }
    return $sum;
    }

    public  function getTotalScholarship()
    {
        $sum = 0;

        foreach ($this->students as $student){
            $sum += $student->getScholarship();
        }
        return $sum;
    }

    public function getTotalPayment()
    {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}

$usersCollection =  new UsersCollection;
$usersCollection ->add(new Employee('Ann', 200) );
$usersCollection->add(new Employee('Eric', 800));
$usersCollection->add(new Student('John', 150));
$usersCollection->add(new Student('Kate', 700));

echo $usersCollection->getTotalScholarship()."\n";
echo $usersCollection->getTotalSalary()."\n";
echo $usersCollection->getTotalPayment()."\n";
?>