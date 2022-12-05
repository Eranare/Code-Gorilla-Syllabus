<?php


class RentBoat{

    public  $boatnmbr = 0;
    public  $weight = 0;
    public  $engine =0;
    public  $length = 0;
    public  $rentperhour = 0;
    public $departure = 0; //rent start time
    public $return = 0; //rent end time
    public $hour =0; //Hours
    public $rentincome = 0; //Income from rent per hour
    public $fuel= 0; //fuel used in liters
    public $fuelcharge = 0; //Fuel charge, 5 eu per liter
    public $randfincome = 0; //Total income from fuel and rent 
    public $fuelpermin=0; //Fuel divided triptime in mins

    public $damage = " "; //Damage to boat in string
    public static  $totalboats = 10;
    //Constructor
    
    public function __construct($nmbr, $wght, $eng, $lngt, $rph){
        $this->boatnmbr = $nmbr;
        $this->weight = $wght;
        $this->engine = $eng;
        $this->length = $lngt;
        $this->rentperhour = $rph;

    }

    //Methods
        //input
    public function addRentStart($departure){
        $this->departure =$departure;
        //echo $this->departure;
    }
    public function addRentEnd($return){
        $this->return = $return;
        //echo $this->return;
    }
    public function addFueluse($fuel){
        $this->fuel = $fuel;
    }
    public function addDamage($damage){
        $this->damage = $damage;
        //echo $this->damage;
        
    }
    public function getRentStart(){
        return $this->departure;
    }
    public function getRentEnd(){
        return $this->return;
    }
    public function getFuelUse(){
        return $this->fuel;
    }
        //Calculate
    public function getFuelCharge(){
        $fuelcharge = $this->fuel *5;
        return $fuelcharge;
    }
    public function getBoat(){
            return $this->boatnmbr;
    }
    public function getRentTime(){
        
        $this->hour = $this->return - $this->departure ;
          
        return $this->hour;
    }    
    public function getRev(){
        $this->fuelcharge=self::getFuelCharge();
        $this->randfincome = $this->rentperhour * $this->hour + $this->fuelcharge;
        return $this->randfincome;

    }
    public function getFuelPerMinute(){

        $this->fuelpermin = $this->fuel /(self::getRentTime()*60); 
        return $this->fuelpermin;
    }

    public function getDamage(){
    
        return $this->damage;
        
    }

    public function boat(){
       
        return $this->boatnmbr;

    }

     

}

?>
