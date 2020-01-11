<?php

class Car
{
    //created a class
    //created our properties
    public $name;
    public $color;
    public $model;
    public $type;
    public $year;

    public function __construct(string $name, string $color, string $model, string $type, int $year)
    {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
        $this->type = $type;
        $this->year = $year;
    }
    //created methods
    public function startCar()
    {
        echo "I just started";
    }
    public function StopCar()
    {
        echo "Car Stopped";
    }
    public function accelerateCar()
    {
        echo "I am Moving";
    }
}

$car1 = new Car("Toyota","Black","Matrix","Sedan",2006); //created an object  called objName


echo "My car is {$car1->name} and the color is {$car1->color} The model is {$car1->model} and it is of type {$car1->type} " . PHP_EOL;
$car1->startCar();
