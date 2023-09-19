<?php
// ekta particullar object jodi accept kori tahole tar subclass gulau accept korte patbo;
abstract class Bird
{
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird
{
    abstract function fly();
}

abstract class WalkingBird extends Bird
{
    abstract function walk();
}

class BirdManager
{
    function maintainBird(Bird $b)
    {
        $b->eat();
        $b->sleep();
    }
    function flyingBird(FlyingBird $fb)
    {
        $fb->fly();
    }
    function walkingBird(WalkingBird $wb)
    {
        $wb->walk();
    }
}

class Eagle extends FlyingBird
{
    function eat()
    {
    }
    function sleep()
    {
    }
    function fly()
    {
    }
}
class Penguin extends WalkingBird
{
    function eat()
    {
    }
    function sleep()
    {
    }
    function walk()
    {
    }
}

// another

class Shape
{
}

class Rectangle extends Shape
{
    function setHeight($height)
    {
    }
    function setWidth($height)
    {
    }
}
class Square extends Shape
{
}
