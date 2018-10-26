<?php 
    # LOOPS - Execute code set number of times

    /*
        For
        While
        Do..While
        Foreach

    */

    # For Loop
    # @params - init, condition, increment

    for($i = 5; $i <= 10; $i++) {
        echo '<br>';
        echo 'Number ' .$i;
       
    }

    # While Loop
    # @params - condition

    $i = 0;

    while($i < 10){
        echo '<br>';
        echo $i;
        
        $i++;
    }


    # Do...While
    # @params - condition

    $i = 0;

    do{

        echo '<br>';
        echo $i;
        
        $i++;
    }
    while($i < 10);

    #foreach loop - for arrays

    $people = array('Brad', 'Jose', 'William');

    foreach($people as $person){
        echo '<br>';
        echo $person;

    };

    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

    foreach($people as $person => $email){
        echo '<br>';
        echo $person.': '.$email;

    };

    

?>