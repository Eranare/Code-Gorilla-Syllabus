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
                    <li class="header_item  dropdown"><a class="header_link">Module 2: Classes</a></li>    
                    <ul class="dropdown-content">    
                        <ul class="">Conditionals 
                            <li class="header_item"><a href = "excercise 1.php" class ="header_link">excercise 1</a></li>
                            <li class="header_item"><a href = "excercise 2.php" class ="header_link">excercise 2</a></li>
                            <li class="header_item"><a href = "notes.php" class ="header_link">notes</a></li>
                        </ul>
                        <ul class="">Exception Handling  
                            <li class="header_item"><a href = "exception notes.php" class ="header_link">Exception Handling notes</a></li> 
                        </ul>
                    </ul>
                </div>        
            </ul>
            
        </nav>
    </header>
    <content class="main">
    <h1>Classes</h1>
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

<ul style="list-style:none;">
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
<br>
<h4>$this and self</h4>
<br>

<p>"Use $this->member for accessing non-static members (methods and properties).<br>
Use self::$member for accessing static members (methods and properties)."</p>
<br>

<?php
//---------------------------------------------------------
//Taken from Educative
class Circle
{
    // properties
    public $radius= 0; //declaring public member
    public static $pi=3.14;  //declaring a public static member
    
    // Method to get the Circumference
    public function getCircumference(){
        return (2 * self::$pi * $this->radius );
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->radius * $this->radius*self::$pi);
    }
  
    // Method to get the diameter
    public function getDiameter(){
        return ($this->radius * 2);
    }
}

// Create a new Circle class object
$obj = new Circle;

 
// Set object properties values
$obj->radius = 4;

 
// Read the object properties values again to show the change
echo "Radius is ". $obj->radius . "<br>"; 
echo "Diamater is ". $obj->getDiameter() . "<br>"; 
 
 
// Call the object methods
echo "Circumference is ". $obj->getCircumference(),"<br>";
echo "Area is " .$obj->getArea()."<br>"; 
echo "Value of pi is " .$obj::$pi."<br>";
//----------------------------------------------------------------
?>

<h4>Constructors</h4> <br>

<?php
class Shape2
{

    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides. <br>";
    }

}

$myShape = new Shape2("hexagon", 6); //making an object and passing values to the constructor
$myShape->description(); // A shape with 6 sides

?>

<h4>Destructors</h4> <br>

<?php
class Shape3
{

    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }

    public function __destruct()
    { //destructor for Shape gets called at the end
        echo "Destructor Called!\n";
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides.\n";
    }

}

$myShape = new Shape3("hexagon", 6); //making an object and passing values to the constructor
$myShape->description(); // A shape with 6 sides

?>
<h4>Public</h4> <br>

<?php
class Car
{
    public $name = " ";

    public function display()
    {
        echo "Name: $this->name" . "\n";
    }

    public function __construct($name)
    {
        $this->name = $name;

    }
}

$obj1 = new Car("BMW"); //creating an object of car and setting its name as BMW
echo "Name: " . $obj1->name; //accessing the "name" property of obj1 directly outside of class
echo "<br>";

$obj2 = new Car("Mercedes"); //creating an object of car and setting its name as Mercedes
echo $obj2->display(); //accessing the "display" method of obj1 directly outside of class
echo "<br>";
?>

<h4>Private</h4> <br>
<?php
class CarPri
{
    public $name = " ";
    private $plateNumber;

    public function display()
    {
        echo "Name: $this->name" . "\n";
    }

    public function setPlateNumber($number)
    { //sets value of property plateNumber
        $this->plateNumber = $number;
    }

    public function getPlateNumber()
    { //returns the property "plateNumber"
        return $this->plateNumber;
    }

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->plateNumber = $number;

    }
}

$obj1 = new CarPri("BMW", 68775); //making a car object with values of name and platenumber set
echo $obj1->display(); //displaying name of car
echo "Plate number: " . $obj1->getPlateNumber(); //accessing plateNumber by calling getPlateNumber method
echo "<br>";
$obj1->setPlateNumber(47798); //changing PlateNumber value using setPlateNumber
echo "Plate number: " . $obj1->getPlateNumber(); //accessing plateNumber by calling getPlateNumber method
echo "<br>";

$obj2 = new CarPri("Mercedes", 89976);
//uncomment the line below and try running the code
//you will get an error as you cannot directly access a private member outside of the class it is declared in
//echo $obj2->plateNumber;

echo $obj2->display();
echo "Plate Number: ".$obj2->getPlateNumber();
?>

<h4>Protected</h4> <br>

<?php
class CarPro
{
    public $name = " ";
    protected $power = 2500;

    public function display()
    {
        echo "Name: $this->name" . "<br>";
        echo "Power: $this->power<br>"; // Power cant be accessed outside of the class
    }

    public function __construct($name)
    {
        $this->name = $name;

    }
}

$obj = new CarPro("Blue");
echo $obj->display();
//echo $obj->power; //comment out this line to prevent an error

?>
<h4>All 3 at once</h4>
<?php
 
class Test
{
	private $privateM=1;
	protected $protectedM=2;
	
	public function increase(Test $test)
	{
		$test-> privateM *= 10;
		$test-> protectedM *= 10;
	}
  
	public function __toString()
	{
		return "privateMember = ".$this->privateM.", protectedMember = ".$this->protectedM;
	}
};
 
$test1 = new Test();
$test2 = new Test();
echo "before test1: $test1 <br>";
 
//call $test2 method on another instance of the Test class - $test1
$test2->increase($test1); 
 
echo "after test1: $test1<br>";


?>
<h1>Inheritance</h1> <br>

<h4>Base and Derived class </h4> <br>
Using the Keyword "extends" the class Square becomes an extension of the class ShapeInh.


<br>
<?php
class ShapeInh
{ //base class
    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //base class constructor
        $this->sides = $sides;
        $this->name = $name;
    }

    public function description()
    {
        return "A $this->name with $this->sides sides.";
    }
}

class Square extends ShapeInh
{ //derived class inheriting from base class
    public $sideLength = 0;

    public function __construct($sideLength)
    {
        parent::__construct("square", 4); //calling parent class constructor
        $this->sideLength = $sideLength;
    }

    public function perimeter()
    {
        return $this->sides * $this->sideLength;
    }

    public function area()
    {
        return $this->sideLength * $this->sideLength;
    }
}

$mySquare = new Square(10);
$mySquare->description();
echo "Perimeter of the square is " . $mySquare->perimeter() . "<br>";
echo "Area of the square is ";
echo $mySquare->area();
?>

<br>


    </content>
    <footer>
    </footer>
    
</body>