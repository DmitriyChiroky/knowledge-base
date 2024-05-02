Интерфейсы и абстрактные классы:
Пример интерфейса:
php
Copy code
<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        file_put_contents('log.txt', $message, FILE_APPEND);
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        // Сохранение сообщения в базу данных
    }
}

$logger = new FileLogger();
$logger->log("Log message");
?>
Пример абстрактного класса:
php
Copy code
<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Rectangle extends Shape {
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

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new Rectangle(5, 10);
$circle = new Circle(7);

echo $rectangle->calculateArea(); // Output: 50
echo $circle->calculateArea();    // Output: 153.938...
?>
Исключения и ошибки:
Обработка исключений:
php
Copy code
<?php
try {
    // Код, который может вызвать исключение
    $result = 10 / 0;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
Собственное исключение:
php
Copy code
<?php
class CustomException extends Exception {
    public function errorMessage() {
        // Специфическое сообщение об ошибке
        return "Ошибка: {$this->getMessage()}";
    }
}

try {
    $age = 15;
    if($age < 18) {
        throw new CustomException("Вы должны быть старше 18 лет.");
    }
} catch(CustomException $e) {
    echo $e->errorMessage();
}
?>
Проектирование ООП-кода:
Пример использования композиции:
php
Copy code
<?php
class Engine {
    public function start() {
        echo "Engine started!";
    }
}

class Car {
    private $engine;

    public function __construct() {
        $this->engine = new Engine();
    }

    public function startCar() {
        $this->engine->start();
    }
}

$car = new Car();
$car->startCar(); // Output: Engine started!
?>
Применение принципов SOLID:
Пример принципа SRP (Single Responsibility Principle): Класс должен иметь только одну причину для изменения.
Пример принципа OCP (Open/Closed Principle): Классы должны быть открыты для расширения, но закрыты для изменения.
Пример принципа LSP (Liskov Substitution Principle): Объекты базового класса могут быть заменены его подклассами без изменения свойств программы.
Пример принципа ISP (Interface Segregation Principle): Клиенты не должны зависеть от интерфейсов, которые они не используют.
Пример принципа DIP (Dependency Inversion Principle): Модули верхнего уровня не должны зависеть от модулей нижнего уровня. Оба должны зависеть от абстракций.
Эти примеры помогут вам не только понять базовые концепции ООП в PHP, но и увидеть их применение на практике в различных сценариях разработки.