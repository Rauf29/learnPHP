<?php
$dir = new DirectoryIterator("./");
foreach ($dir as $file) {
    if ($file->isDot()) {
        continue;
    }
    if ($file->isDir()) {
        echo $file->getPathname() . "\n";
    } else {
        echo $file->getPathname() . ":Size =>" . $file->getSize() . "\n";
    }
}

// https://www.php.net/manual/en/class.directoryiterator.php   read this page