<?php 
    class BoatCo{
        private $boats;
        function __construct(){
        $this->boats=[];
        }
        public function addBoat($boat){
            array_push($this->boats, $boat);
        }
        public function boatData (){
            foreach($this->boats as $boat){
                echo "<br>";
                echo "boatnmbr " . $boat->boatnmbr;
                echo " Revenue is ". $boat->getRev();
                echo " Rent Start time is " . $boat->getRentStart();
                echo " Rent end Time is " . $boat->getRentEnd();
                echo " Damage sustained is " . $boat->getDamage();
                echo " Fuel used is ".$boat->getFuelUse();
            }
        }
        //public    
        public    $totalrenttime = 0;
            
        public    $boathighestfuel= 0;
        public    $fuelused = 0;
        public    $fuelpm = 0;
            
        public    $boatshortestrent =0;
        public    $timerented = 24;
        
        public     $percentboatsdmg = 0;
        public    $boatsdamaged = 0;
        public     $stringtocompare="None";

        public function getBoatHighestFuel()
        {
            foreach ($this->boats as $boat) {
                
                if ($this->fuelpm <= $boat->getFuelPerMinute()) {
                    $this->fuelpm = $boat->getFuelPerMinute();
                    $this->boathighestfuel = $boat->boat(); //boatnumber
                    $this->fuelused = $boat->fuel;
                }

            }
        }

        //Calculations
        public function getTotalRevenue(){
            $totalIncome = 0;
            foreach ($this->boats as $boat) {
                $totalIncome += $boat->getRev();
            }
            return $totalIncome;
        }   
        public function getTotalRentTime(){
            $totalHours = 0;
            foreach ($this->boats as $boat) {
            
                $totalHours += $boat->getRentTime();
            }
            return $totalHours;
        }   
//----------------------------------------------------------------------
        public function getPercentDamaged(){
            $percentboatsdmg = 0;
            $boatsdamaged = 0;
            $stringtocompare= "None";
            
            foreach ($this->boats as $boat) {
                //looped once then gave up. found out why below

                if ($stringtocompare != $boat->getDamage()) {
                    $boatsdamaged += 1;
                }
                /* this obviously didnt work, returned inside the loop
                $percentboatsdmg = $boatsdamaged/10 *100;
            
                return $percentboatsdmg; */
            }
            $percentboatsdmg = $boatsdamaged/10 *100;
            
            return $percentboatsdmg;
        }
//----------------------------------------------------------------------
        public function getShortestRent(){
            $this->boatshortestrent =0;
            $this->timerented = 24;
        
            foreach ($this->boats as $boat) {

                if ($this->timerented >= $boat->getRentTime()) {
                    $this->timerented = $boat->getRentTime();
                    $this->boatshortestrent = $boat->boat(); 
                }
            }
        }


        //Echos
        public function totalRevenue(){
        $totalRev = $this->getTotalRevenue();
            echo "<br>Total Revenue = $totalRev";
        }
        public function totalRentTime(){
            $totalRentTime = $this->getTotalRentTime();
            echo "<br>Total Rent time in hours = $totalRentTime";
        }

        public function boatNumberHighestFuel(){
            $this->getBoatHighestFuel();
            echo "<br>Boat " .$this->boathighestfuel. " used the most fuel per minute,<br>".$this->fuelpm. " Liters per minute.<br>"; 
            echo "Total fuel used by Boat ".$this->boathighestfuel ." is ". $this->fuelused." Liters.";
        }

        public function dmgPercent(){
            $percentDamaged = $this->getPercentDamaged();
        
            echo "<br>Percent of boats damage today : $percentDamaged";
        }

        public function shortestRent(){
            $this->getShortestRent();
            echo "<br>Boat ".$this->boatshortestrent. " was rented for the shortest amount of time: " .$this->timerented. " hours<br>";
        }

}

?>