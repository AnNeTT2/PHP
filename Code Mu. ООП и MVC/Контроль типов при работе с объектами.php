<!--Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name и salary. -->
<!--Создайте несколько объектов класса Post: программист, менеджер водитель. -->
<!--Сделайте класс Employee, в котором будут следующие свойства: name и surname. Пусть начальные значения этих свойств будут передаваться параметром в конструктор. -->
<!--Сделайте геттеры и сеттеры для свойств name и surname. -->
<!--Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде. -->
<!--Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post. -->
<!--Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее. -->
<!--Выведите на экран имя, фамилию, должность и зарплату созданного работника. -->
<!--Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде. -->
<?php
// Класс Post представляет должность работника
class Post {
    private $name; // Название должности
    private $salary; // Зарплата на данной должности

    // Конструктор класса для инициализации имени и зарплаты должности
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Метод для получения названия должности
    public function getName() {
        return $this->name;
    }

    // Метод для получения зарплаты
    public function getSalary() {
        return $this->salary;
    }
}

// Создание объектов Post
$post = new Post('programmer', 1000);
$post1 = new Post('manager', 300);
$post2 = new Post('driver', 350);
?>

<?php

// Класс Employee представляет работника
class Employee {
    private $name; // Имя работника
    private $surname; // Фамилия работника
    private $post; // Объект должности, связанный с работником

    // Конструктор класса для инициализации имени, фамилии и должности работника
    public function __construct($name, $surname, Post $post) { // третьим параметров явно указываем тип параметра, который предтавляет собой объект класса Post
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post; // Привязка работника к объекту Post
    }

    // Метод для получения имени работника
    public function getName() {
        return $this->name;
    }

    // Метод для установки имени работника
    public function setName($name) {
        $this->name = $name;
    }

    // Метод для получения фамилии работника
    public function getSurname() {
        return $this->surname;
    }

    // Метод для установки фамилии работника
    public function setSurname($surname) {
        $this->surname = $surname;
    }

    // Метод для получения объекта должности
    public function getPost() {
        return $this->post;
    }

    // Метод для установки новой должности работника
    public function setPost(Post $post) {
        $this->post = $post;
    }

    // Метод для изменения должности работника
    public function changePost(Post $post) {
        $this->post = $post; // Изменение должности работника
    }
}

// Создание объекта Employee с указанием имени, фамилии и должности
$employee = new Employee("Иван", "Иванов", $post);

// Получаем информацию о работнике
$employeeName = $employee->getName(); // Получаем имя работника
$employeeSurname = $employee->getSurname(); // Получаем фамилию работника
$employeePost = $employee->getPost()->getName(); // Получаем название должности
$employeeSalary = $employee->getPost()->getSalary(); // Получаем зарплату

// Вывод информации о работнике
echo $employee->getName(). ' '. $employee->getSurname(). ' '. $employee->getPost()->getSalary() ;

?>