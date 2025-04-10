<!--Не подсматривая в мой код создайте такой же класс User с такими же методами. -->
<?php
class User {
    public $name; //создаем свойство для имени
    public $age; // создаем свойство для возраста
// Метод для проверки возраста:
    public function isAgeCorrect($age){
        if($age >= 18 and $age <= 60){
            return true;
        }else {
            return false;
        }
    }
    // Метод для изменения возраста юзера:
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    //Метод для добавления к возрасту:
    public function addAge($year){
        $newAge = $this->age + $year; // вычисляем новый возраст

    // Проверяем возраст на корректность:
        if($this-> isAgeCorrect($newAge)){
            $this->age = $newAge;

        }
    }
}

?>

<!--Создайте объект этого класса User проверьте работу методов setAge и addAge. -->

<?php
class User {
    public $name;
    public $age;

    public function isAgeCorrect($age){
        if($age >= 18 and $age <= 60){
            return true;
        }else {
            return false;
        }
    }
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    public function addAge($year){
        $newAge = $this->age + $year;

        if($this-> isAgeCorrect($newAge)){
            $this->age = $newAge;

        }
    }
}
$user = new User;// создаем объект класса
$user->setAge(25); // устанавливаем значение возраста
echo $user->age; //  выводим установленное значение возраста


$user->addAge(15); // устанавливаем некорректный возвраст
echo $user->age; // выводится 25, а не 15
?>

<!-- Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.-->

<?php
class User {
    public $name;
    public $age;

    public function isAgeCorrect($age){
        if($age >= 18 and $age <= 60){
            return true;
        }else {
            return false;
        }
    }
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    public function addAge($year){
        $newAge = $this->age + $year;

        if($this-> isAgeCorrect($newAge)){
            $this->age = $newAge;

        }
    }
    public function subAge($year1){
        $newAge1 =$this->age - $year1;

        if($this->isAgeCorrect($newAge1)){
            $this->age =$newAge1;
        }
    }

}

$user = new User;
$user->setAge(25);
echo $user->age; // выводим 25


$user->addAge(15);
echo $user->age; // выводим 40

$user->subAge(8); // уменьшаем возраст
echo $user->age; // выводится 32
?>


