<head>
    <title>challenge 2</title>
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
                            <li class="header_item"><a href = "challenge 1.php" class ="header_link">conditional statement 1</a></li>
                            <li class="header_item"><a href = "challenge 2.php" class ="header_link">conditional statement 2</a></li>
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
        <h1>Calculator</h1>
        <br>
        <br>
        <form action="" method="post">
            Insert Number 1: <input type="text" name="input_num1"/><br>
            Operator: <input type="text" name="input_Operator"/><br>
            Insert Number 2: <input type="text" name="input_num2"/><br><br>
            <input type="submit" name="submitButton" value="="></input> <br>
        </form>


output: 


<?php
$num1 = 5.5; //input_num1
$num2 =6.5; //input_num2
$Operator= "+"; //operator is  input_Operator
 //if $result != 0 num1 = $result

function calculate(){
    $result = 0;
    $msg = "";
    if(isset($_POST['submitButton'])) {
        $num1 = $_POST['input_num1']; //get input number 1
        $num2 = $_POST['input_num2']; //get input number 2
        $Operator = $_POST['input_Operator']; //get input Operator

            switch($Operator){ //all Operator cases
                case "+"  :{ 
                    $result = $num1 + $num2;
                    echo ($num1 .$Operator .$num2 ."=" .$result);
                    break;
                }
                case "-":{
                    $result = $num1 - $num2;
                    echo ($num1 .$Operator .$num2 ."=" .$result);
                    break;
                }    
                case "*":{
                    
                    $result = $num1 * $num2;
                    echo ($num1 .$Operator .$num2 ."=" .$result);
                    break;
                }    
                case "/":{

                    $result = $num1 /$num2;
                    echo ($num1 .$Operator .$num2 ."=" .$result);
                    break;
                }    
                default:{
                    echo "Enter valid operator";
                    break;
                }
            }
        
        
    }
    echo("<br>");
}
calculate();

?>
  
    </content>
    <footer>
    </footer>
    
</body>