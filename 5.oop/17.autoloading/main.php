<?php

function autoload($name)
{
    if (strpos($name, "Planets_") !== false) {
        $filename = str_replace("Planets_", "", $name);
        var_dump($filename);
        include strtolower("planets/{$filename}.php");
    } else {
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');

(new Spaceship)->getName();
echo PHP_EOL;
(new Planets_Mars)->getName();
echo PHP_EOL;
(new Planet)->getName();
echo PHP_EOL;
(new Bike)->getName();
