
<!--Сделайте класс Employee, в котором будут следующие свойства - name, age, salary. -->

<?php
class Employee{
    public $name; //создаем свойство для имени
    public $age;//создаем свойство для возвраст
    public $salary; //создаем свойство для зп
}

?>

<!--Сделайте в классе Employee метод getName, который будет возвращать имя работника. -->

<?php
class Employee
{
    public $name; //создаем свойство для имени
    public $age; //создаем свойство для возвраст
    public $salary; //создаем свойство для зп
    //создаем метод
    public function getName()
    {
        return $this->name; // возвращаем имя из свойства
    }
}
$employee = new Employee();//создаем объект нашего класса

$employee->name = 'john'; //записываем имя  в св-во name
$employee->age = 25;//записываем возраст в св-во age
echo $employee->getName(); // выводим записанное имя

?>

<!--Сделайте в классе Employee метод getAge, который будет возвращать возраст работника. -->

<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getAge()
    {
        return $this->age;
    }
}
$employee = new Employee();
$employee->name = 'john';
$employee->age = 25;
echo $employee->getAge();

?>

<!-- Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника-->

<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getSalary()
    {
        return $this->salary;
    }
}
$employee = new Employee();
$employee->name = 'john';
$employee->age = 25;
echo $employee->getSalary();

?>

<!--Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так. -->

<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function checkAge()
    {
        if($this->age > 18){
          return true;
        }else {
            return false;
        }

    }
}
$employee = new Employee();
$employee->name = 'john';
$employee->age = 25;
echo $employee->checkAge();

?>
<!--Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников. -->

<?php
class Employee{
    public $name;
    public $salary;
}
$employee = new Employee;
$employee->name ='anna';
$employee->salary = 350;

$employee1 = new Employee;
$employee1->name ='kirill';
$employee1->salary = 1000;

echo $employee->salary + $employee1->salary;

?>

<!--Сделайте класс User, в котором будут следующие свойства - name и age. -->

<?php
class User
{
    public $name;
    public $age;
}
?>
<!-- Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.-->
<?php
class User
{
    public $name;
    public $age;

    public function setAge()
    {
        $this->age = $age;
    }
}
?>

<!-- Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.-->

<?php
class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        $this->age = $age;
    }
}
$user = new User;
$user->name = 'john';
$user->age = 25;

$user->setAge(30);

echo $user->age;
?>

<!-- Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.-->
<?php

class User{
    public $name;
    public $age;

    public function setAge($age){
        if($this->age >=18){
            $this->age = $age;
        }else{
            return $this->age;
        }

    }
}
$user = new User();

$user->name='Ann';
$user->age =19;

$user->setAge(30);

echo $user->age;
?>

<!--Сделайте класс Employee, в котором будут следующие свойства работника - name, salary. Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза. -->

<?php
class Employee {
    public $name;
    public $salary;
    public  function doubleSalary(){
        $this->salary *= 2;
        return $this->salary;
    }
}
$employee = new Employee;
$employee->name = 'ann';
$employee->salary = 1200;

$employee->doubleSalary();
echo $employee->salary;
?>

<!--Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника. -->

<?php
class Restangle{
    public $height;
    public $width;
}
?>

<!--В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника. -->

<?php
class Restangle{
    public $height;
    public $width;

    public function getSquare($height, $width){
        $this->height = $height;
        $this->width = $width;
        return $height * $width;
    }
}
$res = new Restangle;
echo $res->getSquare(20, 30);
?>

<!-- В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.-->

<?php
class Restangle
{
    public $height;
    public $width;

    public function getPerimeter($height, $width)
    {
        $this->height = $height;
        $this->width =  $width;
        return $height + $width;
    }
}
$res = new Restangle;
echo $res->getPerimeter(5, 15);
?>



