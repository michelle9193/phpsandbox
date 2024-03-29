<?php
    #FUNCITON - Block of code that can be repeatedly called

    /*
        - Camel case: myFunction())
        - Lower case: my_Function()
        - Pascal case: MyFunction()
    */

    // Create simpleFunction

    /*
    function simpleFunction(){
        echo 'Hello World';
    }
   
    // Run simpeFunction
    simpleFunction();
     

    // Function with Param
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }
    */

    //sayHello('Joe');
    //sayHello();

    // Return value
    /*
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }
    echo addNumbers(2,3);
    */

    // By reference
    $myNum = 10;

    function addFive($num){
        $num += 5; // $num = $num +
    }

    function addTen(&$num){
        $num =+ 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";
?>