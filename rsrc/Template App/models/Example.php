 <?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Example {

    // PROPERTIES
    public $property;

    // CONSTRUCTOR
    function __construct(){

    }

    // METHODS
    public function addSomething($data){
        echo "We're adding " . $data;
        echo "<br/> <br/>";
    }

    public function doSomething(){
        echo "We're doing something!";
        echo "<br/> <br/>";
    }

    public function showSomething(){
        echo "We're showing something!";
        echo "<br/> <br/>";
    }

}

?>
