<?php
class User
{
    public $name = "";
    //how to access properties via methods
    //Using getters and setters is the standard to access any properties via the methods.

    //Getter methods . The way to go around this is to start with the get followd by the name of the vaiable .because it is get you need a return type . 
    public function getName(): string
    {
        //return $name // This isnt possible .
        return $this->name;
    }

    //setter Methods .you use setter methods to set the values of the named properties
    //always accept the parameter you need to set. you set the instance variable 
    public function setName($name)
    {
        $this->name = $name;
        //anything you are accessing with the $this it refers to the class properties as against the local variable
        //$name this is a local variable and it isnt the same as properties name $this->name


    }
}
//using the getter and setter methods
$user1 = new User();
$user1->setName("Elias");
echo $user1->getName() . PHP_EOL;

//changing the properties from outside
$user1->name = "Tunji";
echo $user1->getName() . PHP_EOL;

//FROM independent object
//$this refers to only the instance mentioned
$user2 = new User();
$user2->name = "Otunba";
echo $user1->getName() . PHP_EOL;
echo $user2->getName() . PHP_EOL;
