<!--Сделайте класс Employee, в котором будут следующие свойства: name, surname и salary.-->

<?php
class Employee {
    private $name; // объявляем имя приватным
    private $surname; // объявляем фамилию приватным
    private $salary; // объявляем зп приватным
    // Конструктор объекта:
    public function __construct($name, $surname, $salary)
    {
        $this->name = $name; // запиcываем данные в свойство name
        $this->surname = $surname; // запиcываем данные в свойство surname
        $this->salary = $salary; // запиcываем данные в свойство salary
    }
}
?>

<!--Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи. -->

<?php
class Employee {
    private $name;
    private $surname;
    private $salary;


    public function __construct($name, $surname, $salary){
        $this->name = $name; // запиcываем данные в свойство name
        $this->surname = $surname; // запиcываем данные в свойство surname
        $this->salary = $salary; // запиcываем данные в свойство salary
    }

// Геттер для имени
    public function getName(){
    return $this->name;
    }
//Геттер для фамилии
    public function getSurname(){
        return $this->surname;
    }
//Геттер для зп
    public function getSalary(){
        return $this->salary;
    }
//Сеттер для зп
    public function setSalary($salary){
        return $this->salary = $salary;
    }
}
$employee = new Employee('Ann', 'Dias', 1000); // создаем объект с начальными данными

echo $employee-> getName(); //выводим Ann
echo $employee-> getSurname(); //выводим Dias

echo $employee->getSalary(); // выводим зп в размере 1000
echo $employee->setSalary(1500); //устанавливаем новую зп
echo $employee->getSalary(); // выводим 1500

?>
