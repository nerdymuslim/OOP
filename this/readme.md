$this keyword allow us to access properties and methods of same class.
$this indicates instance of this class 
you don't have to declare $this keyword.
$this always refer to the properties and methods of that class.

class Car{
    public $name = "Elias Durosinmi";
    public function printName(){
        echo $this->showName().PHP_EOL;
    }
    public function showName(){
        return $this->name;
    }
}
