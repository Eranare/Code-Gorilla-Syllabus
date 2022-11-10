<head>
    <title>Classes</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header class="header">
    
        <nav class="header_nav header_container" id="navbar">
            <uL class="header_list">
                <li  class="header_item active" ><a href = "../Index.php" class="header_link">Main Page </a></li>
                <li class="header_item"><a href = "../loops.php" class="header_link">Loops </a></li>
                <li class="header_item"><a href = "../functions.php" class="header_link">Functions </a></li>
                <li class="header_item"><a href = "../arrays.php" class="header_link">Arrays </a></li>
                <div class="header_item dropdown">
                    <li class="header_item  dropdown"><a class="header_link">Classes</a></li>    
                    <ul class="dropdown-content">    
                        <ul class="">Conditionals 
                            <li class="header_item"><a href = "excercise 1.php" class ="header_link">excercise 1</a></li>
                            <li class="header_item"><a href = "excercise 2.php" class ="header_link">excercise 2</a></li>
                            <li class="header_item"><a href = "notes.php" class ="header_link">notes</a></li>
                        </ul>
                        <ul class="">Exception Handling  
                            <li class="header_item"><a href = "exception notes.php" class ="header_link">Exception Handling notes</a></li> 
                            <li class="header_item"><a href = "educative challenges/loops/challenge 2.php" class ="header_link">loop 2</a></li>
                            <li class="header_item"><a href = "educative challenges/loops/challenge 3.php" class ="header_link">loop 3</a></li>
                        </ul>
                    </ul>
                </div>        
            </ul>
            
        </nav>
    </header>
    <content class="main">
    <h1>Classes Notes</h1>
<br>
<h4>Defining Shapes</h4>
<br>
<?php 

class Shape{
    public $sides = 0; // first property
    public $name= " "; // second property 
    
    public function description(){ //first method
      echo "<li>A $this->name with $this->sides sides.</li>";
    }
  }
?>
Class gets defined above here in the php code. <br>
the class includes an echo line with the class name and amount of sides that get called and defined in the functions below <br>
Echo'd lines:<br>

<ul>
<?php
function printTriangle(){
  $myShape1 = new Shape; //creating an object called myShape1
  $myShape1->sides = 3; //setting the "sides" property to 3
  $myShape1->name = "triangle"; //setting the "name" property to triangle
  $myShape1->description(); //"A triangle with 3 sides"
  echo "<br>";
}
printTriangle();
function printSquare(){
$myShape2 = new Shape; 
$myShape2->sides = 4; //setting the "sides" property to 4
$myShape2->name = "square"; //setting the "name" property to square
$myShape2->description(); //"A square with 4 sides"
echo "<br>";
}
printSquare();

function printHexagon(){
$myShape3 = new Shape;
$myShape3->sides = 6; //setting the "sides" property to 6
$myShape3->name = "hexagon"; //setting the "name" property to hexagon
$myShape3->description(); //"A hexagon with 6 sides"
echo "<br>";
}
printHexagon();

?>  
</ul>

    </content>
    <footer>
    </footer>
    
</body>