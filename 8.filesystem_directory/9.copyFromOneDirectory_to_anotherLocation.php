<?php
function copyDir($source, $destination)
{
    $fileCount = 0;
    $directoryCount = 1; // 1 becouse main derectory to count hobe na tai 1 jate ai tau paoya jay
    $source = rtrim($source, "/");
    $destination = rtrim($destination, "/");

    if (!file_exists($destination)) {
        mkdir($destination);
    }

    foreach (scandir($source) as $file) {
        if ("." != $file && ".." != $file) {
            $sourcePath = $source . DIRECTORY_SEPARATOR . $file;
            $destinationPath = $destination . DIRECTORY_SEPARATOR . $file;

            if (is_dir($sourcePath)) {
                $result =  copyDir($sourcePath, $destinationPath);
                $fileCount += $result[0];
                $directoryCount += $result[1];
            } elseif (is_file($sourcePath)) {
                $fileCount++;
                copy($sourcePath, $destinationPath);
            }
        }
    }
    return array($fileCount, $directoryCount);
}

$source = getcwd() . DIRECTORY_SEPARATOR . "source/allFile";
$destination = getcwd() . DIRECTORY_SEPARATOR . "target/allFile";
$fc = copyDir($source, $destination);

echo "Total {$fc[0]} files and {$fc[1]} directories have been copied";
