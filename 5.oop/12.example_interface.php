<?php

class DistrictCollection implements IteratorAggregate, Countable // here i say to php that i am gonna make loop . and for count i can use COUNT .
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district)
    {
        array_push($this->districts, $district);
    }
    function getDistricts()
    {
        return $this->districts;
    }

    function getIterator(): Iterator // here i return all district
    {
        return new ArrayIterator($this->districts);
    }
    function count(): int
    {
        return count($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add('Rajshahi');
$districts->add('Bogra');
$districts->add('Sylhet');
$districts->add('Rangpur');
$districts->add('Khulna');
$districts->add('Dhaka');

$districtList = $districts->getDistricts(); // in class we can't loop directely with out nor say i am gonna make loop. that's why here first store all district then loop.
print_r($districtList);
foreach ($districtList as $district) {
    echo $district . "\n";
}

//we can do it better way like this

foreach ($districts as $district) {
    echo "{$district} \n";
}

echo count($districts);
