<?php

// class RGB
// {
//     private $color;
//     private $red;
//     private $green;
//     private $blue;

//     public function __construct($colorCode = '')
//     {
//         $this->color = ltrim($colorCode, '#');
//         $this->parseColor();
//     }
//     public function getColor()
//     {
//         return $this->color;
//     }
//     public function getRGBColor()
//     {
//         return array($this->red, $this->green, $this->blue);
//     }
//     public function readRGBColor()
//     {
//         echo "Red = {$this->red} \nGreen = {$this->green}\nBlue={$this->blue}";
//     }
//     public function setColor($colorCode)
//     {
//         $this->color = ltrim($colorCode, '#');
//         $this->parseColor();
//     }
//     private function parseColor()
//     {
//         if ($this->color) {
//             // $colors = sscanf($this->color, '%02x%02x%02x');
//             // print_r($colors);

//             list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x'); // %02x%02x%02x means 1st 2 ta songkha ke hex e convert and list means direct variable e valu assin kora
//         } else {
//             list($this->red, $this->green, $this->blue) = array(0, 0, 0);
//         }
//     }

//     public function getRed()
//     {
//         return $this->red;
//     }
//     public function getGreen()
//     {
//         return $this->green;
//     }
//     public function getBlue()
//     {
//         return $this->blue;
//     }
// }

// $myColor = new RGB('#ffef27');
// $myColor->readRGBColor();
