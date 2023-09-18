<?php
interface School
{
    function  displayName();
}


class Student implements School
{

    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName()
    {
        echo "Hello From " . $this->name . "\n";
    }
}

class ImproveStudent implements School
{
    private $name;
    private $title;
    function __construct($title, $name)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName()
    {
        echo "Hello From {$this->title}. {$this->name}";
    }
}

// class StudentManager 
// {
//     function introfucesStudent($name)
//     { 
//         $st = new Student($name);
//         $st->displayName();
//     }
// }

class StudentManager
{
    function introfucesStudent(School $student)  // School $student ai vabe likhar karon holo hint dite dioya je ami shudhu School interface a class ke nibo onno kono kichu neoya jaban na.
    {
        $student->displayName();
    }
}


$student = new Student("Rauf");
$improveStudent = new ImproveStudent("Md", "Rauf");
$studentManager = new StudentManager;
$studentManager->introfucesStudent($student);
$studentManager->introfucesStudent($improveStudent);
