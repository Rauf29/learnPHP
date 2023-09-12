<?php

namespace CloudStorage;

include "autoloader.php";

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main
{
    function __construct()
    {
        $mailer = new Mailer;
        $mailer->sendMail();
        echo PHP_EOL;
        $scanner = new Scanner;
        $scanner->scan();
        echo PHP_EOL;
        $jpeg = new Jpeg;
        echo $jpeg->getDimension();
    }
}

new Main();
