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
    <h1>Exception Handling notes</h1>
<h4>Negative time</h4>
<?php 


function distance($speed, $time){
    
    if($time <= 0){
        throw new Exception('Time cannot be zero or negative.'); // Throw exception if time is negative
    } else{
        
        $d = $speed*$time;
        echo "$speed * $time = $d";
    }
}
 
try{
    distance(10,2);
    distance(30,-4); //code will stop execution at this point (due to negative time) and start finding the catch block
    distance(15,3);
    
    echo 'All calculations done!'; // If an exception is thrown, this line will not execute
  } 

// catch block is executed when an exception is thrown in the try block
// an object $e of Exception class is created
catch(Exception $e){     
    
    echo "<br>". "Caught exception: " . $e->getMessage(); //Exception handling  
}

echo "<br>"."Hello World!<br>"; // Continue execution


?>  
<h4>divide by 0</h4>
<?php
function division($a, $b){
    
    if($b ==0){
        throw new Exception('Divisor is zero'); // Throw exception if divisor is zero
    } else{
        
        $c = $a/$b;
        echo "$a / $b = $c";
    }
}
 
try{
    division(10, 2);
    division(15, 0);
    division(30, -4);
   
    
    echo 'All calculations done!';// If an exception is thrown, this line will not execute
  }

  catch(Exception $c){
    echo "<br>"."caught exception: ".$c->getMessage();
  }
// write your catch statement here //That was easy.

echo "<br>"."Hello World!"; // Continue execution
?>
<h4>Custom exception handlers </h4>
<?php
  class DecelerationException extends Exception{} //DecelerationException inherits Exception
  class TimeException extends Exception{} //TimeException inherits Exception

function acceleration($finalSpeed,$initialSpeed,$time){

  if($time <= 0){
    throw new TimeException('Time cannot be negative or zero.<br>'); // Throw exception if time is negative or zero
  } 
  if($initialSpeed > $finalSpeed){
    throw new DecelerationException('It is deceleration.<br>'); // Throw exception if initial speed is greater than final speed
  } 
  else{
    $a = ($finalSpeed-$initialSpeed)/$time;
    echo "($finalSpeed-$initialSpeed)/$time = $a";
  }
}

try{
  acceleration(20,10, 2);
  //acceleration(15,20, 5); //$initialSpeed>$finalSpeed
  acceleration(30,10, -4); //code will stop execution at this point and start finding the catch block
  acceleration(15,20, 5); //$initialSpeed>$finalSpeed

  echo 'All calculations done!';// If an exception is thrown, this line will not execute
} 
//Catch has to be inmediately behind try, like If - else
catch(DecelerationException $e){

  echo "<br>". "Caught deceleration exception: " . $e->getMessage(); //Exception handling  
}
catch(TimeException $e){

  echo "<br>". "Caught time exception: " . $e->getMessage(); //Exception handling  
}
echo "<br>swapped around:<br> <br>";
try{
    acceleration(20,10, 2);
    acceleration(15,20, 5); //$initialSpeed>$finalSpeed
    acceleration(30,10, -4); //code will stop execution at this point and start finding the catch block
    
  
    echo 'All calculations done!';// If an exception is thrown, this line will not execute
  }
  catch(DecelerationException $e){

    echo "<br>". "Caught deceleration exception: " . $e->getMessage(); //Exception handling
    return;  
  }
  catch(TimeException $e){
  
    echo "<br>". "Caught time exception: " . $e->getMessage(); //Exception handling  
    return;
  }


  echo "<br>"."Hello World!"; // Continue execution


?>


    </content>
    <footer>
    </footer>
    
</body>