<?php

namespace Ekiti;

include "Project.php";

//use namespace\Classname
use Project\Log as ProjectLog;

class Log
{
    public function get()
    {
        echo "Ekiti.Table.get" . PHP_EOL;
    }
}
ProjectLog::get();
