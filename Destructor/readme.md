What is Destructor

Destructor are magic methods that gets loaded automatically just before the instance of a class is destroyed .

Purpose of Destructor
is to do clean up activities.
Example: Closing Database Connection or Saving Files.
Perform the cleanup activities.
Close the file connection 
Save the Log File
Write Activity Logs-End time
Free up the Resources
Save the properties into a File.
Save the Cache
Serialize the objects
 

it is a placeholder to do clean up.

you can choose to define Destructor method or ignore it a it is optional to define.
Syntax
__destruct(void) : void // no parameter to pass
 no return type.

How to define destructor
class Car{
public $dbConnection;
    function __destruct(){
        mysqli_close($dbConnection);
}
}
