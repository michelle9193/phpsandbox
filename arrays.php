<?php
    #ARRAYS - Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Kevin', 'Jenny', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    //echo count($cars);
    //print_r($cars);
    //var_dump($cars);

    //echo $people[1];
    //echo $ids[2];
    //echo $cars[4];

    // Associative 
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    //echo $people['Brad'];
    //echo $ids[22];
    $people['Jill'] = 42;
    //echo $people['Jill'];
    //print_r($people);
    //var_dump($people);

    // Multi-Dimensional (an array within an array)
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12),
    );

    echo $cars[1][2];

?>