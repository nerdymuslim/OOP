NAMESPACES

imagine importing an external php library or framework which has a log class and you need to write your own Log class.
to prevent conflicts we use namespaces to fix that .
The major reason we use namespaces is when there are possibility of multiple classes having the same name.
namespaces allow you to tell your code that you can be named eg Log class and that other file can have same Log Class however it can be used only along a particular path.

eg Log Classes
.   /app/util/Log.php
.   /vendor/framework/framework/log/Log.php
.   /vendor/package/package/util/Log.php

Benefits of Namespacing (>PHP 5.6)
--Easier to import packages
--Better,simpler method and class naming
--Class aliases
--Composer (it allows us to use php manager to import and autoload pacakages into php )