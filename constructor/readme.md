So what are constructors and destructors
---- Every class has something called magic methods that are called automatically when you run an instance of a class.
Just like $this that is not created by us .it is automatically available should you choose to use them '.
---- Constructor are magic methods that gets loaded automatically when instance of a class is created.
---- Purpose of Constructor is to initialize the properties of the class. lets say are writing a Bank class the balance you want to have starting with zero or a fixed amount .  That can controlled with a constructor that is the initialization of the class. So When the objects get created what are the default value you want to assign to the properties. 

You can choose to define Constructor method or ignore it as it is optional to define. 

How to define Constructor 
---- Class Car {
    public $name;
    //please note that it is two underscore followed immediately by construct without space.you must write it exactly without space.construct in small letter as you can see no addition or subtraction .
    function __construct(){
        $this->name = "";//initialize the properties.


    }
}

The prototype of the construct is __construct([mixed $args=""[,$...]]):void 

void means doesn't return any value . The argument are optional . so any time you see in a documentation a value written in square bracket it means optional ..

__construct() is called automatically when new instance is created and does not return any value . Arguments are optional. 
Even though it is called constructor when you writing the code you write only __construct()

Purpose of Constructor
-- Initialize the properties of Class.
-- Initialize the Database Connection. eg once someone create an instance of a class they have a valid connection automatically. 
--  Check if the File Exists.
-- Open the files before using it with the Methods.
-- Check for the internet connection. 
-- Check API is reachable before the connection.
-- Load an instance of another class .
-- Load Mandatory properties to execute the methods in the Class.

