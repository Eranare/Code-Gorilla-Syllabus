<?php 
$title = 'Second Excercise';
include (__DIR__ ."/_header.php");
?>
<h1>EX 2</h1>
  
<br>
Input name: <br>
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
<?php 
include (__DIR__ ."/_footer.php");
?>