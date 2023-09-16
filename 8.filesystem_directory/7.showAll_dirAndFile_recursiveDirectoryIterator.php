<?php
$size = 0;
$rdir = new RecursiveDirectoryIterator(getcwd(), RecursiveDirectoryIterator::SKIP_DOTS);

$files = new RecursiveIteratorIterator($rdir); // if i use RecursiveDirectoryIterator then i hava to pass $rdir in RecursiveIteratorIterator()

foreach ($files as $file) {
    if ($file->isFile()) {
        $size += $file->getSize();
    }
    if ($file->getFileName() == "2.construct.php") {
        echo $file->getPath() . DIRECTORY_SEPARATOR . $file->getFileName() . "\n";
    }
    //echo $file->getPath() . DIRECTORY_SEPARATOR . $file->getFileName() . "\n";
}

echo "Directory Size $size Bytes";
