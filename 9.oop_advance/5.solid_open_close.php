<?php
// open and close that means ekta class likhe pore sei code e hat deoya jabe na no modifiction so open for extention and close for no modifecation.
/*
class FileDisplay {
    function display($file,$fileType) {
        if ('mp4' == $fileType) {
            // display video
        }elseif('mp3' == $fileType) {
            // display audio
        }else {
            //display text file
        }
    }
    // eikhane jodi ami kono kichu add korte chai tahole amake abar main class e hat dite hobe but this is bad practice
}
*/
// eikhane amke ekta ta class ke abar modifi kora lagche na;
class FileDisplay
{
    function display(FileInterface $file)
    {
        $file->display();
    }
}

interface FileInterface
{
    function display();
}

class ImageFile implements FileInterface
{
    function display()
    {
        // do code for display image;
    }
}
class VideoFile implements FileInterface
{
    function display()
    {
        // do code for display video;
    }
}
class TextFile implements FileInterface
{
    function display()
    {
        // do code for display text;
    }
}

$image  = new ImageFile("abcd.jpg");
$video  = new ImageFile("abcd.mp4");
$text  = new ImageFile("abcd.txt");
$fileDisplay = new FileDisplay();
$fileDisplay->display($image);
$fileDisplay->display($video);
$fileDisplay->display($text);
