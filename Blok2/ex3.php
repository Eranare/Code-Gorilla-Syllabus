<?php
//Make calculator..<head>

?>
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
<h1>EX 3</h1>

<?php

class MyCalculator{
    public $num1 =0;
    public $num2 =0;
    public $num3 =0;
    public function __construct($nm1, $nm2){
        $this->num1 = $nm1;
        $this->num2 =$nm2;
        $this->add();
        $this-> subtract();
        $this->multiply();
        $this->divide();
    }

public function add(){
    $this->num3 = $this->num1 + $this->num2;
    echo ("$this->num1 + $this->num2 = $this->num3 <br>");
    
    
}
public function subtract(){
    $this->num3 = $this->num1 - $this->num2;
    echo ("$this->num1 - $this->num2 = $this->num3 <br>");
    
}
public function multiply(){
    $this->num3 = $this->num1 * $this->num2;
    echo ("$this->num1 * $this->num2 = $this->num3 <br>");
    
}
public function divide(){
    $this->num3 = $this->num1 / $this->num2;
    echo ("$this->num1 / $this->num2 = $this->num3 <br>");
    
}

}


$mycalc = new MyCalculator( 12, 6);

echo "<br>";
$mycalc2 = new MyCalculator (123,23);
echo"<br>";


//maybe make a calc?
?>
<br>
custom calc: input 2 numbers
<form action="" method="post">
            <input type="text" name="input_num1"/> &
            <input type="text" name="input_num2"/><br><br>
            <input type="submit" name="submitButton" value="="></input> <br>
        </form>

<?php
$num1 = 0;
$num2 = 0;        
function customcalc(){
    if(isset($_POST['submitButton'])) {
        $num1 = $_POST['input_num1']; //get input number 1
        $num2 = $_POST['input_num2']; //get input number 2
        $mycalc3= new MyCalculator($num1, $num2); 
       // return $num1 + $num2;
    }
}

 
customcalc();
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
