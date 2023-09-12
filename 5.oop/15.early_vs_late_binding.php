<?php

class Planet
{
    static function echoName()
    {
        //echo self::getName(); // early buinding becouse child class the jodi method call kore hoy tohkon self:: main object er method run kore mane main object er data show kore data change hoy na
        echo static::getName(); // late buinding when use static:: tokhon child class er method e call kore.
    }
    static function getName()
    {
        return "Planet\n";
    }
}

class Earth extends Planet
{
    static function getName()
    {
        return "Earth";
    }
}

Planet::echoName();
Earth::echoName();
