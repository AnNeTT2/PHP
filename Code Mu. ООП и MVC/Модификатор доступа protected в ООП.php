<!--Скопируйте мой код класса User.
Самостоятельно не подсматривая в мой код реализуйте описанный класс Student с методами getCourse, setCourse и addOneYear.-->
<?php
class User
{
    // Скрытое свойство для хранения имени пользователя
    private $name;

    // Защищенное свойство для хранения возраста пользователя
    protected $age;

    // Метод для получения имени
    public function getName()
    {
        return $this->name; // возвращаем значение свойства name
    }

    // Метод для установки имени
    public function setName($name)
    {
        $this->name = $name; // устанавливаем значение свойства name
    }

    // Метод для получения возраста
    public function getAge()
    {
        return $this->age; // возвращаем значение свойства age
    }

    // Метод для установки возраста
    public function setAge($age)
    {
        $this->age = $age; // устанавливаем значение свойства age
    }
}
?>

<?php
class Student extends User
{
    // Скрытое свойство для хранения курса студента
    private $course;

    // Метод addOneYear, который будет добавлять 1 год к свойству age
    public function addOneYear()
    {
        $this->age++; // увеличиваем значение свойства age на 1
    }

    // Метод для получения курса
    public function getCourse()
    {
        return $this->course; // возвращаем значение свойства course
    }

    // Метод для установки курса
    public function setCourse($course)
    {
        $this->course = $course; // устанавливаем значение свойства course
    }
}
$student = new Student();

$student->setName('john'); // установливаем имя
$student->setCourse(3);    // установливаем курс
$student->setAge(25);      // установливаем возраст

$student->addOneYear();    // увеличиваем возраст на единицу
echo $student->getAge();   // выводим 26
?>



