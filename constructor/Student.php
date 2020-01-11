<?php

class Student
{
    public $name = "Elias Durosinmi";
    public $class = "First Class";

    //let say you want to make $this->name have a default value we can do this with constructor. 
    function __construct()
    {
        $this->name = "";
        $this->class = "";
        echo "Hello from Constructor";
    }

    //we can then write a method to printDetails
    public function printDetails()
    {
        echo "$this->name had a $this->class in school" . PHP_EOL;
    }
}
//creation of an instance of a class
$student = new Student(); //this will invoke the Constructor first.
