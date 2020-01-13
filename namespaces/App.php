<?php

namespace App;

include "Project.php";

use Project\Log as ProjectTable; //Aliases

class Table
{
    public function get()
    {
        echo "App.Table.get" . PHP_EOL;
    }
}
ProjectTable::get();
