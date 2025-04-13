<!--Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта.-->
<?php
//создаем класс с публичными свойствами
    class Employee{
        public $name;
        public $age;
        public $salary;

        // конструктор объекта
        public function  __construct($name, $age, $salary)
        {
            $this->name = $name; // запишем данные в свойство name
            $this->age = $age; // записываем данные в свойство age
            $this->salary = $salary; // записываем данные в свойство salary
        }
    }

    $employee = new Employee('Ann', 22, 1000); //  создаем объект, сразу заполнив его данными

    echo $employee->name;
    echo $employee->age;
    echo $employee->salary;
?>
<!--Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000. -->
<!-- Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.-->
<!--Выведите на экран сумму зарплат созданных вами юзеров. -->

<?php
class Employee {
    public $name;
    public $age;
    public $salary;

    public function  __construct($name, $age, $salary)
        {
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }
    }
    $employee = new Employee('eric', 25, 1000);

    echo $employee->name;
    echo $employee->age;
    echo $employee->salary;

    $employee1 = new Employee('kyle', 30, 2000);
    echo $employee1->name;
    echo $employee1->age;
    echo $employee1->salary;

    echo $employee->salary + $employee1->salary;
?>


