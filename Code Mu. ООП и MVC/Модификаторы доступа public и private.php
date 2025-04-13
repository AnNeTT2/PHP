<!-- Не подсматривая в мой код внесите такие же правки в класс User.-->
<?php
class User {
    public $name; //создаем свойство для имени
    public $age; //создаем свойство для возраста

    // Метод для проверки возраста:
    private  function isAgeCorrect($age){
        return $age >= 18 and $age <= 60;
    }
    // Метод для изменения возраста юзера
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    // Метод для добавления к возрасту:
    public function addYear($years){
        $newAge = $this->age + $years;

        if($this->isAgeCorrect($newAge)){
            $this->age = $newAge;
        }
    }
}
$user = new User;

$user->setAge(30); // установим возраст в 30
echo $user->age; // выведет 30

$user->addYear(10); // добавляем 10 лет
echo $user->age; // выведет 30
?>

<!--Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку. -->

<?php

class User {
    public $name; //создаем свойство для имени
    public $age; //создаем свойство для возраста


    // Метод для изменения возраста юзера
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    // Метод для добавления к возрасту:
    public function addYear($years){
        $newAge = $this->age + $years;

        if($this->isAgeCorrect($newAge)){
            $this->age = $newAge;
        }
    }
    // Метод для проверки возраста:
    private  function isAgeCorrect($age){
        return $age >= 18 and $age <= 60;
    }
}
$user = new User;

$user->setAge(30); // установим возраст в 30
echo $user->age; // выведет 30

$user->setAge(10); // установим некорректный возраст
echo $user->age; // выведет 30

$user->addYear(10); // добавляем 10 лет
echo $user->age; // выведет 40
?>

<!--Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го). -->
<!--В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс. -->
<!--Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5 -->
<!--Вынесите проверку курса в отдельный private метод isCourseCorrect. -->

<?php
    class Student {
        public $name; //создаем свойство для имени
        public $course; //создаем свойство для курса

    //метод для перевода студента на следующий курс
        public function transferToNextCourse() {
            $newCourse = $this->course + 1;
            if ($this->isCourseCorrect($this->course)) {
                $this->course = $newCourse;
            }
        }
    // Метод для проверки возраста:
        private function isCourseCorrect($course) {
            return $course >= 1 && $course < 5;
        }
    }

// Создаем объект студента
$student = new Student();
$student->name = "Анна";  // Устанавливаем имя студента
$student->course = 1;      // Устанавливаем текущий курс

// Переводим студента на следующий курс
$student->transferToNextCourse();
echo $student->course; // Вывод: 2

?>


