<?php

class Rectangle
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}

class Square implements CalculateSquare
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}

class Circle implements CalculateSquare
{
    const PI = 3.1416;

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}

interface CalculateSquare
{
    public function calculateSquare(): float;
}

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5)
];
foreach ($objects as $object) {
    if ($object instanceof CalculateSquare) {
        echo 'Объект реализует интерфейс CalculateSquare. Это объект класса '.  get_class($object) . '. Площадь: ' . $object->calculateSquare();
        echo '<br>';
    }else{
        echo 'Объект <strong>не</strong> реализует интерфейс CalculateSquare. Это объект класса '.  get_class($object) . '.';
        echo '<br>';
    }
}


