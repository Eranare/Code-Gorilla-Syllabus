<?php
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