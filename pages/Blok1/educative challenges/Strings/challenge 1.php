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
                            <li class="header_item"><a href = "../Loops/challenge 1.php" class ="header_link">loop 1</a></li> 
                            <li class="header_item"><a href = "../Loops/challenge 2.php" class ="header_link">loop 2</a></li>
                            <li class="header_item"><a href = "../Loops/challenge 3.php" class ="header_link">loop 3</a></li>
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
        <h1>Check SubString</h1>

<?php


function stringCheck($str1,$str2){
   // $str1 = "The quick brown fox jumps over the lazy dog.";
    if(strpos($str1,$str2) !== false){
        echo("1");
      }
      else{
        echo("0");
      }
}
stringCheck("The quick brown fox jumps over the lazy dog.", "jumps");
?>

    </content>
    <footer>
    </footer>
    
</body>