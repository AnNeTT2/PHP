<!-- Сделайте несколько классов в разных файлах. Подключите ваши классы к файлу index.php.-->

<?php
// файл User.php

class User{
     public $name;
     public $age;

     public function __construct($name, $age){
         $this->name = $name;
         $this->age = $age;
     }
     public function getName(){
         return $this->name;
     }
     public function getAge(){
         return $this->age;
     }
}
?>

// файл index.php

<?php
require once 'User.php'; // подключаем наш класс

$user = new User('Ann', 36);
echo $user->getName();
echo $user->getAge();
?>

