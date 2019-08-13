<?php

    #LOOPS - Executes code set number of times

    /*
        - for
        - while
        - do.. while
        - foreach
    */

    # For Loop
    # @params - init, condition, increment

    /*
    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo '<br>';
    }
    */

    # While
    # @params - condition

    /*
    $i = 0;
    
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }
    */

    # Do.. while
    # @params  - condition

    /*
    $i = 0;

    do{
        echo $i;
        echo '<br>';
        $i++;
    }

    while($i < 100);
    */

    # Foreach - For arrays
    /*
    $people = array('Brad', 'Jose', 'William');

    foreach($people as $person){
        echo $person;
        echo '<br>';
    }
    */

  
    // Looping through an associative array
    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

    foreach($people as $person => $email){
        echo $person. ': '.$email;
        echo '<br>';
    }

?>