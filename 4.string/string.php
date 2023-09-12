<?php
// ** string likhar poddhoti

// $name = 'Rauf';

// echo 'I am {$name}';
// echo PHP_EOL;
// echo "I an {$name}";
// echo PHP_EOL;
// $personName = <<<EDO
// I am {$name}
// I am 24 years old

// EDO;
// echo $personName;


// ** ASCII code 

// echo ord('A');
// echo PHP_EOL;
// echo ord('n');
// echo PHP_EOL;
// echo chr(99);
// echo PHP_EOL;
// echo chr(70);


// ** how  to excess any element in a string

// $sentence = 'I am Rauf and i am a web devloper';
// echo $sentence[0];
// echo PHP_EOL;
// echo $sentence[7];
// echo PHP_EOL;
// echo substr($sentence, 4, 7);
// echo PHP_EOL;
// echo substr($sentence, -6);
// echo PHP_EOL;
// $lenth = strlen($sentence);
// echo substr($sentence, $lenth - 3);

// ** string revers

// $string = 'Hello World';
// $lenth = strlen($string) - 1;
// for ($i = $lenth; $i >= 0; $i--) {
//     echo $string[$i];
// }
// echo PHP_EOL;
// $lenth = strlen($string);
// for ($i = 1; $i <= $lenth; $i++) {
//     echo $string[$i * -1];
// }
// echo PHP_EOL;
// echo strrev($string);
// echo PHP_EOL;

// $first = substr($string, 0, 5);
// echo $first;
// echo PHP_EOL;
// $second = substr($string, 6);
// echo strrev($first) . ' ' . strrev($second);

// ** brake string 

// $string = 'I am Rauf,and i want to be a web developper,and i practice every dey';
// $srting2 = 'I am Rauf and i want to be a web developper and i practice every dey';

// $parts = explode(" ", $string);
// print_r($parts);
// echo PHP_EOL;
// $original = join(' ', $parts);
// echo $original . "\n";
// $parts2 = str_split($srting2);
// print_r($parts2);
// echo PHP_EOL;
// $parts3 = preg_split("/ |,/", $string);
// print_r($parts3);
// echo join(" ", $parts3);

// $string2 = 'I am Rauf and i want to be a web developer and i practice every day.';

// // Step 1: Split the string into sentences
// $sentences = preg_split('/\s*\.+\s*/', $string2, -1, PREG_SPLIT_NO_EMPTY);

// $a_count = 0; // Count of 'a' occurrences
// $a_sentences = 0; // Count of sentences containing 'a'

// foreach ($sentences as $sentence) {
//     // Step 2: Count 'a' occurrences in the current sentence
//     $a_in_sentence = substr_count($sentence, 'a');

//     // If 'a' is found in the sentence, increment the counts
//     if ($a_in_sentence > 0) {
//         $a_count += $a_in_sentence;
//         $a_sentences++;
//     }
// }

// echo "Total 'a' occurrences: $a_count<br>";
// echo "Sentences with at least one 'a': $a_sentences";


// ** searce in string

// $string = 'I am Rauf and rauf i want to be a web developer and i practice every day.';
// echo strpos($string, 'Rauf'); // case sencetive
// echo stripos($string, 'rauf'); // case insencetive
// echo strrpos($string, 'and'); // search from last
// echo stripos($string, 'want');

// $serach = stripos($string, 'be');
// if ($serach !== false) {
//     echo 'The word was found';
// } else {
//     echo 'The word was not found';
// }

// ** replace anythin in string

// $string = "Quick Brown brown Fox fox jump over the lazy dog";

// echo str_replace('brown', 'red', $string); // case sencetive
// echo PHP_EOL;
// echo str_ireplace('brown', 'red', $string); // case insencetive
// echo PHP_EOL;
// echo str_ireplace(array('brown', 'fox', 'dog'), array('red', 'cat', 'rat'), $string); // serch more toghether
// echo PHP_EOL;
// $totalReplace =  str_ireplace('brown', 'red', $string, $count);

// echo "Total replace number is {$count}";

// ** string tream

// $string = " Hello \n";
// echo $string;
// echo trim($string, ' ');

// echo 'hi';

//**  wordwrap 

// echo wordwrap("i am a student and i am a proffetional wev developer and i practice english every day. i enjoy practice english languige every day", 25, "\n", true);

// new to convart <br>

// $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. \n Incidunt, consequuntur. Nemo ipsam atque eius,\n provident sit ipsa illum itaque adipisci eveniet. \nAmet id pariatur fuga, neque odit voluptates quos voluptate?";
// echo nl2br($string);

// ** use of scanf

//$person = "Rauf Kushtia 01303204028 rauf.official@gmail.com 23";
// $parts = sscanf($person, "%s %s %11d %s %d");
// print_r($parts);
// sscanf($person, "%s %s %11d %s %d", $name, $address, $number, $gmail, $age);
// echo $name;
