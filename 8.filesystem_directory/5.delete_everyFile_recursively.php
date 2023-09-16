<?php
mkdir("Test/d1/d2/d3", 0777, true);
file_put_contents("Test/file.txt", "Hello");
file_put_contents("Test/d1/file.txt", "Hello");
file_put_contents("Test/d1/d2/file.txt", "Hello");
file_put_contents("Test/d1/d2/d3/file.txt", "Hello");
sleep(10);

function deleteDir($path)
{
    if (!is_readable($path)) {
        return;
    }
    $filesInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach ($filesInPath as $file) {
            if ("." != $file && ".." != $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    deleteDir($filePath);
                } else {
                    unlink($filePath);
                }
            }
        }
    }
    rmdir($path);
}

deleteDir(getcwd() . DIRECTORY_SEPARATOR . "Test");
