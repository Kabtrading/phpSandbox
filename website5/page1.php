


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="name" placeholder="enter name"><br>
        <input type="text" name="email" placeholder="enter email"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>

</body>
</html>