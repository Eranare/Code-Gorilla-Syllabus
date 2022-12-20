<?php 
$title = 'Third Excercise';
include (__DIR__ ."/_header.php");
?>
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
<?php 
include (__DIR__ ."/_footer.php");
?>