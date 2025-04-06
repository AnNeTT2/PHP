<!--Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата). -->

<?php
class Employee{
    public $name;
    public $age;
    public $salary;
}
?>

<!--Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000. -->

<?php
class Employee{
    public $name;
    public $age;
    public $salary;
}
$employee = new Employee; // первый объект

$employee->name ='john';
$employee->age = 25;
$employee->salary = 1000;
?>

<!--Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000. -->

<?php
class Employee{
    public $name;
    public $age;
    public $salary;
}
$employee = new Employee;

$employee->name ='john';
$employee->age = 25;
$employee->salary = 1000;

$employee1 = new Employee; // второй объект

$employee1->name = 'eric';
$employee1-> age = 26;
$employee1-> salary = 2000;
?>

<!--Выведите на экран сумму зарплат созданных юзеров. -->

<?php
class Employee{
    public $name;
    public $age;
    public $salary;
}
$employee = new Employee;

$employee->name ='john';
$employee->age = 25;
$employee->salary = 1000;

$employee1 = new Employee; // второй объект

$employee1->name = 'eric';
$employee1-> age = 26;
$employee1-> salary = 2000;

echo $employee->salary + $employee1->salary;
?>

<!--Выведите на экран сумму возрастов созданных юзеров. -->

<?php
class Employee{

public $name;
public $age;
public $salary;
}

$employee = new Employee;

$employee->name ='john';
$employee->age = 25;
$employee->salary = 1000;

$employee1 = new Employee; // второй объект

$employee1->name = 'eric';
$employee1-> age = 26;
$employee1-> salary = 2000;

echo $employee->age + $employee1->age;
?>

