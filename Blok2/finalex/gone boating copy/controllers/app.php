<?php
    
//Object building_________________________________
//Boat (Boatnumber, weight, engine horsepower, length in meters, Rent per hour.

    $BoatRentCo = new BoatCo();
// add boats

    $boat1 = new RentBoat(1, 3400, 250, 5.5, 150); 
    $boat2 = new RentBoat(2 , 3500, 275, 6, 250);
    $boat3 = new RentBoat(3 , 3500, 275, 6, 95); 
    $boat4 = new RentBoat(4 , 3500, 275, 6, 125); 
    $boat5 = new RentBoat(5 , 3500, 275, 6, 75); 
    $boat6 = new RentBoat(6 , 3500, 275, 6, 60); 
    $boat7 = new RentBoat(7 , 3500, 275, 6, 120);
    $boat8 = new RentBoat(8 , 3500, 275, 6, 350);
    $boat9 = new RentBoat(9 , 3500, 275, 6, 275);
    $boat10  = new RentBoat(10 , 3500, 275, 6, 225);


//add parts per boat____________________________________
//boat 1
$boat1->addRentStart(9.00); //Rent Start time
$boat1->addRentEnd(18.00); //Rent End time
$boat1->addFueluse(120);  //Fuel used
$boat1->addDamage("None"); //Damage sustained
$boat1->getRentTime(); //Difference between start and end time
//boat 2
$boat2->addRentStart(16.00);
$boat2->addRentEnd(17.00);
$boat2->addFuelUse(120);
$boat2->addDamage("None");
$boat2->getRentTime(); 
//boat 3
$boat3->addRentStart(10.00);
$boat3->addRentEnd(11.00);
$boat3->addFuelUse(45);
$boat3->addDamage("Dent");
$boat3->getRentTime();
//boat 4
$boat4->addRentStart(9.00);
$boat4->addRentEnd(12.00);
$boat4->addFuelUse(35);
$boat4->addDamage("Totaled");
$boat4->getRentTime();
//boat 5
$boat5->addRentStart(7.00);
$boat5->addRentEnd(13.00);
$boat5->addFuelUse(75);
$boat5->addDamage("None");
$boat5->getRentTime();
//boat 6
$boat6->addRentStart(8.00);
$boat6->addRentEnd(9.00);
$boat6->addFuelUse(80);
$boat6->addDamage("None");
$boat6->getRentTime();
//boat 7
$boat7->addRentStart(11.00);
$boat7->addRentEnd(15.00);
$boat7->addFuelUse(70);
$boat7->addDamage("None");
$boat7->getRentTime();
//boat 8
$boat8->addRentStart(8.00);
$boat8->addRentEnd(9.00);
$boat8->addFuelUse(5);
$boat8->addDamage("Engine blew up");
$boat8->getRentTime();
//boat 9
$boat9->addRentStart(9.00);
$boat9->addRentEnd(14.00);
$boat9->addFuelUse(40);
$boat9->addDamage("None");
$boat9->getRentTime();
//boat 10
$boat10->addRentStart(13.00);
$boat10->addRentEnd(18.00);
$boat10->addFuelUse(45);
$boat10->addDamage("None");
$boat10->getRentTime();
//rented boats added to BoatRentCo
$BoatRentCo->addBoat($boat1);
$BoatRentCo->addBoat($boat2);
$BoatRentCo->addBoat($boat3);
$BoatRentCo->addBoat($boat4);
$BoatRentCo->addBoat($boat5);
$BoatRentCo->addBoat($boat6);
$BoatRentCo->addBoat($boat7);
$BoatRentCo->addBoat($boat8);
$BoatRentCo->addBoat($boat9);
$BoatRentCo->addBoat($boat10);

//outPut_______________________________________
  //  echo "Boat data";
  //  $BoatRentCo->boatData();

    echo ($BoatRentCo->totalRevenue());
    echo ($BoatRentCo->totalRentTime());
    echo ($BoatRentCo->boatNumberHighestFuel());
    echo ($BoatRentCo->dmgPercent());
    echo ($BoatRentCo->shortestRent());
    

?>

<?php

?>