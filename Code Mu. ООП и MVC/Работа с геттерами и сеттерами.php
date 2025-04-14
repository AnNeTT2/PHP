<!-- Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.-->

<?php
class Employee {
    private $name; // объявляем имя приватным
    private $age; // объявляем возраст приватным
    private $salary; // объявляем зп приватным

    // конструктор объекта
    public function __construct($name, $age, $salary){

    $this->name = $name; // запиcываем данные в свойство name
    $this->age = $age; // записываем данные в свойство age
    $this->salary = $salary; //записываем данные в свойство salary
}
}
?>

<!--Сделайте геттеры и сеттеры для всех свойств класса Employee. -->

<?php
class Employee {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary){

    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
}
// Метод для чтения имени юзера:
 public function getName() {
        return $this->name;
    }
// Метод для чтения возраста юзера:
    public function getAge() {
        return $this->age;
    }
// Метод для чтения зп юзера:
    public function getSalary() {
        return $this->salary;
    }
// Метод для изменения имени юзера:
    public function setName($name) {
        $this->name = $name;
    }
// Метод для изменения возраста юзера:
    public function setAge($age) {
        $this->age = $age;
    }
// Метод для изменения зп юзера:
    public function setSalary($salary) {
        $this->salary = $salary;
    }

}
?>

<!--Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться). -->
<!--Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.-->

<?php

class Employee {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary){

        $this->name = $name;
        $this->setAge($age); // Установливаем возраст через метод setAge
        $this->salary = $salary;
    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return  $this->salary. "$";
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    private function isAgeCorrect($age){
        return $age >= 1 && $age <= 100;
    }
}
$employee = new Employee('Ann', 30, 1000);
$employee->setAge(3600);// устанавливаем неккоректный возраст
echo $employee->getAge(); // Выводим 30

$employee->setSalary(3600); // устанавливаем размер зп
echo $employee->getSalary(); // выводим 3600$
?>

