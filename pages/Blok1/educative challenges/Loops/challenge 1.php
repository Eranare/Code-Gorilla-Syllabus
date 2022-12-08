<head>
    <title>challenge 1</title>
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
                            <li class="header_item"><a href = "challenge 1.php" class ="header_link">loop 1</a></li> 
                            <li class="header_item"><a href = "challenge 2.php" class ="header_link">loop 2</a></li>
                            <li class="header_item"><a href = "challenge 3.php" class ="header_link">loop 3</a></li>
                        </ul>
                        <ul class="">Functions 
                            <li class="header_item"><a href = "../functions/challenge 1.php" class ="header_link">functions 1</a></li> 
                            <li class="header_item"><a href = "../functions/challenge 2.php" class ="header_link">function 2</a></li>
                            <li class="header_item"><a href = "../functions/challenge 3.php" class ="header_link">function 3</a></li>
                            <li class="header_item"><a href = "../functions/notes.php" class ="header_link">notes</a></li>
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
        <h1>Multiplication Table</h1>
        <br>
        <br>
        <form action="" method="post">
            Insert Number to multiply: <input type="text" name="input_num1"/>
        <!--    by <input type="text" name="input_num2"/>-->
            <input type="submit" name="submitButton" ></input> <br>
        </form>
<!--
//input number for multiplication table up to 10

function multiply1to10() {
    for (let x = 1; x<=10; x++){
        for (let i = 1; i<=10; i++){
        multiplytable1to10 += [i] + "*"+ [x]+ "="+  [i] *x + " \n" ;
        }
        multiplytable1to10 += "\n";
    }    
} -->
<?php

$num1 = 0; //input_num1
$num2 =0; //input_num2 should be number of multiplications 

 //if $result != 0 num1 = $result

function calculate(){
    $result = 0;
    
    if(isset($_POST['submitButton'])) {
        $num1 = $_POST['input_num1']; //get input number 1
    
        $i= 1;
        while($i<=10){
            $result = $num1 * $i;
            echo ($num1 ."*".  $i ."=" .$result. "<br>");
            $i++;         
        }

        
        
    }
    echo("<br>");
}
calculate();
/*

        /*
        for ($i=1 ; $i<=10; $i++){
            for ( $j = 1; $j<=10; $j++){
   
            //echo ("multiplytable1to10 += [$j] + "*"+ [$i]+  +  [$i] *x + $result  <br>");
            }
            
        } */   


?>

    </content>
    <footer>
    </footer>
    
</body>