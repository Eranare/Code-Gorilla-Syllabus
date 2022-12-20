<?php


class RentBoat {

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
    
    public function __construct($nmbr, $wght, $eng, $lngt, $rph, $time1,$time2, $ltr, $dmg){
        $this->boatnmbr = $nmbr;
        $this->weight = $wght;
        $this->engine = $eng;
        $this->length = $lngt;
        $this->rentperhour = $rph;
        $this->departure =$time1;
        $this->return = $time2;
        $this->hour = $time2- $time1;
        $this->fuel = $ltr;
        $this->fuelcharge = $ltr*5;
        $this->damage = $dmg;
    }

    //Methods
        //input
        public function getBoat(){
            return $this->boatnmbr;
        }
        public function getRentTime(){
    
            return $this->hour;
        }    
    public function getRev(){
    
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
    /*
        //TEST Print
     public function outputlist(){

        echo ("
        <ul class='text'>
            <li>Total revenue is ". $this->hour*Boat::$rentperhour."</li>
            <li>Total rent time across all boats is ". self::total_Time() ."hours</li>
            <li>Boat NUMBER used the highest amount of fuel per minute, total use FUELUSE</li>
            <li>Percentage of boats that took damage: </li>
            <li>Boat NUMBER was rented for the shortest duration: TIME</li>
        <ul>");
    }
    */

     

}

?>
