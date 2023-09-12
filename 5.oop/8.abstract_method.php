<?php

// abustract method holo jekhane class er moddhe method likha htake then oi class theke child class banaye use korte hoy parent class e je method abustract thke oi gula child class e obossoi use korte hoy. abstract class theke object banano jay na chikd class banaye use korte hoy

// abstract class MainClass
// {
//     function sayHi()
//     {
//         echo "Hello";
//     }

//     abstract function sleep();
//     abstract function eat();
//     final function run()
//     { // if use final then we can't overwrite ;
//         echo "Runnig";
//     }
// }

// class ChildClass extends MainClass
// {
//     function sleep()
//     {
//         echo "I am going to sleep";
//     }
//     function eat()
//     {
//     }
// }

// $cc = new ChildClass;
// $cc->sayHI();
// $cc->sleep();


// how to precess to force in cide and write code better


// class Shape
// {
// }

// class Shapes
// {
//     private $shapes;
//     function __construct()
//     {
//         $this->shapes = array();
//     }
//     function addShape(Shape $shape) // here i can say that only shape type object can pass
//     {
//         array_push($this->shapes, $shape);
//     }
//     function totalShapes()
//     {
//         return count($this->shapes);
//     }
// }

// class Rectangle extends Shape // here i say who can go with shapes
// {
// }
// class Triangle extends Shape
// {
// }
// class Student
// {
// }

// $shapesCollection = new Shapes();
// $shapesCollection->addShape(new Rectangle());
// $shapesCollection->addShape(new Triangle());
// //$shapesCollection->addShape(new Student());

// echo $shapesCollection->totalShapes(); // here show result 3 but student is not shapes so we can force that we can say that you can't sent any kind of object you can send only shape type object.
