<head>
    <title>Array shenanigans</title>
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
                <li class="header_item  dropdown"><a class="header_link">Educative</a></li>
                
                
                
                    
                    <ul class="dropdown-content">    
                        <ul class="">Conditionals 
                            <li class="header_item"><a href = "../conditional statements/challenge 1.php" class ="header_link">conditional statement 1</a></li>
                            <li class="header_item"><a href = "../conditional statements/challenge 2.php" class ="header_link">conditional statement 2</a></li>
                        </ul>
                        <ul class="">Loops  
                            <li class="header_item"><a href = "../loops/challenge 1.php" class ="header_link">loop 1</a></li> 
                            <li class="header_item"><a href = "../loops/challenge 2.php" class ="header_link">loop 2</a></li>
                            <li class="header_item"><a href = "../loops/challenge 3.php" class ="header_link">loop 3</a></li>
                        </ul>
                        <ul class="">Functions 
                            <li class="header_item"><a href = "../functions/challenge 1.php" class ="header_link">functions 1</a></li> 
                            <li class="header_item"><a href = "../functions/challenge 2.php" class ="header_link">function 2</a></li>
                            <li class="header_item"><a href = "../functions/challenge 3.php" class ="header_link">function 3</a></li>
                            <li class="header_item"><a href = "../functions/notes.php" class ="header_link">notes</a></li>
                        </ul>
                        <ul class="">Strings 
                            <li class="header_item"><a href = "../strings/challenge 1.php" class ="header_link">strings 1</a></li>
                            <li class="header_item"><a href = "../strings/notes.php" class ="header_link">notes</a></li> 
                        </ul>
                        <ul class="">Arrays 
                            <li class="header_item"><a href = "challenge 1.php" class ="header_link">Array 1</a></li>
                            <li class="header_item"><a href = "challenge 2.php" class ="header_link">Array 2</a></li>
                            <li class="header_item"><a href = "notes.php" class ="header_link">Notes</a></li> 
                        </ul>
                    </ul>
                </div>    
            </ul>

        </nav>
    </header>

    <content class="main">
        <h1>Arrays</h1><br>
        <h4>printing arrays</h4><br>
        print_r$arrayname will print it out like this: <br>
<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
print_r($fruits);
?>
        <br><br>
        var_dump i know all too well now:<br>
<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
var_dump($fruits);
?>        

        <br>
        <br>using echo will just print out the data type, or in this case an error, remove quotes in the echo to view:<br>
<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
echo ('$fruits');
?>
        <br>
        <br>
        <h4>counting length:</h4><br>
<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
echo "Length of \$fruits is ".count($fruits);
?>
        <br>
        <h1>Multidimensional Arrays</h1>
        <br>
        <h4>Familiar feeling</h4>
        An Array within an Array: <br>
<?php
$check=array("elephant", array("honey", "sad", 5)); 
print_r($check);
?>
        <br>
        ow look, more dimensions<br>
<?php
$comparisonAdjectives1 = array(
    array(
        "good",
        "better",
        "best"
    ) ,
    array(
        "bad",
        "worse",
        "worst"
    ) ,
    array(
        "tall",
        "taller",
        "tallest"
    ),
    array(
        "did somebody say",
        "THUNDERFURY",
        "BLESSED",
        "BLADE",
        "OF",
        "THE",
        "WINDSEEKER"
    )
);
print_r($comparisonAdjectives1);
?>
        <br>
        A different way of declaring the same array:<br>
        <?php
$comparisonAdjectives[0][0] = "good";
$comparisonAdjectives[0][1] = "better";
$comparisonAdjectives[0][2] = "best";
$comparisonAdjectives[1][0] = "bad";
$comparisonAdjectives[1][1] = "worse";
$comparisonAdjectives[1][2] = "worst";
$comparisonAdjectives[2][0] = "tall";
$comparisonAdjectives[2][1] = "taller";
$comparisonAdjectives[2][2] = "tallest";
$comparisonAdjectives[3][0] = "did somebody say";
$comparisonAdjectives[3][1] = "THUNDERFURY";
$comparisonAdjectives[3][2] = "BLESSED";
$comparisonAdjectives[3][3] = "BLADE";
$comparisonAdjectives[3][4] = "OF";
$comparisonAdjectives[3][5] = "THE";
$comparisonAdjectives[3][6] = "WINDSEEKER";


print_r($comparisonAdjectives);
?>
        <br>
        <br>
        <h4>Accessing specific values of an array</h4><br>
<?php
        echo ($comparisonAdjectives[3][1]."<br>");
?>
        <br>
        <h4>Indexed Array of associative(names as index) Arrays</h4>
        <br>
        selecting the array:<br>
        
        <form action="" method="post">Currency of 
        <select name ="country">
         <!--   //<option value ="empty">Select Country</option>-->

            <option value="0">Germany</option>
            <option value="1">Switzerland</option>
            <option value="2">England</option>
        </select>
        <input type="submit" name="submitButton" value="="></input> <br>
        </form>
        <?php

// Define a multidimensional array
$economy = array(
    array(
        "country" => "Germany",
        "currency" => "Euro",
    ),
    array(
        "country" => "Switzerland",
        "currency" => "Swiss Franc",
    ),
    array(
        "country" => "England",
        "currency" => "Pound",
    )
);

//echo "Currency of ".$economy[0]["country"]." is: " . $economy[0]["currency"]; // Access array at [0] index
if(isset($_POST['country'])) {
    if($_POST == 'empty'){
        return;
    }
    if($_POST != "empty"){
        $countrykey=($_POST['country']);
        echo "Currency of ".$economy[$countrykey]["country"]." is: " . $economy[$countrykey]["currency"]; // Access array at [0] index
    }
    //echo "selected size: ".htmlspecialchars($_POST['size']);
}
  
?>

    </content>
    <footer>
    </footer>
    
</body>