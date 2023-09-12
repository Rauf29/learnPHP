<?php
// class MathCalculator
// {
//     private $number;
//     static $name;

//     static function fibonacci($n)
//     {
//         echo self::$name . "\n";
//         self::doSomething();
//         echo "Fibonacci series up to {$n} \n";
//     }

//     static function doSomething()
//     {
//         echo "Doing something \n";
//     }

//     function factorial($n)
//     {
//         self::$name = "Rauf";
//         self::doSomething();
//         $this->doSomething();
//         $this->number = 12;
//         echo "Calculatiog factorial of {$n}\n";
//     }
// }

// $math = new MathCalculator(); // we also can access like this
// $math->factorial(6);

// MathCalculator::fibonacci(5); // for access static funciton or properties use self::____ here methor of properties. and we can acces any static class method without creat object that is the main benefit of static class ..
// echo MathCalculator::$name;
// class MyClass
// {
//     static $staticProperty;

//     static function sayHi()
//     {
//         self::$staticProperty = "Hello, I'm a static property!";
//     }
// }
// // Accessing static property without creating an instance
// MyClass::sayHi();
// echo MyClass::$staticProperty;
// echo "\n";



// ** use static method in child class and overwrite

// class A
// {
//     static function sayHi()
//     {
//         echo "Hi From A \n";
//     }
// }

// class B extends A
// {
//     static function sayHi()
//     {
//         echo "Hi Form B \n";
//         parent::sayHi();
//     }
// }

// B::sayHi();

// ** static scope

class S
{
    protected static $name;
    static function sayHi()
    {
        self::$name = "Hello \n";
        echo "Hi From S \n";
    }
}

class R extends S
{
    static function sayHi()
    {
        echo "Hi Form R \n";
        parent::sayHi();
    }
}
R::sayHi();
//echo R::$name; // if set protected then we can't access properties directly

// ** how to make constent in class

class Myclass
{
    const CITY = "Kushtia";
    function sayHi()
    {
        echo "Hi From" . self::CITY;
    }
}

$m = new Myclass;
$m->sayHi(); // or
echo Myclass::CITY;
