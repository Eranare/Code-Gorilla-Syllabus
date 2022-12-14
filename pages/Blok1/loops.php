<?php 
$title = 'Loops';
include (__DIR__ ."/_header.php");
?>

<?php
echo ("<h1>Thrown for a Loop<br></h1>");
echo ("<br>");
echo ("<h2>Ex 1<br></h2>");
echo ("<h3>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.: </h3>");
function array1to10(){
    echo ("<h4>array 1-2... -8-9-10 etc:</h4> <br>");
    $onetoten = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    for ($i=0; $i< count($onetoten); $i++ )
    {
        if ($i<=0|| $i>=10){
        echo ($onetoten[$i]);
        }
        else { 
        echo ("-" . $onetoten[$i]);
        }
    }
    //range is blijkbaar ook een optie
    echo ("<br><h4>array met range: </h4><br>");
    $onetoten2 = range(1,10,1);
    for ($i=0; $i< count($onetoten); $i++ )
    {
        if ($i<=0|| $i>=10){
        echo ($onetoten2[$i]);
        }
        else { 
        echo ("-" . $onetoten2[$i]);
        }
    }
    echo "<br>";
}
array1to10();
//opdracht2
echo ("<h2>Ex 2<br></h2>");
echo ("<h3>Create a script using a for loop to add all the integers between 0 and 30 and display the total. </h3><br>");
function arraysum1to30(){
    echo("<h4>summing up within an array:</h4><br>");
    $onetothirty = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
    $sum = 0;
    for ($i=0; $i< count($onetothirty); $i++)
    {
        $sum += $onetothirty[$i];
        //echo ($sum . "<br>"); //dit werkt dus niet in de loop
        }
    echo ($sum);
//range versie
    echo ("<br><h4>summing up within an array but now using range: </h4><br>");
    $onetothirtyrange = range (1, 30, 1);
    $sum2 =0;
    for($i=0; $i< count($onetothirtyrange); $i++){
        $sum2 = $sum2 + $onetothirty[$i];
        }
    echo ($sum2);
    echo ("<br><h4>using array_sum():</h4><br>");
    echo array_sum($onetothirtyrange);
}
arraysum1to30();
//opdracht3
echo ("<h2>Ex 3<br></h2>");
echo ("<h3>create a pattern of *s:</h3><br>");
/* //not nested
function stars1(){
    $string = "";    
    for ($i=0; $i<=4; $i++){
        $string .= "*";
        echo ($string . "<br>");
    }
}*/
//While my method above does work for function stars1(), I can't undo the Concatenation so this method is useless for 4. I also didn't use a nested loop in a rush.
//concept explained by Tomi, create the rows with main loop then the columns with the nested loop
function stars1(){
    $string = "";    // var to print
    for ($i=0; $i<=4; $i++){
        $string = "*"; //row builder
       for($x=0; $x<=$i; $x++){ 
        $string = "*";  //columns builder
        echo ($string );
        }    
        echo ( "<br>");
    }     
}    
echo ("<div class='stars'>");
stars1();
echo("</div>");
//opdracht4
echo ("<h2>Ex 4<br></h2>");
echo ("<h3>create another pattern of *s:</h3><br>");
/*
function stars2(){
    $string = "";    
    for ($i=0; $i<=9; $i++){
        $string = "*";
       for($x=0; $x<=$i; $x++){ 
        $string = "*";

        echo ($string );
        }   
        echo ( "<br>");
    }
     
    }
*/
function stars2(){
    $string = "";    
    for ($i=0; $i<=9; $i++){ //builds rows
        $string = "*";
        if ($i<=4){
            for($x=0; $x<=$i; $x++){ //builds columns
            $string = "*";    
            echo ($string );
            }
            echo ("<br>");
        }        
        else { //unbuilds the columns
        for($x=9; $x>=$i; $x--){ 
            $string = "*";    
            echo ($string );
            }
            echo ( "<br>");
        }          
    }    
}
echo ("<div class='stars'>");
stars2(); 
echo("</div>");
/* DONT RUN THIS INFINITE LOOP KEK
function stars2(){
    for ($i=0; $i<=4; $i++){
        if ($i=4){
            for ($i=4; $i>=0; $i--){
                //$string .= "*";        
            }
            
        }
        $string .= "*";
       echo ($string . "<br>");
   }
}
*/
/*
function stars2(){

}
*/ 
//what was I thinking for this one, I knew the nested loop would bounce between 3 and 4 indefinetely, I had hoped the main loop would overrule it somehow but that is simply not how nested loops work.

echo ("<h2>Ex 5<br></h2>");
echo ("<h3>make a chess board:</h3><br>");
// same as 3 and 4 but instead of * in the loop css code
/*echo ("<table width = 270px height = 270px  border=1>");

echo ("</table>") */
function chessboard() {
/*$i=0;
$x=0;*/

$maxrow=7;
$maxcollumn=7;
$color =  "style='background-color:black;'"; 

echo ("<table width='270px' cellspacing='0px' cellpadding='0px'>" ); //cells are awkwardly sized how to change this, do they have innate padding.. cellpadding didnt do it still awkward size
    for ($i=0; $i<=$maxrow;$i++){//rows
        echo ("<tr >");
        for ($x=0;$x<=$maxcollumn; $x++){ //column
            $total=$i+$x;
            if($total%2==0){
                $color = "style='background-color:black; border:1px black solid '";
            }
            else{
                $color= "style='background-color:white; border:1px black solid'";
            }
            echo ("<td width=30px height=30px $color> </td>");
        }

        echo("</tr>");
    }

echo ("</table>");

}
chessboard();
?>
<?php 
include (__DIR__ ."/_footer.php");
?>