<!--Реализуйте класс Student.
Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.-->
<?php
class Student {
    private $name; //создаем свойство для имени
    private $course; //создаем свойство для курса

    public function __construct($name, $course) {
        $this->name = $name; // запишем данные в свойство name
        $this->course = $course; // // курс изначально равен 1
    }

    public function getName() {
        return $this->name;
    }

    public function getCourse() {
        return $this->course;
    }

    public function transferToNextCourse() {
        $newCourse = $this->course + 1; //  добавляем 1 к текущему курсу
        if ($this->isCourseCorrect($newCourse)) { // Передаем  новый курс

            $this->course = $newCourse;
        }
    }

    private function isCourseCorrect($course) {
        return $course >= 1 && $course < 5; // Проверка
    }
}

$student = new Student('Ann', 3);
echo $student->getName(); // Вывод имени студента
$student->transferToNextCourse(); // Переход на следующий курс
echo $student->getCourse(); // Проверка текущего курса
?>