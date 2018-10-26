<?php 
    # Array - Variable that holds mutiple values
    /* 
        - Indexed
        - Associative
        - Multi-dimensional
    */

    //Indexed
    $people1 = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23 , 55, 10, 40);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    //echo count($cars);
    //print_r($cars);
    //var_dump($people1);

    //echo $people[3];
    //echo $ids[2];
    //echo $cars[1], $cars[3], $cars[4];


    // Associative arrays

    $people = array('Drew' => 35, 'Jose' => 32, 'William' => 37);
    $ids = [22 => 'Drew', 44 => 'Jose', 63 => 'William'];

    //echo $people['Drew'];
    //echo $ids[22];
    $people['Jill'] = 42;
    //echo $people['Jill'];
    //print_r($people);
    //var_dump($people);

    
    // Multi-Dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Ford', 23, 12),
        array('mazda', 30, 9),
    );

    echo $cars[2][2];

?>