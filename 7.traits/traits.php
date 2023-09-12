<?php

// trait NumberSeriesOne
// {
//     function numberSeriesA()
//     {
//         echo "Number Series A \n";
//         parent::numberSeriesA();
//     }

//     function numberSeriesB()
//     {
//         echo "Number Series B \n";
//     }
// }

// class SomeClass
// {
//use NumberSeriesOne; // when i create class and use trait directly only that time i can overwrite code
//     function numberSeriesA()
//     {
//         echo "Printing Number Series";
//     }
// }

// class numberSeries extends SomeClass
// {
//     use NumberSeriesOne; // other way to use trait main data then use it
// }


// $ns = new numberSeries;
// $ns->numberSeriesA();



// ** In traite static and abstract method

trait Mytrait
{
    static $number;
    abstract function sayHi();
}

class MyClassA
{
    use Mytrait;
    function sayHi()
    {
        echo "Hi";
    }
}

class MyClassB
{
    use Mytrait;
    function sayHi()
    {
        echo "Hi++";
    }
}

MyClassA::$number = 2;
MyClassB::$number = 8;
echo MyClassA::$number;

$ma = new MyClassA();
$mb = new MyClassB();
echo $ma::$number;

echo MyClassB::$number;
echo $mb::$number;
