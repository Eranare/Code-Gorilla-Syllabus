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
        <h1>Sum of two Numbers</h1>
<br>
        More input stuff I guess:
<br>

<form action="" method="post">
            <input type="text" name="input_num1"/> +
            <input type="text" name="input_num2"/><br><br>
            <input type="submit" name="submitButton" value="="></input> <br>
        </form>

<?php



function sumof2(){
    if(isset($_POST['submitButton'])) {
        $num1 = $_POST['input_num1']; //get input number 1
        $num2 = $_POST['input_num2']; //get input number 2
        //$Operator = $_POST['input_Operator']; //get input Operator
        return $num1 + $num2;
    }
}
echo sumof2();
?>
    </content>
    <footer>
    </footer>
    
</body>