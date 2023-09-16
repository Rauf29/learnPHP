<?php

class Dir
{
  private $directories = [];
  private $files = [];
  private $path;
  private $directoryObjects = [];

  function __construct($path)
  {
    if (is_readable($path)) {
      $this->path = $path;
      $entries = scandir($path);
      foreach ($entries as $entry) {
        if ("." !== $entry && ".." !== $entry) {
          if (is_dir($path . DIRECTORY_SEPARATOR . $entry)) {
            array_push($this->directories, $entry);
          } else {
            array_push($this->files, $entry);
          }
        }
      }
    }
  }
  function getDirectory($index)
  {
    if (isset($this->directories[$index])) {
      if (!isset($this->directoryObjects[$index])) // create new
      {
        $this->directoryObjects[$index] = new Dir($this->path . DIRECTORY_SEPARATOR . $this->directories[$index]);
      }
      return $this->directoryObjects[$index]; // using old object
    } else {
      return false;
    }
  }
  function getDirectories()
  {
    return $this->directories;
  }
  function getFiles()
  {
    return $this->files;
  }
}

$directory = new Dir(getcwd());
print_r($directory->getDirectories());
print_r($directory->getFiles());

$oop = $directory->getDirectory(5);
print_r($oop->getDirectories());
print_r($oop->getFiles());

$namespaces = $oop->getDirectory(1);
print_r($namespaces->getFiles());
