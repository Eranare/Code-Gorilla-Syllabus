<?php 
$title = 'Functions';
include (__DIR__ ."/_header.php");
?>

<?php
echo ("<h1>Functionality</h1><br>");

echo ("<h2>Ex 1<br></h2><br>");
echo ("<h3>Write a function to check whether a number is prime or not.</h3><br>");
//Range array that prints out only the primes
echo ("<h4>Primes for 1-100 method: </h4><br>". "Click button to print the prime numbers for 1-100<br>");
?>
<form action="" method="post">
<input type="submit" name="activateButton"/>
</form>
<?php
echo ("<br>");
/* redundant.
function onetohundred(){        
  for($i=1;$i<=100;$i++){  //numbers to be checked as prime
    $counter = 0; 
    for($j=1;$j<=$i;$j++){ //all divisible factors
        if($i % $j==0){ 

            $counter++;
          }
    }
        if($counter==2){
            print $i." is Prime <br/>"; //console print this
        }
    }
} 
*/
function buttonpressed(){
    if(isset($_POST['activateButton'])){
        for($i=1;$i<=100;$i++){  //numbers to be checked as prime
            $counter = 0; 
            for($j=1;$j<=$i;$j++){ //all divisible factors
                if($i % $j==0){ 
        
                    $counter++;
                  }
            }
                if($counter==2){
                    print $i." is Prime <br/>"; //console print this
                }
            }
        //onetohundred();
    }
}
buttonpressed();
//onetohundred();
//input, function to check if input is prime or not, print input+result;

echo("<h4>Insert number to check if its a prime number</h4>");
?>
<form action="" method="post">
Insert Number: <input type="number" name="inputNumber"/><br>

<input type="submit" name="submitButton"/>
</form>

<?php 

function manualInput(){
    $msg = "";
    if(isset($_POST['submitButton'])) {
        $input = $_POST['inputNumber']; //get input number
      //  for($i=1;$i<=100;$i++){  //numbers to be checked as prime
            $counter = 0; 
            for($j=1;$j<=$input;$j++){ //all divisible factors
                // switch case maybe to save time on bigger numbers, if counter <= 2 keep going with the loop, once the counter hits 3, exit the loop.
                if($input % $j==0){ 
        
                    $counter++;
                  }
            }
        
        
                if($counter==2){
                    $msg="the number that you have entered(".$input.") is a Prime number"; //if number is a prime
                }
                else{
                    $msg="the number that you have entered(".$input.") is NOT a Prime number"; //if number is not a prime    
                }
    }
    echo($msg."<br>");
}
manualInput();




//copy table image
function primesGraphic(){
    $maxrow=9;
    $maxcollumn=9;
    $l=0; //onetohundredvar
    echo ("<table width='800px' cellspacing='0px' cellpadding='0px'  >" ); //cells are awkwardly sized how to change this, do they have innate padding.. cellpadding didnt do it still awkward size
    for ($i=0; $i<=$maxrow;$i++){//rows
        echo ("<tr style='text-align: center;'>");

        for ($x=0;$x<=$maxcollumn; $x++){ //column
           // $total=$i+$x;
            $l++;
            $counter=0;
            for($j=1;$j<=$l;$j++){ //all divisible factors
                if($l % $j==0){ 
        
                    $counter++;
                  }
            }
                    if($counter==2){
                $color = "style= 'background-image: radial-gradient(circle, #35bd13, #89897f59, #00ff00); border: 1px green solid;'";
            }
            else{
                $color= "style='background-color:white; border: 1px black solid;'";
            }
            echo ("<td width=80px height=50px $color >$l</td>");
        }

        echo("</tr>");
    }

echo ("</table>");
    
    //echo("<h3>still under construction</h3>");
}
primesGraphic();
echo ("<h2>Ex 2<br></h2><br>");
echo ("<h3>Write a function to reverse a string.</h3><br>")
?>
<form action="" method="post">
String to reverse: <input type="text" name="inputString"/><br>

<input type="submit" name="submitString"/>
</form>

<?php 
function reversestring(){
    $msg = "";
    if(isset($_POST['submitString'])) {
        $input = $_POST['inputString']; //get input number
        $msg = strrev($input);
        echo($msg);
    }
}
reversestring();

echo ("<h2>Ex 3<br></h2><br>");
echo ("<h3>Write a PHP function that checks whether a string is all lowercase.</h3><br>");
?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<form action="" method="post">
String to check: <input type="text" name="inputlowercase"  pattern="[A-Za-z]{2,15}" /><br>

<input type="submit" name="submitlowercase"/>
</form>

<?php 
/*---------------------------------------------------------------- 
from php.net manual, ctype_lower() function
<?php
$strings = array('aac123', 'qiutoas', 'QASsdks');
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "The string $testcase consists of all lowercase letters.\n";
    } else {
        echo "The string $testcase does not consist of all lowercase letters.\n";
    }
}
?>
------------------------------------------------------------------*/
function lowercase(){
    
    if(isset($_POST['submitlowercase'])) {
        $input = $_POST['inputlowercase']; //get input number

        if(ctype_lower($input)) {
            echo ("the string ($input) consists of all lowercase letters.<br>");
        }
        else{
            $msg = ($input);
            echo("the string ($input) does not consist only lowercase characters<br>");
        }
    }
}

lowercase();
echo ("<h2>Ex 4<br></h2><br>");
echo ("<h3>Write a function to sort an array. </h3><br>");
?>

<?php
//goal is to Sort an array..
//what kind of array to sort i wonder and what order..  random numbers sorted numerically would be easiest

function arraySort(){
    $numArray = array(2,9,13,112,1,4,5);
    echo ("unsorted array: ");
    foreach ($numArray as $key => $val) {
        echo "i$key=$val ";
    }
    echo ("<br>");
    echo("sorted array: ");
    asort($numArray, SORT_NUMERIC);
    foreach ($numArray as $key => $val) {
        echo " $val\n";
    }
    //  echo("$sortedArray<br>");
}
arraySort();

echo ("<h2>Ex 5<br></h2><br>");
echo ("<h3>Write a PHP function that checks whether a person is eligible to vote.</h3><br>")
?>
<form action="" method="post">
enter name and age: <input type="text" name="inputName"  pattern="[A-Za-z]{2,15}" />
<input type="number" name="inputAge"/><br>

<input type="submit" name="submitNameAge"/>
</form>

<?php
function voteCheck(){
$input_name= "";
$input_age= 0;

    if(isset($_POST['submitNameAge'])) {
        $input_age =$_POST["inputAge"];
        $input_name = $_POST["inputName"];
        if($input_age <18){
            echo("$input_name, je bent niet oud genoeg om te stemmen.<br>");
            echo("De stem grens is 18 jaar");
        }
        if(($input_age >=18)&&($input_age <70)){
            echo("$input_name, je bent oud genoeg om te stemmen, drinken, roken en wat dan ook.<br>");
        }
        if($input_age >=70){
            echo("$input_name, gozer, dat hoef je toch allang niet meer te vragen en hoe kom je in godsnaam op mijn pagina, weet je kleinkind dat je op de computer zit te rommelen.<br>");
        }
    }
}
voteCheck();
?>
<?php 
include (__DIR__ ."/_footer.php");
?>