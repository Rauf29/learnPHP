<?php

namespace Main;

include "planet.php";
include "earth.php";
include "mars.php";

$planet = new \Astronomy\Planets\Planet();
$planet->getName();

$earth = new \Astronomy\Planets\Earth();
$earth->getName();

$mars = new \Astronomy\Planets\Mars();
$mars->getName();









new \DateTime(); // if i run php builtin function under namespace i have to write qualifide name that means function er age \ use korte hobe ta na hole seta unqualifide hoye jabe.
