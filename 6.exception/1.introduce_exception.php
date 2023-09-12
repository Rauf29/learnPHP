<?php

class Student
{
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age < 4) {
            throw new Exception("Too Young", 1001); // 1001 it's error code so i can give anything.
        } elseif ($age > 35) {
            throw new Exception("Too Old", 1002);
        }
        $this->age = $age;
    }
}

try {
    $s = new Student("Rauf", 39);
} catch (Exception $e) {
    echo $e->getCode() . ":" . $e->getMessage();
}
