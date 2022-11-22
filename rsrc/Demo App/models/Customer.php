 <?php

Class Customer {

    // PROPERTIES
    public  $name;
    public $appetizers;
    public $mainCourses;
    public $desserts;
    public $meals;

    CONST APPETIZER_COST = 3;
    CONST MAIN_COURSE_COST = 5;
    CONST DESSERT_COST = 2;

    // CONSTRUCTOR
    function __construct($name){
        $this->name = $name;
        $this->appetizers = 0;
        $this->mainCourses = 0;
        $this->desserts = 0;
        $this->meals = 0;
    }

    public function addMeal($meal){

        switch ($meal) {
            case 'APPETIZER':
                $this->appetizers +=1;
                break;
            case 'MAIN COURSE':
                $this->mainCourses +=1;
                break;
            case 'DESSERT':
                $this->desserts +=1;
                break;
        }

        // INCREMENT MEALS BY 1.
        $this->meals +=1;
    }

    // METHODS
    public function revenue(){

        $revenue = 0;

        $revenue += $this->appetizers * self::APPETIZER_COST;
        $revenue += $this->mainCourses * self::MAIN_COURSE_COST;
        $revenue += $this->desserts * self::DESSERT_COST;

        return $revenue;
    }

}

?>
