<!--Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный класс User, а также классы Employee и Student, наследующие от него. -->
<!--Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student. -->
<!--Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах Employee и Student. -->
<!--Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины. Данный класс также должен наследовать от класса Figure и реализовывать его методы. -->
<!--Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра. -->
<?php
abstract class User
{
    private $name; // //создаем свойство для имени

    public function getName()
    {
        return $this->name; // Получаем имя пользователя
    }

    public function setName($name)
    {
        $this->name = $name; // Установливаем имя пользователя
    }

    abstract public function increaseRevenue($value); // Абстрактный метод для увеличения дохода

    abstract public function decreaseRevenue($value); // Абстрактный метод для уменьшения дохода
}
?>

<?php
class Student extends User
{
    private $scholarship; // //создаем свойство для стипендии

    public function getScholarship()
    {
        return $this->scholarship; // Получаем стипендию
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship; // Установливаем стипендию
    }

    public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value; // Увеличиваем стипендию
    }

    public function decreaseRevenue($value)
    {
        $this->scholarship = $this->scholarship - $value; // Уменьшаем стипендию
    }
}
?>

<?php
class Employee extends User
{
    private $salary; // З//создаем свойство для зп

    public function getSalary()
    {
        return $this->salary; // Получаем зарплату
    }

    public function setSalary($salary)
    {
        $this->salary = $salary; // Установливаем зарплату
    }

    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value; // Увеличиваем зарплату
    }

    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value; // Уменьшаем зарплату
    }
}

$employee = new Employee; // Созданием новой объект Employee
$employee->setName('Ann'); // Установливаем имя сотрудника
$employee->setSalary(1200); // Установливаем зп сотрудника
// $employee->setScholarship(800);  Эта строка вызовет ошибку, так как Employee не имеет метода setScholarship
$employee->increaseRevenue(1200); // Увеличиваем зп сотрудника
$employee->decreaseRevenue(800); // Уменьшаем зп сотрудника

echo $employee->getName()."\n"; // Выводим имя сотрудника
echo $employee->getSalary(); // Выводим зарплату сотрудника

?>

<?php

abstract class Figure
{
    // Абстрактный метод для вычисления площади фигуры
    abstract public function getSquare();

    // Абстрактный метод для вычисления периметра фигуры
    abstract public function getPerimetr();

    // Метод для получения суммы площади и периметра фигуры
    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimetr(); // Возвращаем сумму площади и периметра
    }
}
?>

<?php

class Rectangle extends Figure
{
    private $a; // Первая сторона прямоугольника
    private $b; // Вторая сторона прямоугольника

    // Конструктор для инициализации сторон прямоугольника
    public function __construct($a, $b)
    {
        $this->a = $a; // Устанавливаем значение первой стороны
        $this->b = $b; // Устанавливаем значение второй стороны
    }

    // Реализация метода для вычисления площади
    public function getSquare()
    {
        return ($this->a * $this->b); // Площадь = a * b
    }

    // Реализация метода для вычисления периметра
    public function getPerimetr()
    {
        return (2 * $this->a + 2 * $this->b); // Периметр = 2 * (a + b)
    }
}
?>

<?php
$rectangle  = new Rectangle(2, 3); //Передаем  два стороны в созданный объект класса Rectangle
echo $rectangle->getSquare()."\n"; // Выводим площадь прямоугольника
echo $rectangle->getPerimetr()."\n"; // Выводим периметр прямоугольника
echo $rectangle->getSquarePerimeterSum(); // Выводим сумму площади и периметра
?>
