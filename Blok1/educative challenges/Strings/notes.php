
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
                            <li class="header_item"><a href = "../functions/challenge 1.php" class ="header_link">functions 1</a></li> 
                            <li class="header_item"><a href = "../functions/challenge 2.php" class ="header_link">function 2</a></li>
                            <li class="header_item"><a href = "../functions/challenge 3.php" class ="header_link">function 3</a></li>
                            <li class="header_item"><a href = "../functions/notes.php" class ="header_link">notes</a></li>
                        </ul>
                        <ul class="">Strings 
                            <li class="header_item"><a href = "challenge 1.php" class ="header_link">strings 1</a></li>
                            <li class="header_item"><a href = "notes.php" class ="header_link">notes</a></li> 
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
        <h1>Interpolation</h1><br>
        Basic interpolation of variable in string and difference between using double quotes and single quotes<br>
        <h4>Double quotes</h4>
<?php
$name = 'Joel';
echo "Hello $name, Nice to see you."; // $name will be replaced with `Joel`
?>
        <br>
        <h4>Single quotes</h4><br>
<?php
$name = 'Joel';
echo 'Hello $name, Nice to see you.'; //does not interpret $name as Joel
?>

        <br>
        <h4>Enclosing variable in {} braces</h4><br>
<?php
$name = 'Joel';
// Example using the curly brace syntax for the variable $name
echo "We need more {$name}s to help us!\n";
?>

        <br>
        <h1>Substrings</h1>
        <br>
        <h4>Extracting a substring</h4>
<?php
$foo = 'Hello world';
echo $foo[6]; // returns 'w'
echo "<br>";
//echo $foo{6}; // also returns 'w'
//Depreciated
echo "<br>";
echo substr($foo, 6, 1); // also returns 'w'. 6 is the start 1 length
echo "<br>";
echo substr($foo, 6, 2); // returns 'wo'. 6 is the start, 2 length
echo "<br>";
echo substr($foo, 6, 5); // returns 'wo'. 6 is the start,5 length
?>
        <br>
        <h4>Finding position of a substring</h4><br>
        using strpos() to find string position. <br>
<?php
echo "The occurence of hay is at position: ".strpos("haystack", "hay")."<br>"; // int(0)
echo "The occurence of stack is at position: ".strpos("haystack", "stack")."<br>"; // int(3)
?>

        <h4>Replacing characters in a string  (substring):</h4><br>
        Multiple ways.<br>
        <?php
$foo = 'hello world';

$foo[6] = 'W'; // capitalizes the 'w' in 'hello world'
echo $foo;
echo "<br>";

/*$foo{0} = 'H'; // capitalizes the 'h' in 'hello world'  Depreciated
echo $foo;          
echo "\n";*/
echo ("To replace more than 1 character at once, substr_replace(\$varname, 'replacement string') must be used <br>");
$bar = substr_replace($foo, '!', 11, 1); // results in $bar = 'Hello World!'
echo $bar;
echo "<br>";

$bar = substr_replace($foo, 'Whi', 6, 2); // results in 'Hello Whirld'
// Note that the replacement string need not be the same length as the substring replaced
echo $bar;
echo "<br>";

?>
        
        <h4>Replacing the whole string</h4>
        <br>
        Using str_replace to replace the whole string with the target string:<br>
<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// replaces "facts" with "truth" and displays new string
echo str_replace("facts", "truth", $my_str);
?>
        <br>
        <br>the fourth arguement in str_replace can be used to count how many times the function has replaced a string:<br>
<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
 
// Display number of replacements performed
echo "The text was replaced $count times.";
?>
        <h4>Counting strings, multiple functions</h4><br>
        String length strlen():<br>
<?php
$my_str = 'Welcome to Educative!';
echo strlen($my_str);
?>
        <br>
        String word count: str_word_count()<br>
<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
echo str_word_count($my_str);
?>
        <br>
        <h4>Reversing again</h4>
        <?php
$my_str = 'You can do anything, but not everything.';
 
// Display reversed string
echo strrev($my_str);
?>        

</content>
    <footer>
    </footer>
    
</body>