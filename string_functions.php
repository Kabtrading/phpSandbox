<?php
    # substr()
    # returns a portion of a string

    // $output = substr('Hello', 0, 4);
    // $output = substr('Hello', -2);
    // echo $output;

    #strlen()
    # Returns the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    # Finds the position of the first occurence of a sub string

    // $output = strpos('Hello World', 'o');
    // echo $output;

    # strrpos()
    # Finds the position of the last occurence of a sub string

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim()
    # Strips whitespace

    // $text = 'Hello World             ';
    // var_dump($text);

    // $trimmedText = trim($text);
    // var_dump($trimmedText);

    # strtoupper
    # Makes everything uppercase

    // $output = strtoupper('Hello world');
    // echo $output;

    # strtolower
    # Makes everything lowercase

    // $output = strtolower('Hello world');
    // echo $output;

    # ucwords()
    # Capitalize single words all

    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string, gives 0 or 1 (false / true)

    // $val = 'Hello';
    // $output = is_string($val);
    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, 
    // '22.4', '', ' ', 0, '0');

    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "{$value} is a string<br>";
    //     }
    // }

    # gzcompress()
    # Compress a string

    $string = 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     Integer vitae pharetra arcu. Maecenas vel nulla odio. 
     Curabitur nec faucibus elit. Ut in ligula sit amet augue
      pulvinar iaculis. In molestie felis sed mauris bibendum 
      varius. Proin posuere, augue eu ullamcorper.';

      $compressed = gzcompress($string);
    //   echo $compressed;

      $original = gzuncompress($compressed);
      echo $original;

      

?>