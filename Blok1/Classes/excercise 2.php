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
<h1>Classes excercise 2</h1> <br>


<?php 
class Student {
private $name= "";
private $mark1=0;
private $mark2=0;


    public function __construct($na, $ma1, $ma2)
    {    $this->name= $na;
        $this->mark1= $ma1;
        $this->mark2= $ma2;

        
    }
    public function getMarks($marknumber)
    {
        if ($marknumber ==1){
            return $this->mark1;
        }
        return $this->mark2; //return correct answer here
        
    }
    public function calcAverage()
    {//incase a grade is missing
        if( !is_numeric($this->mark1)||!is_numeric($this->mark2)){
            echo "grade missing.";
            return;
        }

        //write definition here
        return ($this->mark1+$this->mark2)/2;
        
    }
    //To output the private name
    public function getName()
    { 
        return $this->name;
    }
}


$stu1 = new Student("Bob",30,74);
{
echo "Name: ".$stu1->getName()."<br>";
echo "Mark 1: " .$stu1->getMarks(1)."<br>";
echo "Mark 2: ".$stu1->getMarks(2)."<br>";
echo $stu1->calcAverage()."<br>";
echo "Comment: Bob doing alright here. <br><br>";
}
//--------
//self practice
$stu2= new Student("Ethan", 100,99);
{
echo "Name: ".$stu2->getName()."<br>";    //gets private var name.
echo "Mark 1: ".$stu2->getMarks(1)."<br>";
echo "Mark 2: ".$stu2->getMarks(2)."<br>";
echo "Average: ".$stu2->calcAverage()."<br>";
echo"Comment: Look at this chad student.<br><br>";
}

$stu3= new Student("Rick", "NA",15);
{
echo "Name: ".$stu3->getName()."<br>";    
echo "Mark 1: ".$stu3->getMarks(1)."<br>";
echo "Mark 2: ".$stu3->getMarks(2)."<br>";
echo "Average: ".$stu3->calcAverage()."<br>"; //interestingly, The word Average gets printed out After the function call.
echo "Average: ";
echo $stu3->calcAverage()."<br>"; //splitting the echos fixes that
echo"Comment: Did this guy just skip the first exam.<br><br>";
}

//Maybe move the echos into the class?


?>

<br>
<h4>Attempt at doing the same but from an array</h4>
<?php 
class Student2 {
private $name= "";
private $mark1=0;
private $mark2=0;


    public function __construct($na, $ma1, $ma2)
    {    $this->name= $na;
        $this->mark1= $ma1;
        $this->mark2= $ma2;

        
    }
    public function getMarks($marknumber)
    {
        if ($marknumber ==1){
            return $this->mark1;
        }
        return $this->mark2; //return correct answer here
        
    }
    public function calcAverage()
    {//incase a grade is missing
        if( !is_numeric($this->mark1)||!is_numeric($this->mark2)){
            echo "grade missing.";
            return;
        }

        //write definition here
        return ($this->mark1+$this->mark2)/2;
        
    }
    //To output the private name
    public function getName()
    { 
        return $this->name;
    }
}
$arrayStudents=  [ 
    0 => [ 
    "Bob",
    30 ,
    74 
],
1 => [
    "Ethan", 
    100,
    99
    
],
2 => [
    "Rick", 
    "NA" ,
    15
    
]
];


$stu21 = new Student2 ($arrayStudents[0][0],$arrayStudents[0][1],$arrayStudents[0][2]);  
//$stu21 = new Student2("Bob",30,74);
{
echo "Name: ".$stu21->getName()."<br>";
echo "Mark 1: " .$stu21->getMarks(1)."<br>";
echo "Mark 2: ".$stu21->getMarks(2)."<br>";
echo $stu21->calcAverage()."<br>";
echo "Comment: Bob doing alright here. <br><br>";
}
//--------

$stu22 = new Student2 ($arrayStudents[1][0],$arrayStudents[1][1],$arrayStudents[1][2]);  
//$stu2= new Student2("Ethan", 100,99);
{
echo "Name: ".$stu22->getName()."<br>";    //gets private var name.
echo "Mark 1: ".$stu22->getMarks(1)."<br>";
echo "Mark 2: ".$stu22->getMarks(2)."<br>";
echo "Average: ".$stu22->calcAverage()."<br>";
echo"Comment: Look at this chad student.<br><br>";
}
$stu23 = new Student2 ($arrayStudents[2][0],$arrayStudents[2][1],$arrayStudents[2][2]);  
//$stu3= new Student2("Rick", "NA",15);
{
echo "Name: ".$stu23->getName()."<br>";    
echo "Mark 1: ".$stu23->getMarks(1)."<br>";
echo "Mark 2: ".$stu23->getMarks(2)."<br>";
//echo "Average: ".$stu23->calcAverage()."<br>"; //interestingly, The word Average gets printed out After the function call.
echo "Average: ";
echo $stu3->calcAverage()."<br>"; //splitting the echos fixes that
echo"Comment: Did this guy just skip the first exam.<br><br>";
}

?>
<br> array as object worked

    </content>
    <footer>
    </footer>
    
</body>