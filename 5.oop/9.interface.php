<?php
// ekta class interface ke extend korte pare na but ekta interface ekta interface ke extend korte pare
interface BaseAnimal
{ // it is like abstract method but here no need to write which method abstract here all method abstract

    function isAlive();
    function canEat($param);
    function breed();
}

// writting precess

class Animal implements BaseAnimal
{
    function isAlive()
    {
    }
    function canEat($param)
    {
    }
    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}

// class Human implements BaseHuman
// {
//     function isAlive()
//     {
//     }
//     function canEat($param)
//     {
//     }
//     function breed()
//     {
//     }
//     function canTalk()
//     {
//     }
// }

// $cat = new Animal;
// echo $cat instanceof BaseAnimal;
//$h = new Human;
//echo $h instanceof BaseAnimal;

abstract class AbstractHuman implements BaseHuman
{
    abstract function run();
}
class Human extends AbstractHuman
{
    function isAlive()
    {
    }
    function canEat($param)
    {
    }
    function breed()
    {
    }
    function canTalk()
    {
    }
    function run()
    {
    }
}

$Rauf = new Human;
echo $Rauf instanceof BaseHuman;
