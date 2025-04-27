<!--  Реализуйте  классы User, Employee.-->
<?php
class User
{
    private $name;
    private $age;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
       return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}

$user = new User;
$user->setName('Ann');
$user->setAge(25);

echo $user->getName();
echo $user->getAge();
?>

<?php
// класс-потомок
class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$employee = new Employee();

// Устанавливаем значения для зарплаты, имени и возраста
$employee->setSalary(1000);
$employee->setName('Ann');
$employee->setAge(25);

// Выводим данные
echo $employee->getSalary(). "\n"; // Выведет 1000
echo $employee->getName(). "\n"; // Выведет 'Ann'
echo $employee->getAge(). "\n"; // Выведет 25
?>

<!-- Реализуйте  класс Student, наследующий от класса User.-->

<?php
class Students extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student = new Students;
$student->setCourse(3);
$student->setName('Ann');
$student->setAge(25);

echo $student->getCourse(). "\n";
echo $student->getName(). "\n";
echo $student->getAge(). "\n";

?>

<!--Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства. -->

<?php
class Programmer extends Employee
{
    private array $langs = [];

    public function getLangs()
    {
        return $this->langs;
    }

    public function setLangs($langs)
    {
        $this->langs[] = $langs;
    }
}

$programmer = new Programmer;

$programmer->setLangs('php');
$programmer-> setName('Ann');
$programmer->setAge(25);


echo $programmer->getLangs(). "\n";
echo $programmer->getName(). "\n";
echo $programmer->getAge();

?>
<!--  Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.-->

<?php
class Driver extends Employee
{
    private $driving_experience;
    private $category = [];

    public function getDriving_experience()
    {
        return $this->driving_experience;
    }

    public function setDriving_experience($driving_experience)
    {
        $this->driving_experience = $driving_experience;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category[] = $category;
    }
}


$driver =  new Driver;
$driver->setName('Ann');
$driver->setAge(25);
$driver->setDriving_experience(10);
$driver->setCategory('A');
$driver->setSalary(1000);

echo $driver->getName(). "\n";
echo $driver->getAge(). "\n";
echo $driver->getSalary(). "\n";
echo $driver->getDriving_experience(). "\n";
echo $driver->getCategory();
?>

