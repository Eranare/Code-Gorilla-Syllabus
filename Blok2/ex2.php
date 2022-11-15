<?php
//php class which displays a message with a $variable


?>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="header">
    
        <nav class="header_nav header_container" id="navbar">
            <uL class="header_list">
                <li  class="header_item active" ><a href = "index.php" class="header_link">Main </a></li>
                <li  class="header_item" ><a href = "ex1.php" class="header_link">Ex1 </a></li>
                <li class="header_item"><a href = "ex2.php" class="header_link">Ex2 </a></li>
                <li class="header_item"><a href = "ex3.php" class="header_link">Ex3 </a></li>
                <li class="header_item"><a href = "#" class="header_link">... </a></li>
                
            </ul>
        </nav>
    </header>
    <content class="main">
<h1>EX 2</h1>
  
<br>
<code>With Static function:</code>
<form action="" method="post">
            <input type="text" name="input" maxlength="15" placeholder="Insert Name"/> 
            <input type="submit" name="submitButton" value=""></input>
</form>
<?php 

$name = "";

if(isset($_POST['submitButton'])) {
    $name = $_POST['input'];
    varname::ini($name);
}

class varname{

        static public function ini($name){ 
            echo ("<code>With Static function:</code> Hello All, I am $name. <br>");
        }

}

class varname2 {
    public $msgname= "";
    public function __construct($name2){
        $this->msgname = $name2;
    }
    public function msg(){
        echo ("<code>With an Object created from Input:</code>Hi my name is ".$this->msgname.".<br>");
    } 
}
if(isset($_POST['submitButton'])) {
$name2 = new varname2($_POST['input']);
$name2 ->msg();
}
?>

    </content>
    <footer>
    <uL class="header_list">
                <li  class="header_item active" ><a href = "../Blok1/index.php" class="header_link">Blok 1 </a></li>
                <li class="header_item"><a href = "../Blok2/index.php" class="header_link">Blok 2</a></li>
                <li class="header_item"><a href = "../Blok3/index.php" class="header_link">Blok 3</a></li>
                <li class="header_item"><a href = "../Blok4/index.php" class="header_link">Blok 4 </a></li>
                
            </ul>
    </footer>
    
</body>