<!--Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов. -->
<!--Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и менее 10 символов.
 Пусть этот метод использует метод setName своего родителя, чтобы выполнить часть проверки. -->

<?php
class User {
    protected $name; // защищенное свойство для хранения имени пользователя
    protected $age; // защищенное свойство для хранения возраста пользователя

// метод получения имени пользователя
    public function getName(){
        return $this->name; // возвращаем значение свойства name
    }

// метод для установки имени
    public function setName($name){
// проверка длины имени > 3
        if(strlen($name) > 3){
            $this->name = $name;  // устанавливаем значение свойства name
        }
    }

// метод получения возраста пользователя
    public function getAge(){
        return $this->age;  // возвращаем значение свойства age
    }
// метод для установки возраста
    public function setAge($age){
        if($age >= 0){ // добавлена проверка
            $this->age = $age; // устанавливаем значение свойства age
        }
    }
}

class Student extends User {
    private $course; // скрытое свойство для хранения курса студента

    public function addOneYear(){
        $this->age++; // здесь нужен доступ к защищенному свойству, возможно стоит добавить проверку
    }
// метод для установки имени пользователя
    public function setName($name){
        if(strlen($name) <= 10){
// Если имя меньше или равно10:
            parent::setName($name); // вызываем метод родителя  и в родидели вызывается проверка имени >3
        }
    }
// метод для получения курса студента
    public function getCourse(){
        return $this->course;
    }

// метод для установки курса
    public function setCourse($course){
        $this->course = $course;
    }
}

$student = new Student;

$student->setName('Annnnnnnn');
$student->setAge(33);
$student->setCourse(3);

$student->addOneYear();
echo $student->getAge() . "\n"; // Вывод: 34
echo $student->getName(); // Вывод: Ann
?>