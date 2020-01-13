<?php

class ChainMethods
{
    public $name = "Elias Durosinmi";
    //call this method first to change the Value
    //this has to be executed to change the value 
    function method1()
    {
        echo "Hello from method 1" . PHP_EOL;
        $this->name = "Chain Methods";
        return $this;
    }
    //call this method to display the property value
    function method2()
    {
        echo "Hello from method 2 ($this->name)" . PHP_EOL;
    }
}
$cm = new ChainMethods();
$cm->method1()->method2(); //This is a chain and allows for sequence in your code unlike is someone had done
