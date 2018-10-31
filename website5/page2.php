<?php 
    setcookie('username', 'Frank', time() + (86400 * 30));

    // Delete Cookie
    setcookie('username', 'Frank', time() - 3600);

    if(count($_COOKIE) > 0){
        echo 'There are '.count($_COOKIE). ' cookies saved';
    } else {
        echo 'there are no cookies saved<br>';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . 'is set<br>';
    } else {
        echo 'User is not set';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>