<?php
    // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.
    /*
    $example = new Example();
    $example->addSomething("data!");
    $example->doSomething();
    $example->showSomething();
    //Array of boats?
*/
    
    
    $boat1  = new rentBoat(13.00, 15.00, 800, 50, "none");
    $boat1->renttime();
    //$boat1->fueluse(50);
    $boat1->rev();
    //$boat1->totalrev(50);
    echo "Total income of today =". rentBoat::totalIncome();
/*
   // $boat2 = new rentBoat();
    $boat2->renttime();
    $boat2->fueluse();
    $boat2->rev();
    $boat2->totalrev(50);
    
    $boat3;
    $boat4;
    $boat5;
    $boat6;
    $boat7;
    $boat8;
    $boat9;
    $boat10;
    */
    
  //  echo ("Total income of rent for today: ".rentboat::totalrev($rent));
?>

<?php

/* 
    Boat 1 classifications: 
        Weight 3,600 kg
        HP: 
        Length:
        Boatnumber:
        Rent per hour: 
        Rent per liter gas: 5eu 
    boat 1 rent classifications: 
        Start time rent:
        End time rent: 
        Used fuel:
        Damage:



        */

?>