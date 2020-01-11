Task
-- How to define a Class
---- Class name First letter must always start with Capital letter
CamelCase
---- Your filename must match with class name .
// Car.php
class Car {

        }



---- For good practice one file should only have one class . (you can have multiple classes in a file)
---- class is the keyword used to define a class
---- class is opened and closed with {} like functions.

Remember class is just a documentation it doesn't get executed directly . you use objects to access properties and methods.
to access properties and methods in a class you need to create an object of a class.
Objects are also called an instance of a class
you can create unlimited objects for just one class
Each object properties are unique to that specific instance of a class

$car1 = new Car(); //$car1 is an object of a car class and it is also an instance of the car class
to access a properties
---- $car1->name = "Toyota"; you don't need $ sign in the accessed property.
-> you use this symbol to access properties and methods.

$this is a special variable which can be used to access class properties.