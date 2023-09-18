<?php
class Chain
{
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string = $string;
        return $this;
    }

    function search($string)
    {
        $this->search = $string;
        return $this;
    }

    function replace($string)
    {
        if (!isset($this->search)) {
            throw new Exception("Nothing to replace");
        }
        $this->string = str_replace($this->search, $string, $this->string);
        return $this;
    }

    function  strToUpper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    function strToLower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    function print()
    {
        echo $this->string;
    }
}

$s = new Chain("Hello, I am Rauf. I am 24.");
$s->search("Hello")
    ->replace("Hi")
    ->search("24")
    ->replace(23)
    ->strToUpper()
    ->print();
