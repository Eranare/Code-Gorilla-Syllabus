<?php 
$title = 'First Excercise';
include (__DIR__ ."/_header.php");
?>
<h1>EX 1</h1>

<?php
class MyClass{

    static public function ini(){ 
        echo ("MyClass class has been initialized!<br>". "<canvas id='c'> </canvas>");
    }
    static public function ini0(){ 
        echo ("MyClass class has not been initialized!"
        
    );
    }
    
}

function button(){
if(isset($_POST['initButton'])) {
    MyClass::ini();
    
}
    else {
        MyClass::ini0();
    }
}
button();
?>
<form action="" method="post">
<input type="submit" name="initButton" value="Hit dat init"/>
</form>
<br>
<br>

The exercise did ask for this message to pop up automatically i suppose:<br><code>
<?php
class init1 {
    private $msg = "init1 has been initiliazed";
    public function msg(){
    echo ($this->msg);
    }
}
$initmsg = new init1();
$initmsg ->msg();
?>
</code>


    <script>

var c = document.getElementById("c");
var ctx = c.getContext("2d");

//making the canvas full screen
c.height = window.innerHeight/4;
c.width = window.innerWidth/4;

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
function getRandomColor() {

  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
function draw()
{
	//Black BG for the canvas
	//translucent BG to show trail
	ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
	ctx.fillRect(0, 0, c.width, c.height);

	ctx.fillStyle = getRandomColor(); //green text
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
<?php 
include (__DIR__ ."/_footer.php");
?>
