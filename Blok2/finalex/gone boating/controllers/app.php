<?php
    
//Object building_________________________________
//Boat (Boatnumber, weight, engine horsepower, length in meters, Rent per hour, rent start time, rent end time, fuel used, sustainted damage)    
    $boat[0]  = new RentBoat(1, 3400, 250, 5.5, 10, 9.00, 18.00,  120, "None"); 
    $boat[1] = new RentBoat(2 , 3500, 275, 6, 10, 16.00, 17.00, 120, "None");
    $boat[2] = new RentBoat(3 , 3500, 275, 6, 10, 10.00, 11.00, 45, "dent"); 
    $boat[3] = new RentBoat(4 , 3500, 275, 6, 10, 9.00, 12.00, 35, "totaled"); 
    $boat[4] = new RentBoat(5 , 3500, 275, 6, 10, 7.00, 13.00, 75, "None"); 
    $boat[5] = new RentBoat(6 , 3500, 275, 6, 10, 8.00, 9.00, 80, "None"); 
    $boat[6] = new RentBoat(7 , 3500, 275, 6, 10, 11.00, 15.00, 70, "None");
    $boat[7] = new RentBoat(8 , 3500, 275, 6, 10, 8.00, 9.00, 5, "Engine blew up");
    $boat[8] = new RentBoat(9 , 3500, 275, 6, 10, 9.00, 14.00, 40, "None");
    $boat[9]  = new RentBoat(10 , 3500, 275, 6, 10, 13.00, 18.00, 45, "None"); 
        
//Loop vars______________________________________
    $totalincome = 0;
    $totalrenttime = 0;
    
    $boathighestfuel= 0;
    $fuelused = 0;
    $fuelpm = 0;
    
    $boatshortestrent =0;
    $timerented = 24;

    $percentboatsdmg = 0;
    $boatsdamaged = 0;
    $stringtocompare="None";

//Loop_________________________________________
foreach($boat as $aRentBoat =>$a){
    $totalincome+= $boat[$aRentBoat]->getRev(); //Add all Rentincomes
    $totalrenttime+= $boat[$aRentBoat]->getRentTime(); //Add all rent hours
    //If for fuel per minute
    if($fuelpm<= $boat[$aRentBoat]->getFuelPerMinute()) {
        $fuelpm =$boat[$aRentBoat]->getFuelPerMinute();
        $boathighestfuel= $boat[$aRentBoat]->boat(); //boatnumber
        $fuelused=$boat[$aRentBoat]->fuel;
    }
    

    //if for shortest rent duration
    if($timerented >=  $boat[$aRentBoat]->getRentTime())
    {
        $timerented = $boat[$aRentBoat]->getRentTime();
        $boatshortestrent= $boat[$aRentBoat]->boat(); //boatnumber

    } 
    if($stringtocompare != $boat[$aRentBoat]->getDamage()){
        $boatsdamaged +=1;
    }

}
$percentboatsdmg = $boatsdamaged/10 *100;
//outPut_______________________________________
    echo "<br>";
    echo "Total today income = $totalincome<br>";
    echo "Total Rent time in hours = $totalrenttime<br>";
    echo "Boat $boathighestfuel used the most amount of fuel per minute,<br> $fuelpm Liters per minute.<br>"; 
    echo "total fuel of Boat $boathighestfuel use was ".$fuelused."L.<br>";
    echo "percent of boats damage today : $percentboatsdmg% <br>" ;
    echo "Boat ".$boatshortestrent ." was rented for the shortest amount of time: $timerented hours<br>";


?>

<?php

?>