<?php
// class FavColor
// {
//     public $data;
//     function __construct($data)
//     {
//         $this->data = $data;
//     }
//     function setData($data)
//     {
//         $this->data = $data;
//     }
// }

// $fc1 = new FavColor('Some Data');
// $fc2 = clone $fc1;

// print_r($fc1);
// print_r($fc2);
// $fc2->setData('More Data');
// print_r($fc1);
// print_r($fc2);

// but if clone object and main object e same properties thake tahole problem holo oi properties gula shalo copy hoy ba refference copy hoy sei jonne clone object data set kirle seta data main object eu chenge hoye jay and for fix this problem i have to use magic methid __clone().
class Sport
{
    public $type;
    function __construct($type)
    {
        $this->type = $type;
    }
    function setType($type)
    {
        $this->type = $type;
    }
}
class FavSports
{
    public $name;
    public $type;
    function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = new Sport($type);
    }
    function updateSports($type)
    {
        $this->type->setType($type);
    }
    function __clone()
    {
        $this->type = clone $this->type;
    }
}

$fc1 = new FavSports('Some Name', 'Cricket');
print_r($fc1);
$fc2 = clone $fc1;
print_r($fc2);

$fc2->updateSports('Football'); // Sport class and FevSports class er $type properties same tai clone object e chenge korle main object chenge hoye jasche so for solve this problem i have to use __clone() magic method
print_r($fc1);
print_r($fc2);
