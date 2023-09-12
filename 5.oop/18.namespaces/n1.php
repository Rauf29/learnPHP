<?php

namespace Project;

use \Project\Motorcycles\Bike as Hornet;

include "c1.php";
include "c2.php";

$b = new Bike();
echo $b->getName();
echo PHP_EOL;
$h = new Hornet;
echo $h->getName();
