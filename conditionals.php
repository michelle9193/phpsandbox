<?php
    #CONDITIONALS

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    /*
        $num = 4;

        if($num == 5){
            echo '5 passed';
        } elseif($num == 6) {
            echo '6 passed';
        } else {
            echo 'Did not pass';
        }
    */

    #NESTING IF
    
    $num = 7;

    /*
    if($num > 4){
        if($num < 10){
            echo "$num passed";
        }
    }
    */
    /*
        LOGICAL OPERATORS

        and &&
        or ||
        xor - one has to be true and not both
    */

    /*
    if($num > 4 XOR $num < 10){
        echo "$num passed";
    }
    */

    #SWITCH
    $favColor = 'purple';

    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        default:
            echo 'Your favorite color is something else';
    }

?>