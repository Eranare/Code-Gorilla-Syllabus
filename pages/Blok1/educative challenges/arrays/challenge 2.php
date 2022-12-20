<head>
    <title>challenge 2</title>
    
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/style2.css">
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
                <li class="header_item  dropdown"><a class="header_link">Module 2</a></li>
                
                
                
                    
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
        
        <h1>The Matrix</h1> <br>
<?php
function printMat($n)
{
    $box = array();
    for ($i = 0;$i < $n;$i++)
    {

        for ($j = 0;$j < $n;$j++)
        {
            if ($i == $j)
            { // if row=column=> fill the matrix with 0
                $box[$i][$j] = 0;
            }
            else if ($i > $j)
            { // if row>columns=> fill matrix with -1
                $box[$i][$j] = - 1;
            }
            else
            { // if row<columns=> fill matrix with 1
                $box[$i][$j] = 1;
            }
        }
    }
    for ($i = 0;$i < $n;$i++)
    { // printing the array
        for ($j = 0;$j < $n;$j++)
        {
            echo $box[$i][$j] . " ";
        }
        echo ("<br>");
    }
}
echo ("<div class='stars3'>");
echo ("<br>"); 
printMat(3);
echo ("<br>"); 
printMat(4);
echo ("<br>"); 
printMat(5);
echo ("<br>"); 
printMat(6); 
echo ("</div>");
?>     
        
        
        
        <canvas id="c">
      
            
          
        </canvas>
          
    </content>
    <footer>
        nicked background from: https://gist.github.com/Techgokul/e434ea602bda6840d5ebf95c4be5ebeb
    </footer>

<!------------------------->
<script>

var c = document.getElementById("c");
var ctx = c.getContext("2d");

//making the canvas full screen
c.height = window.innerHeight;
c.width = window.innerWidth;

//english characters
var english = "1001010101110101010101010010101000101011101111010101010110101010101010101110000101";
//converting the string into an array of single characters
english = english.split("");

var font_size = 15;
var columns = c.width/font_size; //number of columns for the rain
//an array of drops - one per column
var drops = [];
//x below is the x coordinate
//1 = y co-ordinate of the drop(same for every drop initially)
for(var x = 0; x < columns; x++)
	drops[x] = 1; 

//drawing the characters
function draw()
{
	//Black BG for the canvas
	//translucent BG to show trail
	ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
	ctx.fillRect(0, 0, c.width, c.height);
	
	ctx.fillStyle = "#0F0"; //green text
	ctx.font = font_size + "px arial";
	//looping over drops
	for(var i = 0; i < drops.length; i++)
	{
		//a random chinese character to print
		var text = english[Math.floor(Math.random()*english.length)];
		//x = i*font_size, y = value of drops[i]*font_size
		ctx.fillText(text, i*font_size, drops[i]*font_size);
		
		//sending the drop back to the top randomly after it has crossed the screen
		//adding a randomness to the reset to make the drops scattered on the Y axis
		if(drops[i]*font_size > c.height && Math.random() > 0.975)
			drops[i] = 0;
		
		//incrementing Y coordinate
		drops[i]++;
	}
}

setInterval(draw, 33);
    </script>
<!--------------------------------------->
    
</body>