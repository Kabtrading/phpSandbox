<?php
    echo date('d '); // day
    echo date('m '); // month
    echo date('Y '); // Year
    echo date('1 '); // day of the week

    echo date('Y/m/d ');
    echo date('m/d/Y ');

    echo date('h '); // hour
    echo date('i '); // Min
    echo date('s '); // seconds
    echo date('a '); // AM or PM

    // Set time zone

    date_default_timezone_set('America/Vancouver');

    echo date('h:i:sa ');

    /*
        Unix timestamp is a long integer containing the number of seconds
        between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time 
        specified
    */

    $timestamp = mktime(10, 14, 54, 4, 12, 1989); 
                    // hours minutes seconds m d y

    echo $timestamp;

    // This creates a redable format date from the mktime timestamp
    echo date(' m/d/y h:i:sa <br>', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');

    echo $timestamp2;

    echo date(' m/d/Y h:i:sa', $timestamp3);

?>