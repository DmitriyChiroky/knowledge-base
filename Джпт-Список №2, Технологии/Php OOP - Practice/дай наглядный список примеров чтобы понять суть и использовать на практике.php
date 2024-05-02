<?php 
// дай наглядный список примеров чтобы понять суть и использовать на практике
// ChatGPT
// Конечно, вот наглядный список примеров, который поможет лучше понять основные концепции объектно-ориентированного программирования (ООП) в PHP и их использование на практике:

// Создание классов и объектов:
// Пример класса и создание объекта:
// php
// Copy code
class Car {
    public $brand;
    public $model;

    public function startEngine() {
        echo "Engine started!";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->model = "Camry";
$myCar->startEngine();
?>
<!-- Конструктор класса:
php
Copy code -->
<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        echo "Hello, my name is $this->name.";
    }
}

$person = new Person("John");
$person->greet();
?>
Наследование:
Пример наследования:
php
Copy code
<?php
class Animal {
    public function makeSound() {
        echo "Animal makes a sound.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks.";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Dog barks.
?>
Вызов метода родительского класса:
php
Copy code
<?php
class Animal {
    public function makeSound() {
        echo "Animal makes a sound.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        parent::makeSound();
        echo " Dog barks.";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Animal makes a sound. Dog barks.
?>
Инкапсуляция:
Пример инкапсуляции:
php
Copy code
<?php
class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds.";
        }
    }
}

$account = new BankAccount(1000);
echo $account->getBalance(); // Output: 1000
$account->deposit(500);
echo $account->getBalance(); // Output: 1500
$account->withdraw(2000); // Output: Insufficient funds.
?>
Полиморфизм:
Пример полиморфизма:
php
Copy code
<?php
interface Shape {
    public function calculateArea();
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea();
}

$rectangle = new Rectangle(5, 10);
$circle = new Circle(7);

printArea($rectangle); // Output: Area: 50
printArea($circle);    // Output: Area: 153.938...
?>
Эти примеры помогут вам лучше понять и применять базовые концепции ООП в PHP на практике.