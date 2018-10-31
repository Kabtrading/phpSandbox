<?php 
// People Array
$people[] = 'Steve'; 
$people[] = 'John'; 
$people[] = 'Kathy'; 
$people[] = 'Eric'; 
$people[] = 'Evan'; 
$people[] = 'Anthony'; 
$people[] = 'Drew'; 
$people[] = 'Shayla'; 
$people[] = 'Haden'; 
$people[] = 'Kyle'; 
$people[] = 'Kendra'; 
$people[] = 'Alex'; 
$people[] = 'Connor'; 
$people[] = 'Becca'; 
$people[] = 'Gab'; 
$people[] = 'Byron'; 
$people[] = 'Shauleen'; 
$people[] = 'Derek'; 
$people[] = 'Amanda'; 
$people[] = 'Una'; 
$people[] = 'Kevin'; 
$people[] = 'Karen'; 
$people[] = 'Dusty'; 
$people[] = 'Jen'; 
$people[] = 'Ralph'; 

// Get query string

$q = $_REQUEST['q'];

$suggestion = '';

// Get suggestions
if($q !== ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ''){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;

?>