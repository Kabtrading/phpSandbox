<?php 
# single line
// single line
/* multi line
comment */

    #Variables
    /* 
        - Preix $
        - Start with a letter or an underscore
        - Only letters, numbers, and underscores
        - Case sensitive
    */

    # data types
    /* 
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Resource

    */

    $output = 'Hello world';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2.'!';
    $greeting2 = "$string1 $string2 !";

    $string3 = "They're Here";

    
    $float1 = 4.4;
    $bool1 = true;
                                        // true makes the constant 'greeting' non-case sensitive
    define('GREETING', 'Hello Everyone', true);

    echo GREETING;

?>