<?php

class ChainMethods
{
    public  $name = "Elias Durosinmi"; //static allows you to call a prop or method directly from outside of the class. without creating an instance of an object. 
    function method1()
    {
        echo "Hello from method 1" . PHP_EOL;
        return $this; // This will make $this an instance of the class and thus makes it possible for you to chain the methods. This is because methods can only be executed from $this or an object. 
    }
    function method2()
    {
        echo "Hello from method 2" . PHP_EOL;
    }
}
$cm = new ChainMethods();
$cm->method2()->method1();
//$CM->METHOD1 == $THIS
//this allows you to call a method before another method will be executed. This is used as an instance to call another method .Thus we are chaining the methods.
//echo ChainMethods::$name;
