<?php

class Student
{
    private $name;
    private $age;
    private $class;
    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // public function getName()
    // {
    //     return $this->name;
    // }
    // public function setName($name)
    // {
    //     $this->name = $name;
    // }
    // public function getAge()
    // {
    //     return $this->age;
    // }
    // public function setAge($age)
    // {
    //     $this->age = $age;
    // }
    // public function getClass()
    // {
    //     return $this->class;
    // }
    // public function setClass($class)
    // {
    //     $this->class = $class;
    // }

    // i can the same thing very shot way like this

    public function __get($properties)
    {
        return $this->$properties;
    }
    public function __set($properties, $value)
    {
        $this->$properties = $value;
    }
}

$r = new Student("Rauf", 24, 'BBA 4th Year');
// echo $r->getAge();
// $r->setName("Rehan");
// echo $r->getName();

$r->name = "Rehan";
echo $r->name;
