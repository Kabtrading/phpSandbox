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

    sayHello('Drew'. ' Beaupre');
    






?>