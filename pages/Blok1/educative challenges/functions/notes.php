

<head>
    <title>Index</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <header class="header">
        <nav class="header_nav" id="navbar">
            <uL class="header_list">
                <li  class="header_item active" ><a href = "../../Index.php" class="header_link">Main Page </a></li>
                <li class="header_item"><a href = "../../loops.php" class="header_link">Loops </a></li>
                <li class="header_item"><a href = "../../functions.php" class="header_link">Functions </a></li>
                <li class="header_item"><a href = "../arrays.php" class="header_link">Arrays </a></li>
                <div class="header_item dropdown">
                <li class="header_item  dropdown"><a class="header_link">Module 2</a></li>
                
                
                
                    
                    <ul class="dropdown-content">    
                        <ul class="">Conditionals 
                            <li class="header_item"><a href = "../conditional statements/challenge 1.php" class ="header_link">conditional statement 1</a></li>
                            <li class="header_item"><a href = "../conditional statements/challenge 2.php" class ="header_link">conditional statement 2</a></li>
                        </ul>
                        <ul class="">Loops  
                            <li class="header_item"><a href = "../loops/challenge 1.php" class ="header_link">loop 1</a></li> 
                            <li class="header_item"><a href = "../loops/challenge 2.php" class ="header_link">loop 2</a></li>
                            <li class="header_item"><a href = "../loops/challenge 3.php" class ="header_link">loop 3</a></li>
                        </ul>
                        <ul class="">Functions 
                            <li class="header_item"><a href = "challenge 1.php" class ="header_link">functions 1</a></li> 
                            <li class="header_item"><a href = "challenge 2.php" class ="header_link">function 2</a></li>
                            <li class="header_item"><a href = "challenge 3.php" class ="header_link">function 3</a></li>
                            <li class="header_item"><a href = "notes.php" class ="header_link">notes</a></li>
                        </ul>
                        <ul class="">Strings 
                            <li class="header_item"><a href = "../strings/challenge 1.php" class ="header_link">strings 1</a></li>
                            <li class="header_item"><a href = "../strings/notes.php" class ="header_link">notes</a></li> 
                        </ul>
                        <ul class="">Arrays 
                            <li class="header_item"><a href = "../arrays/challenge 1.php" class ="header_link">Array 1</a></li>
                            <li class="header_item"><a href = "../arrays/challenge 2.php" class ="header_link">Array 2</a></li>
                            <li class="header_item"><a href = "../arrays/notes.php" class ="header_link">Notes</a></li> 
                        </ul>
                    </ul>
                </div>    
            </ul>

        </nav>
    </header>
    <content class="main">
<?php
echo ("<h1>Pass by Value method:</h1><br><br>");

//Pass by value method, new for me
//-------------------------------
function cube($num1)
{ //num1 parameter passed by value here
    return $num1 * $num1 * $num1; //cube of num1 returned
    
}

$answer = cube(3); //function cube called with 3 passed as the argument
// $num1 parameter value  becomes 3 arguement
echo $answer;
echo "<br>";
?>

<?php

//this doesnt actually swap the values around because num1 and num2 are copied into the function, the originals remain and get printed
function swap($arg1, $arg2)
{ //parameters num1 and num2 passed using pass by value method
    $temp = $arg2; //creating a variable temp and setting equal to arg2
    $arg2 = $arg1; //setting the value of arg2 equal to arg1
    $arg1 = $temp; //setting the value of arg1 equal to temp which is equal to arg2
    
}

$num1 = 4;
$num2 = 5;

// Have a careful look at this function call
swap($num1, $num2);
echo("The intent of the function on these lines was to swap the numbers around but as the function uses mere copies of the variables the swapped values dont exist outside the function<br>");
echo "num1 is: $num1. ";
echo "num2 is: $num2.";
echo "<br>";
?>

<?php
echo("Here i added global vars as a quickfix to make the numbers swapping work, first 2 values are original, last 2 are mine<br>");
$ans1=0;
$ans2=0;
function swap2($arg1, $arg2)
//this form of conversion would work for this method but id personally have changed it 
{ //parameters num1 and num2 passed using pass by value method
    $temp = $arg2; //creating a variable temp and setting equal to arg2
    $arg2 = $arg1; //setting the value of arg2 equal to arg1
    $arg1 = $temp; //setting the value of arg1 equal to temp which is equal to arg2
    global$ans1;
    $ans1  = $arg1;
    global$ans2; 
    $ans2= $arg2;

}

$num1 = 4;
$num2 = 5;

// Have a careful look at this function call
swap2($num1, $num2);
echo "num1 is: $num1. ";
echo "num2 is: $num2.";
echo ("<br>");
echo "num1 is: $ans1. "; //Gives a warning tho
echo "num2 is: $ans2.";
echo "<br>";
?>

<?php
echo("<h1>Pass by Reference method:</h1>");
//Pass by reference
echo("This kind of functioncalling is just as unfamiliar to me, javascript seems to use it alot in the educative course as well. <br>");
function swap3(&$arg1, &$arg2) //This & passes the actual variable instead of a copy of its value
{ //parameters num1 and num2 passed using pass by reference method
    $temp = $arg2; //creating a variable temp and setting equal to arg2
    $arg2 = $arg1; //setting the value of arg2 equal to arg1
    $arg1 = $temp; //setting the value of arg1 equal to temp which is equal to arg2
}

$num1 = 4;
$num2 = 5;

// Calling the function with arguments num1 and num2
swap3($num1, $num2);
echo "num1 is: $num1\n";
echo "num2 is: $num2";

echo ("<br><br><h1>Additonal Notes: </h1><br><br>");
echo ("Scopes are pretty normal, only for global scoped variables to be used inside a function, they must first be accessed in the function as \$global \$varname;<br>
In a sense its just redeclaring.<br><br>
");

?>
<?php
echo ("Ngl the following bit of code is weird to me. the function has a string value that, because it gets echod with parameters, behaves as a function call and adds the value coming from the sum in the function to the \$var making the functioncall. 
<br> seems a bit obtuse <br>");
function sum($x, $y)
{
    return $x + $y;
}
$funcName = 'sum';
echo "$funcName = ".$funcName(2, 4); // outputs 6;
?>

<h1>Recursion</h1><br> 
Recursive in a function is a function that calls itself during execution.. or something, example below:<br>

<br>All these math things, the below function is calculating the factorial of the inputted number
<br>Function is called with 4 in arguement.
<br>If the variable is 1 or -, returns 1.
<br>Could easily change this into an input field.


<?php
function factorial($n)
{
    if ($n == 1 || $n == 0)
    { //base case
        return 1;
    }
    else
    {
        return $n * factorial($n - 1); //function calls itself
        
    }
}

echo factorial(4); //calling the function with 4 as the argument
?>

<h1>Factorial of input(max 170):</h1>
        <form action="" method="post">
            <input type="text" name="input_GradeA" maxlength="3" placeholder="170"/> 
            <input type="submit" name="submitButton" value="="></input> <br>
        </form>
<?php

function  Factorialisation($n){


    if (is_numeric($n) ){
    
        if ($n == 1 || $n == 0)
        { //base case
            return 1;
        }
        else
        {
            return $n * factorial($n - 1); //function calls itself    
            
        }
    }
}
function Setup(){
    if(isset($_POST['submitButton'])) {
        $getInput= $_POST['input_GradeA']; 
        echo Factorialisation($getInput);
    }
}
Setup();
?>
    </content>
    <footer>
    </footer>
    
</body>