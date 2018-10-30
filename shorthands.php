<?php 
    $loggedIn = false;
    $arr = [1,2,3,4,5,5,4,5,6];

    // if($loggedIn){
    //     echo 'You are logged in';
    // } else {
    //     echo 'You are not logged in';
    // }

    # this one line does the same thing as all 5 lines above
    # using the turnary true false
    // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

    // $isRegistered = ($loggedIn == true) ? true : false;
    // echo $isRegistered;

    // $age = 10;
    // $score =20;

    // echo 'your score is: '.($score > 10 ? ($age > 10 ? 'Average':
    // 'Exceptional'):($age > 10 ? 'Horrible': 'average'));

    
?>

<div>
<?php if($loggedIn) {?>
    <h1>Welcome User</h1>
<?php } else { ?>
    <h1>Welcome Guest</h1>
<?php } ?>
</div>

<div>
<?php if($loggedIn): ?>
    <h1>Welcome User</h1>
<?php else: ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>
<div>
    <?php for($i = 0;$i < 10;$i++): ?>
       <li> <?php echo $i; ?></li>
    <?php endfor; ?>
</div>