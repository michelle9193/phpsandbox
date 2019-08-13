<?php
    // Single line comment
    # Single line comment
    /* 
        Multiline comment 
    */

    #VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers and underscores
        - Case sensitive
    */

    #DATA TYPES
    /*
        - Strings
        - Integers (can be + or -)
        - Floats (decimals)
        - Booleans (true or false)
        - Arrays
        - Objects
        - Null
        - Resource 

    */

    $output = 'Hello World';

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = "World";
    $greeting = $string1 .' '. $string2;
    $greeting2 = "$string1 $string2";

    $string3 = 'They\'re Here';

    #CONSTANTS
    
    define('GREETING', 'Hello Everyone');
    
    echo GREETING;

?>