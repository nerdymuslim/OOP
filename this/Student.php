<?php
class Student
{
    public $name;
    public $class;

    //getters and setters for properties Name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    //getters and setters for properties class
    public function getClass(): string
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function printDetails()
    {
        echo "$this->name is studying in $this->class Class" . PHP_EOL;
    }
}

