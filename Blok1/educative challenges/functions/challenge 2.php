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
                <li class="header_item  dropdown"><a class="header_link">Educative</a></li>
                
                
                
                    
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
        <h1>Letter Grade to GPA</h1>
        <form action="" method="post">
            <input type="text" name="input_GradeA" maxlength="2"/> 
            <input type="submit" name="submitButton" value="="></input> <br>
        </form>

<?php



function Gradeconverter(){
    if(isset($_POST['submitButton'])) {
        $num1 = $_POST['input_GradeA']; 
        if (is_numeric($num1) ){
            echo("Please input a letter grade to convert, numerical grades are not supported yet.");
            return;
        }
        elseif (!is_numeric($num1)){
            switch($num1){
                case "A+":{
                    echo 4;
                    break;
                }
                case "A":{
                    echo 4;
                    break;
                }
                case "A-":{
                    echo 3.7;
                    break;
                }
                case "B+":{
                    echo 3;
                    break;
                }
                case "B":{
                    echo 2.8;
                    break;
                }
                case "B-":{
                    echo 2.8;
                    break;
                }                    
                case "C+":{
                    echo 2.5;
                    break;
                }
                case "C":{
                    echo 2;
                    break;
                }
                case "C-":{
                    echo 1.8;
                    break;
                }
                case "D":{
                    echo 1.5;
                    break;
                }
                case "F":{
                    echo 0;
                    break;
                }
                default:{
                    echo("-1<br> Please enter valid grade");
                    break;
                }
            }
        }                        
    }
}

echo Gradeconverter();
?>
    </content>
    <footer>
    </footer>
    
</body>