<?php

class FavColor
{
    public $data;
    function __construct($data)
    {
        $this->data = $data;
    }
    function setData($data)
    {
        $this->data = $data;
    }

    function __toString() // here i have to say ami ki echo kirte cahi.
    {
        return "The color is {$this->data}";
    }
}

$fc = new FavColor('Black');
echo $fc;
