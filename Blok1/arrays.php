<head>
    <title>Arrays</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="header">
        <nav class="header_nav" id="navbar">
            <uL class="header_list">
                <li  class="header_item active" ><a href = "Index.php" class="header_link">Main Page </a></li>
                <li class="header_item"><a href = "loops.php" class="header_link">Loops </a></li>
                <li class="header_item"><a href = "functions.php" class="header_link">Functions </a></li>
                <li class="header_item"><a href = "arrays.php" class="header_link">Arrays </a></li>
                <div class="header_item dropdown">
                <li class="header_item  dropdown"><a class="header_link">Educative</a></li>
                
                
                
                    
                    <ul class="dropdown-content">    
                        <ul class="">Conditionals 
                            <li class="header_item"><a href = "educative challenges/conditional statements/challenge 1.php" class ="header_link">conditional statement 1</a></li>
                            <li class="header_item"><a href = "educative challenges/conditional statements/challenge 2.php" class ="header_link">conditional statement 2</a></li>
                        </ul>
                        <ul class="">Loops  
                            <li class="header_item"><a href = "educative challenges/loops/challenge 1.php" class ="header_link">loop 1</a></li> 
                            <li class="header_item"><a href = "educative challenges/loops/challenge 2.php" class ="header_link">loop 2</a></li>
                            <li class="header_item"><a href = "educative challenges/loops/challenge 3.php" class ="header_link">loop 3</a></li>
                        </ul>
                        <ul class="">Functions 
                            <li class="header_item"><a href = "educative challenges/functions/challenge 1.php" class ="header_link">functions 1</a></li> 
                            <li class="header_item"><a href = "educative challenges/functions/challenge 2.php" class ="header_link">function 2</a></li>
                            <li class="header_item"><a href = "educative challenges/functions/challenge 3.php" class ="header_link">function 3</a></li>
                            <li class="header_item"><a href = "educative challenges/functions/notes.php" class ="header_link">notes</a></li>
                        </ul>
                        <ul class="">Strings 
                            <li class="header_item"><a href = "educative challenges/strings/challenge 1.php" class ="header_link">strings 1</a></li>
                            <li class="header_item"><a href = "educative challenges/strings/notes.php" class ="header_link">notes</a></li> 
                        </ul>
                        <ul class="">Arrays 
                            <li class="header_item"><a href = "educative challenges/arrays/challenge 1.php" class ="header_link">Array 1</a></li>
                            <li class="header_item"><a href = "educative challenges/arrays/challenge 2.php" class ="header_link">Array 2</a></li>
                            <li class="header_item"><a href = "educative challenges/arrays/notes.php" class ="header_link">Notes</a></li> 
                        </ul>
                    </ul>
                </div>    
            </ul>

        </nav>
    </header>
    <content class="main">
<?php
echo ("<h1>Arrays</h1><br>");

echo ("<h2>Ex 1<br></h2><br>");
function nixonthing(){
$color = array('white', 'green', 'red', 'blue', 'black');
echo ("The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]." carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. Aroo.<br> ");
echo ("<br><img src='img/aroo.jpg' alt='Nixon' width='20%' height= '65%' style ='box-shadow: 0px 5px 20px 20px;'> <br>");
echo ("<br>- Richard M. Nixon");
}
nixonthing();

echo ("<h2>Ex 2<br></h2><br>");

function arraylist(){
    $color = array('white', 'green', 'red');
    echo("<ul style='list-style-type:disc' class='colorlist';><li>$color[1]</li><li>$color[2]</li><li>$color[0]</li></ul>");
}
arraylist();
//--------------
echo ("<h2>Ex 3<br></h2><br>");
function countrycity(){
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

        //print unsorted
        echo ("<div class='citycontainer'><ul style='list-style-type:none' class='city left'>Unsorted array: ");
        foreach ($ceu as $key => $val) {
            echo "<li class='citything'> The capital of $key is $val</li>";
        }
        echo ("</ul><br>");
        //funny looking arrow for shits and giggles.
        echo ("<div class='arrow'> <svg >
        <defs>
          <marker id='head' orient='right'
            markerWidth='3' markerHeight='4'
            refX='0.1' refY='2'>
            <path d='M0,0 V4 L2,2 Z' fill='black'/>
          </marker>
        </defs>
    
        <path
          id='arrow-line'
          marker-end='url(#head)'
          stroke-width='4'
          fill='none' stroke='black'  
          d='M0,135, 120 120,120'
          />
    
        </svg></div>");
        //end arrow svg
        echo(" <ul style='list-style-type:none' class='city right'>Sorted array:");
        asort($ceu); //sort and print
        foreach ($ceu as $key => $val) {
            echo "<li class='citything'> The capital of $key is $val</li>";
        }
        echo("</ul></div></br>");
        //  echo("$sortedArray<br>");
    }
countrycity();
echo ("<h2>Ex 4<br></h2><br>");
function temparray(){
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
$avg =0 ;
$sum = 0;
//sum up all temps in array.
    for ($i=0; $i< count($temp); $i++){
        $sum += $temp[$i];
    }
    $avg = $sum / count($temp);
//print average.
echo("The average temp over the total is $avg. <br>");
//sort descending.
$andtoinsert= " &";
arsort($temp);
//print highest.
$temphiray = array_slice($temp, 0, 5);
$temphistring="";
    foreach ($temphiray as $val) {
        $temphistring .= $val ;
        $temphistring .=  ", ";
    }
$newshitempstr =substr_replace($temphistring, $andtoinsert, -6, 1) ;
echo ("The five highest temps were: " . substr($newshitempstr, 0, -2).".<br>");
//sort other way around.
asort($temp);
$temploray = array_slice($temp, 0, 5);
//print lowest.
$templostring = "";
    foreach ($temploray as $val) {
        $templostring .= $val ;
        $templostring .=  ", ";
    }

$newslowtempstr = substr_replace($templostring, $andtoinsert, -6, 1);
echo ("The five lowest temps were: " . substr($newslowtempstr, 0, -2).".<br>");
}
echo("<br>");
temparray();

//----------
echo ("<h2>Ex 5<br></h2><br>");


function weeklytemps(){

    //weeklyTemps is array, days is key? town 
    $weeklyTemps = [
    "Monday" => [ 
        "Groningen" => 25,
        "Assen" => 12,
           "Emmen" => 19
    ],
    "Tuesday" => [ 
        "Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
    "Wednesday" => [ 
        "Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
    ];
    
        foreach($weeklyTemps as $key => $value){ //loop through weeklytemps days. should only loop 3 times then, works
        echo("The highest temp on ");
        echo $key; //echos day? works
    
      $temp =0;
      $place = "";
      //this second loop instead of array sort is what did the trick
        foreach ($value as $key => $value) {
            if ($value>$temp){
            $temp=$value;  
            $place=$key;  
            }
        }
        echo (" was ");
        //print temp here
        echo($temp); //works now
        echo (" degrees in "); 
        //print town here 
        echo($place);//works now
        echo (".<br>");
        }
    }
    weeklytemps();
?>
    </content>
    <footer>
    </footer>
</body>
