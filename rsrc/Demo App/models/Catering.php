 <?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Catering {

    // PROPERTIES
    private $customers;

    // CONSTRUCTOR
    function __construct(){
        $this->customers = [];
    }

    public function addCustomer($customer){
        array_push($this->customers, $customer);
    }

    // METHODS

    public function customerData(){
        foreach($this->customers as $customer){
            echo '<br> ';
            echo 'Name: ' . $customer->name . ' ';
            echo 'Revenue: ' . $customer->revenue() . ' Euro. ';
            echo 'Appetizers: ' . $customer->appetizers . ' ';
            echo 'Main Courses: ' . $customer->mainCourses . ' ';
            echo 'Desserts: ' . $customer->desserts . ' ';
        }
    }


    public function totalRevenue(){

        $totalRevenue = 0;

        foreach($this->customers as $customer){
            $totalRevenue += $customer->revenue();
        }

        return $totalRevenue;
    }

    public function averageRevenuePerDay(){
        //calculate averageRevanuePerDay
    }

    public function nameOfHighestPayingCustomer(){

        $highestPayingCustomer = $this->customers[0];

        foreach($this->customers as $customer){
            if($highestPayingCustomer->revenue() < $customer->revenue()){
                $highestPayingCustomer = $customer;
            }
        }

        return $highestPayingCustomer->name;
    }

    public function appetizerNoDessertCustomers(){

        $names = '';

        foreach($this->customers as $customer){
            if($customer->appetizers > 0 && $customer->desserts == 0){
                $names .= $customer->name . ' ';
            }
        }


        return $names;

    }

    public function averageRevenue(){

        $averageRevenue = $this->totalRevenue() / count($this->customers);

        return $averageRevenue;
    }

    public function showHigherThanAverageExpenseCustomersOnly(){

        $names = '';

        foreach($this->customers as $customer) {
            if($customer->revenue() > $this->averageRevenue()){
                $names .= $customer->name . ' ';
            }
        }

        return $names;
    }

}

?>
