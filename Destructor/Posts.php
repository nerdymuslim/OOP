<?php
class Posts
{
    function __construct()
    {
        echo "This is a Constructor" . PHP_EOL;
    }
    function __destruct()
    {
        echo "This is a Destructor" . PHP_EOL;
    }
}
$post = new Posts();
//you will see without calling the object you can see that constructor and destructor are aran immediately 