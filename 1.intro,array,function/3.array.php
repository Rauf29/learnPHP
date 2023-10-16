<?php

// array

// $students = array(
//     "Rauf",
//     "Rupok",
//     "Islam",
//     "Madedi",
//     "Ali",
//     "Foysal"
// );

// for ($i = 0; $i < count($st          udents); $i++) {
// echo "$students[$i] \n" ;
// } 
// $n = count($students);
// for ($i = $n - 1; $i >= 0; $i--) {
//     echo "$students[$i] \n";
// }
//$students[] = "Rakib";
// array_pop($students);
// array_shift($students);
// array_push($students, "Neloy");
// array_unshift($students, "Rehan");
// foreach ($students as $student) {
//     echo "$student \n";
// }

// $foods = [
// 'Drinks' => 'Tea, 7up, Cococola,Sprite,Uper10',
// 'meat' => 'Chiken,Beef,Mutton',
// ];
// $foods['Drinks'] .= ",Fizup";
// $foods['Meat'] = "Chiken";

// foreach ($foods as $key => $value) {
// echo $key . "=" . $value . "\n";
// }

// ** string to array use preg_split or explode and array to string use join()

// $names = preg_split('/(, |,)/', "Rauf,Rupok ,Rakib,Nur ,Rashidul,Alif");

// foreach ($names as $name) {
// echo $name . "\n";
// }
// var_dump($names);
// $nameString = join(',', $names);
// echo $nameString;

// $array = [
// [234, 4234, 2342, 34, [234, 234, 2342, 234, [23, 34, 3, 233, 4, 53, 4, 34]]],
// [234, 2, 34, 234, 234, 23, 233, 225, 213452,]

// ];


// print_r($array);
// echo $array[0][4][4][4];

// $foods = [
// 'Drinks' => 'Tea, 7up, Cococola,Sprite,Uper10',
// 'meat' => 'Chiken,Beef,Mutton',
// '14 purush' => [
// 'ghosti' => [
// 'family' => 'ami,ma ,baba, bon'
// ]
// ]
// ];

// foreach ($foods['14 purush']['ghosti'] as $key => $value) {
// echo "Key: $key , Value: $value";
// }

// **store associative array

// $foods = [
//     'Drinks' => 'Tea, 7up, Cococola,Sprite,Uper10',
//     'meat' => 'Chiken,Beef,Mutton'
// ];

// printf("%s %s \n", $foods["Drinks"], $foods["meat"]);
// $serilaize = serialize($foods);
// echo $serilaize;
// $backToArray = unserialize($serilaize);
// print_r($backToArray);

// $withJson = json_encode($foods);
// echo $withJson;
// $backJsonToArray = json_decode($withJson, true);
// print_r($backJsonToArray);

// **copy array => dip copy and refference copy 

// $name = [
//     'fname' => 'Rauful',
//     'lname' => 'islam'
// ];
// $newName = $name;
// $newName['lname'] = 'Islam';

// print_r($name);
// print_r($newName);

// **refference copy

// $name = [
//     'fname' => 'Rauful',
//     'lname' => 'islam'
// ];
// $newName = &$name;
// $newName['lname'] = 'Islam';

// print_r($name);
// print_r($newName);

// //for remove data use unset

// unset($name['fname']);
// print_r($name);

// **array check

// $n = '';
// if (isset($n) && (is_numeric($n) || $n != '')) {
//     echo "Number is set";
// } else {
//     echo "Number is not set";
// }

//array slice

// $fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mange'];

// $random = ['a' => 122, 'b' => 234, 'c' => 234, 12 => 123];
// $someRandom = array_slice($random, 1, 5, true);
// print_r($someRandom);
// print_r($random);

// **array cutting

//$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mange'];

// $someFruits = array_splice($fruits, 1, 2);
//print_r($someFruits);

// print_r($fruits);
// also i can add item where i remove item with passing extra paramite like:
// $newFruits = ['jackfruit', 'tamarind', 'pineapple'];
// $someFruits = array_splice($fruits, 2, 2, $newFruits);
// print_r($someFruits);
// print_r($fruits);

// cutting array + (plus) kora

// $fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mange'];
// $random = ['a' => 122, 'b' => 234, 'c' => 234, 12 => 123, 'e' => 234, 'f' => 234];

// $newFruits1 = array_slice($fruits, 0, 2);
// $newFruits2 = array_slice($fruits, 3, null);

// $newFruits = array_merge($newFruits1, $newFruits2);
// print_r($newFruits);
// //or use + but the problem is + er somoy array number preserve korte hoy ta na hole same index number er array ney na so 

// $newFruits1 = array_slice($fruits, 0, 2, true);
// $newFruits2 = array_slice($fruits, 3, null, true);
// $newFruits = $newFruits1 + $newFruits2;
// print_r($newFruits);

// **search in array 

// $fruits = ['apple', 'banana', '22', 'orange', 'plum', 'dates', 'mange'];
// $random = ['a' => 122, 'b' => 234, 'c' => 234, 12 => 123, 'e' => 234, 'f' => 234];

// if (in_array(22, $fruits,)) {
//     echo "fruits is found";
// }
// $find = array_search(22, $fruits);
// echo $find;

// if (key_exists('c', $random)) {
//     echo "The key is exist";
// }

// **check 2 in arrays common and uncommon item

// $n1 = [1, 2, 4, 5, 3, 5, 6, 3, 7, 8, 2, 4,];
// $n2 = [1, 2, 3, 2, 6, 77, 33, 66, 9, 6,];

// $rand1 = ['a' => 'rauf', 'g' => 'rupok', 'c' => 'rehan', 'd' => 'anas'];
// $rand2 = ['f' => 'rauf', 'g' => 'alif', 'c' => 'rehan', 'd' => 'anas'];

// $common = array_intersect($n1, $n2);
// print_r($common);

// $common2 = array_intersect($rand1, $rand2);
// print_r($common2);

// $common2 = array_intersect_assoc($rand1, $rand2);
// print_r($common2);

// $diff = array_diff($n1, $n2);
// print_r($diff);
// $diffAsso = array_diff_assoc($rand1, $rand2);
// print_r($diffAsso);

//  **array walk,map,filter

// $number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// function square($n)
// {
//     printf("Square of %d is %d \n", $n, $n * $n);
// }
// array_walk($number, 'square');

// function qube($n)
// {
//     return $n * $n * $n;
// }
// $newArray = array_map('qube', $number);
// print_r($newArray);

// function even($n)
// {
//     return $n % 2 == 0;
// }
// $newArray = array_filter($number, 'even');
// print_r($newArray);

// $persons = ['sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'rauf', 'saida', 'sabbir'];
// function filterByS($n)
// {
//     return $n[0] == 's'; // php  je kono string ke array hishebe treat kore like 'rauf' -> here [0]=> 'r', [1]=>'a' ......
// }
// $newPersons = array_filter($persons, 'filterByS');
// print_r($newPersons);

// ** array reduce 

// $number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// function sum($oldValue, $newValue)
// {
//     if ($newValue % 2 == 0) {
//         return $oldValue + $newValue;
//     }
//     return $oldValue;
// }

// $sum = array_reduce($number, 'sum');
// echo $sum;


// ** array theke variable e data neoya

// $color = [12, 231, 3213, 123123,];
// list($red, $green, $yeolo, $white) = $color;
// echo $green;

// **renge function er use
// $number = [];
// for ($n = 1; $n <= 100; $n++) {
//     array_push($number, $n);
// };
// print_r($number);

// //or
// foreach (range(0, 100, 10) as $number) {
//     if ($number > 0)
//         echo $number . "\n";
// }

// $number = range(10, 50);
// $random = mt_rand(1, 10);
// echo $number[$random];
