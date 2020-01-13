<?php
//namespaces comes first before any code except for the <?php

namespace Project; //this declares that we have a namespace file. note namespace is small letter and Project starts with capital letter. 
class Log
{
    public static function get()
    {
        echo "imported Class" . PHP_EOL;
    }
}
