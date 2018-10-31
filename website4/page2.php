<?php 
    session_start();

    // You can change session variables at any time like this
    $_SESSION['name'] = 'John Doe';

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Page 2php sessions</title>

</head>
<body>
    <h5>Thank you <?php echo $name; ?>, You have subscribed
    with the email <?php echo $email;?> </h5>
    <a href="page3.php">Got to page 3</a>
</body>
</html>