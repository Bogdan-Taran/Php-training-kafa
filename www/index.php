<?php

class User
{
    private $role;

    private $name;

    public function __construct(string $role, string $name)
    {
        $this->role = $role;
        $this->name = $name;
    }
    public static function createAdmin(string $name)
    {
        return new self('admin', $name);
    }
}

$admin = User::createAdmin('Иван');
var_dump($admin);
echo '<br>';

class A
{
    public static $x;

    public function getX()
{
    return self::$x;
}
}

A::$x = 5;
$a = new A();
var_dump($a->getX()); // 5



class Human
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
echo 'Людей уже ' . Human::getCount(); // 3

