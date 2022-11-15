<?php


class rentBoat extends Boat{
    public $departure = 0;
    public $return = 0;
    public $hour =0;
    public $rentincome = 0;
    public $fuel= 0;
    public $fuelcharge = 0;
    public $randfincome = 0;
    public $boatnmbr = 0;
    public $damage = " ";
    public static  $totalboats = 10; 
    public function __construct($time1,$time2, $rev, $ltr, $dmg){
        $this->departure =$time1;
        $this->return = $time2;
        $this->hour = $time2- $time1;
        $this->rentincome = $rev;
        $this->fuel = $ltr;
        $this->fuelcharge = $ltr*5;
        $this->randfincome = $rev+$this->fuelcharge;
        $this->damage = $dmg;
    }
    public function rev(){
        echo("revenue = $this->randfincome €");
    }
    public function renttime(){
        echo("Renttime = $this->hour hours");

    }


     public  function totalIncome(){
        $totalinc =0;
        for ($i=0; $i<=self::$totalboats; $i++){
            $totalinc + $this->randfincome;

                }
               return $totalinc;
    }

}

?>
