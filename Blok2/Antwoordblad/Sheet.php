<head>
<link rel="stylesheet" href="../styles/style.css">


</head>
<body>

<a href="../index.php">Back</a><br>

<table>
    <tr>
<th>Name: </th><th>Rick de Lange </th>
</tr>
<tr><th>Group:</th><th> Bootcamp Najaar 2022</th>

</table>
<br>
<table>
    <tr>
        <th class="question">
1.1 What is OOP?
        </th>

        <th>
<p>
When writing flat php, you typically write from top to bottom, and will typically have to recreate entirely new variables. 
OOP allows you to use Objects as part of a Class instead of entirely new Variables.
OOP isn't a program type but rather a philosophy for how to program, a concept on how to build up code.
Because of how it is meant to be coded (programmer errors not withstanding) OOP style programs are faster and easier to execute compared to flat style programs.
The  structure of the program would be a lot clearer if the reader could see pinpoint objects to a class instead of having to keep track of many loose variables that hold other variables that are spread out all over within a code file.<br>
An Object can be passed any properties that are defined within the Class, but it can also still be given its own unique variable.
<code>
<?php
class melee {

    public $name ="";
    public $dtype="";
    public $damage = 0;
    public $speed = 0;
    public function __construct($na, $type, $dmg, $spd){
        $this->name= $na; 
        $this->dtype= $type;
        $this->damage= $dmg;
        $this->speed= $spd;
    }
    public function calcdps(){
        return ($this->damage/$this->speed);
    }

}

$weap1 = new melee("Sword", "Slashing", 15, 1.5);
echo ("<ul>Weapon name = ".$weap1->name."<br>");
echo ("Damage = ".$weap1->damage." ".$weap1->dtype." damage.<br>");
echo("Attack speed = ".$weap1->speed.".<br>");
echo("DPS = ".$weap1->calcdps().".<br></ul>");
?>
</code>
</p>

        </th>
    </tr>
    <tr>
        <th class="question">
1.2 Classes and Objects <br>
        </th>
        <th>

<p>An Object is an instance of the Class, with it's own unique properties defined within the Object based on the properties and methods the Class holds.
A simple example would be a character creator of a game, the character creator being the class, holding all the different variables that you can build a character, or the Object, out of.
Just like a character creator can create unlimited characters, with the uniqueness of the characters only being limited by the amount of customizeable options, 
so too can one create an unlimited amount of Objects from a single Class.
To build a Class in PHP, you'd start with defining it with the following Syntax: <br>
<code>
class CLASSNAME { <br>
    //Properties <br>
        $varname1 "varvalue";<br>
        $varname2 "varvalue";<br>
<br>
    //Methods <br>
        function set_var($varname1){<br>
            $this->varname1 = $varname1; // <-`$this` refers to the current object that is being created through the class code<br> 
        }
    //Both Properties and Methods can be set to either Public, Private or Protected. the differences between these will be elaborated on later in 1.4.<br> 
}</code><br>
<code>
<?php
class newClass {
    public $number;
}
class notClass{
    public $number;
}

$a = new newClass();
$a ->number=1;
?>
</code>
For the sake of easy differentation between a Class and its Objects, the variables within a Class are referred to as properties and its Functions Methods.<br>
To change a property from within the Class you would want to pass the Object variable through the Class function.
You could also change a property directly (from without the Class) by changing the objects variable.
But to change it from without is only possible if the properties or functions are public.
to check if a variable is an Object of a Class you can use the keyword instanceof<br>
<code>
<?php
echo ('$a is an Instance of newClass: ');
var_dump($a instanceof newClass);
echo ("<br>");
echo ('$a is an instance of notClass: ' );
var_dump($a instanceof notClass);
echo ("<br>");
echo ('$a\'s number is ');
echo ($a->number);
?>
</code></p>
<br>
        </th>
    </tr>
    <tr>
        <th class="question">
1.3 Constructor<br>
        </th>
        <th>
What is a Constructor, and what are its advantages.<br>
What is the basic Syntax of a constructor.<br>
<p>
A `__construct()` method allows one to build a new object with less code written.
By just putting the values of the variables in the brackets of the object declaration, the object will have those values attached to it based on the properties defined in the class and __constructor.
</P>
<br>

        </th>
    </tr>
    <tr>
        <th class="question">
1.4 Access Modifiers<br>
        </th>
        <th>
Both the Properties and Methods within a Class can have "Access modifiers" which may control where they can be accessed from.
There are 3 modifiers: <ul style=list-style:none;>
    <li>public: allows access to Property or Method from anywhere.</li>
    <li> protected: can only be accessed within the same class and by classes derived from that class. (1.5)</li> 
    <li>private: can only be accessed from within the class, so for example another method that isnt private but is within the same class can use or pass values by a method set to private. </li></ul><br>

Protective Modifiers are a way to protect access to parts of the code, website, app or project etc, from unintended behaviour, ranging from user input mistakes to illicit tempering by third parties
<br>
        </th>
    </tr>
    <tr>
        <th class="question">
1.5 Inheritance<br>
    </th>
    <th>
<p>
A Class can be derived from another existing class (subclass/childclass).<br>
The subclass will inherit all properties and methods existing within the parent class without having to redeclare but can also have it's own unique properties and methods.
<br><br><code>
<?php
//pummel being inherited from melee
class pummel extends melee{

    public function pmlthrow(){
       echo ("Pummel Throw with ".$this->name." deals ". $this->damage  *50 ." damage! <br>" );       
    }
}
$weap1Pml =new pummel("Sword", "Slashing", 15, 1.5);
$weap1Pml ->pmlthrow();

?>
</code>
<br>
To define an inherited Class you would use the <code>extends</code> keyword followed by your parentclass name.
You can override inherited methods by having the child class use their own constructor.
This allows the subClass to be more unqiue on it's own.
<code>
<?php
class pummel2 extends melee{
    public $thrDamage = 0;
    public function __construct($na, $type, $dmg, $spd, $thrwdmg){
        $this->name = $na;
        $this->dtype= $type;
        $this->damage= $dmg;
        $this->speed= $spd;
        $this->thrDamage = $thrwdmg;
       
    }
    public function msg (){
        echo ("Pummel Throw with ".$this->name." deals ". $this->thrDamage ." damage! <br>" );       
    }
}
$weap2Pml =new pummel2("Greatword", "Slashing", 45, 0.75,2000);
$weap2Pml ->msg();
?>
</code>
<code>final</code>ly the as an access modifier the keyword final can be used to prevent both inheritance and overriding. 
</p>
<br>
        </th>
    </tr>
    <tr>
        <th class="question">
1.6 Class Constants<br>
        </th>
        <th>
<p>
A Class Constant is pretty similar to Constant variables. they can not be changed at all.
A constant is declared with the keyword const, and while const are case sensitive, it is recommended to name constants in full uppercase letters,<br> for the sake of readability and consistency
It can not be changed or modified inside or outside the Class scope so it's uses may be niche.<br><br> To access a Class Constant from outside the class, one would use: <br>
<code>
className::CONST_NAME;
</code>
<br>
To access it from within, one would use: <br>
<code>
self::CONST_NAME;
</code>
<br>
</p>
<br>
        </th>
    </tr>
    <tr>
        <th class="question">
1.7 Static Methods<br>
        </th>
        <th>
Normal methods require an Object made in their class to call
Static Methods are callable without an Object.<br>
To write one: <code>Access_Modifier static Method()</code>.<br>
To call it: <code>Classname::Method();</code>
<br> 
<code>
<?php
class message{
    public static function msg(){
        echo ("'This echo is part of a method within a class but is printed without an Object'"); 
    }
} 
 message::msg();
?>
</code>

        </th>
    </tr>

    <tr>
        <th class="question">
1.8 Static Properties<br>
        </th>
        <th>
Normal Properties also require an Object to be used.<br>

To declare one: <code>Access_Modifier static $Propertyname= value; </code><br>
To call it within a Class: <code>self::$Propertyname;</code><br>
To call it without a Class: <code>Classname::$Propertyname;</code><br>
<br>
<code>
<?php
class statClass{
    public static $statProp = 'this string is part of $statProp';
    public static $statProp2 ='this string is part of $statprop2';
    public static function prnt124(){

    
    echo("Message from within the class". self::$statProp."<br>");
    }
}
statClass::prnt124();
echo ("Message from outside the class: ". statClass::$statProp2. "<br>");
?>
</code>
<br>
</th>
</tr>
</table>




</body>