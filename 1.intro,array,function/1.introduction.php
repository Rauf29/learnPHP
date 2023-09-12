<?php
// $name = 'rauf';
// $age = 24;
// $rauf = 'islam';
// $year = 'name';
// echo $ $$year;

// echo "\n";
// echo 'my name is' . " " . $name;
// echo "\n";
// echo "My name is {$$year} {$rauf}\n";

// define('PI', 3.14167);
// $const = 'constant';
// echo "The value of PI is {$const('PI')}\n";

// $fname = 'Rauf';
// $lname = 'islam';
// echo 'My first name is ' . $fname . ' and my last name is ' . $lname . "\n";
// echo "My first name is {$fname} and my last name is {$lname} \n";
// printf("My first name is %s and my last name is %s \n", strtoupper($fname), $lname);

// $fname = 'Rauf';
// $medname = 'ul';
// $lname = 'islam';
// printf('My name is %2$s %1$s %3$s', $fname, $medname, $lname);

// printf('The binary equvalent %d is %b', 12, 12);
// echo "\n";
// printf('The binary equvalent %1$d is %1$b', 12,);
// echo "\n";

// $n = 23.1245;
// printf('%.3f', $n);
// echo "\n";

// $b = 123.423;
// $m = 12.23455;
// $v = .253452;

// echo "\n";
// printf("%08.2f \n", $b);
// printf("%08.2f \n", $m);
// printf("%08.2f", $v);

// $year = 2000;

// if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
//     echo "$year is a leap year";
// } else {
//     echo "$year is not a leap year";
// }
// echo "\n";

// nested if elese

// $condtion1 = true;
// $condtion2 = true;
// $condtion3 = false;

// if ($condtion1 && $condtion2 && $condtion3) {
//     echo "All conditions are true";
// } elseif ($condtion1 && $condtion2) {
//     echo "no 1";
// } elseif ($condtion1) {
//     echo "no 2";
// } else {
//     echo "no 3";
// }


// $n = 70;

// $result = ($n >= 80) ? "Result is A+" : (($n >= 70) ? "Result is A" : (($n >= 60) ? "Result is B" : "Result is fail"));
// echo $result;


// // loop

// for ($i = 0; $i < 10; $i += 1) {
//     echo $i;
//     echo PHP_EOL;
// }
// $i = 0;
// while ($i < 10) {
//     $i++;
//     echo $i;
//     echo PHP_EOL;
// }
// $i = 0;
// do {
//     $i++;
//     echo $i . PHP_EOL;
// } while ($i < 10);

//multiple steping

// for ($i = 10, $j = 1; $i > 0; $i--, $j++) {
//     echo $i . ":" . $j . PHP_EOL;
// }

// $n = 6;
// for ($i = $n, $factorial = 1; $i > 1; $i--) {
//     $factorial *= $i;
// }
// printf("Factorial of %d is %d ", $n, $factorial);

// for ($i = 0; $i < 100; $i++) {
//     echo $i % 7 == 0 ? $i . "\n" : '';
//     echo $i % 11 == 0 ? $i . "\n" : '';
// }


//for ($i = 1; $i < 10; $i++) {
//     if ($i % 5 == 0) {
//         echo $i;
//         echo PHP_EOL;
//         break;
//     }
// }

// for ($i = 1; $i < 10; $i++) {
//     if ($i > 5) {
//         continue;
//     }
//     echo $i;
//     echo PHP_EOL;
// }

// print serise
// $veryold = 0;
// $old = 1;
// $new = 1;
// for ($i = 0; $i < 20; $i++) {
//     echo $veryold . " ";
//     $old = $new;
//     $new = $old + $new;
//     $veryold = $old;
// }

// spacesheep operator
// $x = 10;
// $y = 15;

// function calculate($x, $y)
// {
//     if ($x > $y) {
//         return 1;
//     }
//     if ($x < $y) {
//         return -1;
//     }
//     if ($x = $y) {
//         return 0;
//     }
// }

// if (calculate($x, $y) == 1) {
//     echo "{$x} is greater than {$y} ";
// } elseif (calculate($x, $y) == 0) {
//     echo "{$x} is equal to {$y} ";
// } elseif (calculate($x, $y) == -1) {
//     echo "{$x} is smaller than {$y} ";
// }

// same thing i can do with spacesheep operator with out function also.

// $result = $x <=> $y;
// if ($result == 1) {
//     echo "{$x} is greater than {$y} ";
// } elseif ($result == 0) {
//     echo "{$x} is equal to {$y} ";
// } elseif ($result == -1) {
//     echo "{$x} is smaller than {$y} ";
// }

// null case operator

// $defult_lat = 29.3;
// $defult_lon = 23.3;

// $user_lat = 19.4;

// //use turnary operator
// $lat = isset($user_lat) ? $user_lat : $defult_lat;
// echo $lat;
// // use ifelse
// if (isset($user_lat)) {
//     $lat = $user_lat;
// } else {
//     $lat = $defult_lat;
// }
// echo $lat;

// // we can do same thing with more easyer with null case operator

// $lat = $user_lat ?? $defult_lat;
// echo $lat;
