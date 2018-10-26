<?php 
    # Function - Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        pascal Case - MyFunction()
    */
    // Create a simple function
    function simpleFunction(){
        echo 'Hello World';
    }

    // Run a simple function, can include args / params
    // simpleFunction();

    // Function with argunment
    function sayHello($name){
        echo 'Hello '. $name;
    }

    // sayHello('Drew'. ' Beaupre');
    
    // Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // echo addNumbers(2,3);

    // passing arguments by reference

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";
    
    






?>