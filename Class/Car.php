<?php

class Car
{
    public $name; // all this are called properties
    public $color; //to read this we say that $color is a property of class car
    public $size;
    public $model;
    public $type;

    public function startCar()
    { //startCar() is a method of class Car

    }
    public function increaseSpeed()
    {
    }
    public function decreaseSpeed()
    {
    }
    public function stopCar()
    {
    }

    // you dont do this echo . that is you dont write echo statement outside of the function . The only thing you should have in a class is methods (functions) and properties(variables)

    //echo "hello world";
}
//anything you write in a class wont be executed. because it is just a blueprint. you actually need to build
