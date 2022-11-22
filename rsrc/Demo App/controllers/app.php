<?php
    // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.

    // INSTANTIATE NEW ADMINISTRATION.
    $catering = new Catering();

    // CREATE A NEW CATERING PERIOD.
   // $catering = new Catering("01-05-2022", "03-05-2022");

    // CREATE A NEW CUSTOMER
    $tomi = new Customer("Tomi");

    // CUSTOMER EATS A TON OF MEALS.
    $tomi->addMeal("APPETIZER");
    $tomi->addMeal("MAIN COURSE");
    $tomi->addMeal("MAIN COURSE");
    $tomi->addMeal("MAIN COURSE");
    $tomi->addMeal("MAIN COURSE");

    //CREATE A SECOND CUSTOMER
    $bato = new Customer("Bato");

    // CUSTOMER ATE A BUNCH OF DESSERTS.
    $bato->addMeal("APPETIZER");
    $bato->addMeal("MAIN COURSE");
    $bato->addMeal("MAIN COURSE");

    //CREATE A SECOND CUSTOMER
    $renda = new Customer("Renda");

    // CUSTOMER ATE A BUNCH OF DESSERTS.
    $renda->addMeal("DESSERT");
    $renda->addMeal("DESSERT");
    $renda->addMeal("DESSERT");
    $renda->addMeal("DESSERT");
    $renda->addMeal("DESSERT");

    // ADD CUSTOMERS TO CATERING
    $catering->addCustomer($tomi);
    $catering->addCustomer($bato);
    $catering->addCustomer($renda);

    // SHOW CUSTOMER DATA.
    echo '<br> CUSTOMER DATA';
    $catering->customerData();

    // ALL OF THE REQUIRED FUNCTIONALITIES.
    // 1. CALCULATES THE TOTAL REVENUE OF THE CATERING SERVICE.
    echo '<br> The total revenue is: ' . $catering->totalRevenue() . ' Euro.';
    // 2. CALCULATES THE AVERAGE REVENUE OF THE CATERING SERVICE.
    echo '<br> The average revenue per day is: ' . $catering->averageRevenue() . ' Euro.';
    // 3. SHOWS THE NAME OF THE HIGHEST PAYING CUSTOMER
    echo '<br> The name of the highest paying customer is: ' . $catering->nameOfHighestPayingCustomer();
    //4. SHOWS CUSTOMER THAT SPENT MORE MONEY THAN THE AVERAGE CUSTOMER.
    echo '<br> The higher than average paying customers are: ' . $catering->showHigherThanAverageExpenseCustomersOnly();
    //5. SHOWS CUSTOMERS THAT ONLY HAD AN APPETIZER AND NO DESSERTS.
    echo '<br> The customers that only consumed a appetizer are: ' . $catering->appetizerNoDessertCustomers();

?>
