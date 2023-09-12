<?php
class MotorCycle
{
    private $parameters;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['mileage'] = $mileage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
    }

    // function getDisplacement()
    // {
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement)
    // {
    //     $this->parameters['displacement'] = $displacement;
    // }

    // same we can do to use magic method

    function __get($name)
    {
        echo $this->parameters[$name];
    }
    function __set($name, $value)
    {
        echo $this->parameters[$name] = $value;
    }
    function __isset($name)
    {
        if (isset($this->parameters[$name])) // here i set if parameter thake then return false
        {
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }
    function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __call($name, $arguments)
    {
        if ('run' == $name) {
            if ($arguments) {
                echo "I am running at {$arguments[0]}";
            } else {
                echo "I am running";
            }
        }
    }

    static function __callStatic($name, $arguments)
    {
        echo "Static Call";
    }
}

$pulser = new MotorCycle('150CC', '16ltr', '40km');
//echo $pulser->getDisplacement();
echo $pulser->displacement . "\n";

if (isset($pulser->tiresize)) // we can control behabior and overwrite
{
    echo "Found";
} else {
    echo "Not Found";
}

unset($pulser->mileage);
$pulser->run('100km', '120km'); // when call unset method then work __call of __callStatic function
echo  "\n";
MotorCycle::wash();
