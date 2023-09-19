<?php
// interface segregation bolte joto ta somvob choto choto interface likha;
/*
interface Vehicle {
    function hasTwoTires();
    function hasFourTires();
    function hasSixTires();
    function isDieselCompatible();
    function isPetrolCompatible();
    function getMileage();
}

class MotorCycle implements Vehicle{
    // here problem is amr sob method call kora lagche but motorcycle a amar koyta tires ache aitar ekta method dorkar but amr call korte hosche 3 ta so this is bad practice;
    function hasTwoTires(){}
    function hasFourTires(){}
    function hasSixTires(){}
    function isDieselCompatible(){}
    function isPetrolCompatible(){}
    function getMileage(){}
}
*/

// better way
interface Vehicle
{
    // All common method jeta sobar moddhe thakbe
    function getMileage();
    function getName();
    function getPrice();
}

interface TwoWheelers
{
    function hasTwoTires();
}
interface FourWheelers
{
    function hasFourTires();
}
interface SixWheelers
{
    function hasSixTires();
}

class MotorCycle implements Vehicle, TwoWheelers
{
    function getMileage()
    {
    }
    function getName()
    {
    }
    function getPrice()
    {
    }
    function hasTwoTires()
    {
    }
}


class Car implements Vehicle, FourWheelers
{
    function getMileage()
    {
    }
    function getName()
    {
    }
    function getPrice()
    {
    }
    function hasFourTires()
    {
    }
}
class Truck implements Vehicle, SixWheelers
{
    function getMileage()
    {
    }
    function getName()
    {
    }
    function getPrice()
    {
    }
    function hasSixTires()
    {
    }
}
