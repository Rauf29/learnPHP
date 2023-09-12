    <?php
    //function

    // include_once "function.php";

    // $x = 12;
    // if (evenOrOdd($x)) {
    // echo "{$x} is even number";
    // } else {
    // echo "{$x} is odd number";
    // }

    // function factorial(int $n)
    // {
    // $result = 1;
    // for ($i = $n; $i > 1; $i--) {
    // $result *= $i;
    // }
    // return $result;
    // }

    // $x = 6;
    // echo "Factorial of {$x} is" . factorial($x);

    // function serve($food = "Tea", $numberOfItem = "1 cup")
    // {
    // echo "{$numberOfItem} if {$food} is served";
    // }

    // serve();

    // function sum(int $x, int $y, int $z): int
    // {
    // return $x + $y + $z;
    // }
    // echo sum(3, 4, 2);

    // **for pass unlimated paramitter
    // function sum(int ...$n): int
    // {
    // $result = 0;
    // for ($i = 0; $i < count($n); $i++) { 
    // $result +=$n[$i]; 
    // } 
    // return $result;
    // } 
    // echo sum(3, 5, 2, 6, 5, 7, 8, 5,);
    // always try to do large function into breake little function like 
    // function doTheLargeTask() 
    // { 
    // echo "Task A is done \n" ;
    // echo "Task B is done \n" ; 
    // echo "Task C is done \n" ;
    // echo "Task D is done \n" ; 
    // echo "Task E is done \n" ; 
    // } 
    // doTheLargeTask(); 
    // better way is 
    // function doTaskA()
    // { 
    // echo "Task A is done \n" ; 
    // } 
    // function doTaskB()
    // { 
    // echo "Task B is done \n" ;
    // } 
    // function doTaskC()
    // {
    // echo "Task C is done \n" ;
    // } 
    // function doTaskD()
    // { 
    // echo "Task D is done \n" ;
    // }
    // function doTaskE() 
    // { 
    // echo "Task E is done \n" ;
    // } 
    // function doLargeTask()
    // {
    // doTaskA(); 
    // doTaskB(); 
    // doTaskC(); 

    // doTaskD(); 
    // doTaskE();
    // } 
    // doLargeTask(); 
    // recartion function
    // function printN($n) 
    // { 
    // if ($n> 20) {
    // return;
    // }
    // echo "$n \n";
    // $n++;
    // printN($n);
    // }
    // echo printN(0);

    // function printNumber($count, $end)
    // {
    // if ($count > $end) {
    // return;
    // }
    // echo "$count \n";
    // $count += 5;
    // printNumber($count, $end);
    // }
    // echo printNumber(20, 50);

    // function factorial($n)
    // {
    // if ($n <= 1) { 
    // return 1; 
    // } 
    // return $n * factorial($n - 1); 
    // }
    // echo factorial(5);