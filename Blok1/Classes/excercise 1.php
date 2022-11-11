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
                        </ul>
                    </ul>
                </div>        
            </ul>
            
        </nav>
    </header>
    <content class="main">
    <h1>Classes excercise 1</h1> <br>

<?php
class Triangle {

    public $length=0;
    public $height=0;
    public function area(){return $this->length*$this->height/2;}
 };
//define your class here


// name your class Triangle
//name your function area

  

//This is a test function. Do not change it.  
function test($length, $height) {

  $answer=0;
  $obj = new Triangle;
  $obj->length= $length;
  $obj->height= $height;
  echo "Area: ".$obj->area();
  $answer = $obj->area();

  return $answer;
}
test(4,5);
?>
<?php 



?>  

    </content>
    <footer>
    </footer>
    
</body>