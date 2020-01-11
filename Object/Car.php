<?php

class Car
{
    public $name;
    public $color;
    public $model;

    public function sayHello()
    {
        echo "Hello from Car Class" . PHP_EOL;
    }
}

$car1 = new Car();
$car1->name = "Toyota";
$car1->color = "Grey";
$car1->model = "Matrix";
$car1->sayHello();
echo "my $car1->name is $car1->color and the model is $car1->model";

$car2 = new Car();
$car2->name = "Honda";
$car2->color = "Blue";
$car2->model = "Accord";
$car2->sayHello();
echo "my $car2->name is $car2->color and the model is $car2->model";
