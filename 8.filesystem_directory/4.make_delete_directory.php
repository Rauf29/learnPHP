<?php
mkdir("Test", 0777, true); // make dir
file_put_contents("Test/file.txt", "Hello");
sleep(10);
//unlink("Test/file.txt"); // first delete file 
//rmdir("Test"); // remove dir but if directory have file then first delete file then delete dir

function deleteDir($path)
{
    $filesInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach ($filesInPath as $file) {
            if ("." != $file && ".." != $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                unlink($filePath);
            }
        }
    }
    rmdir($path);
}

deleteDir(getcwd() . DIRECTORY_SEPARATOR . "Test"); // here i give $path fully qualifide name.
