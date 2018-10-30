<?php 
    if(isset($_GET['name'])){
        // echo $_GET['email'];
        // echo $_GET['name'];
        // print_r($_GET);

        # htmlentities makes sure that the users input is not exe
        $name = htmlentities($_GET['name']);
        // echo $name;
    }

    // if(isset($_POST['name'])){
    //     print_r($_POST);
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // }

    #  This works wether you use GET or POST in your html
    // if(isset($_REQUEST['name'])){
    //     print_r($_REQUEST);
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }

    // echo $_SERVER['QUERY_STRING'];


   
?>

<!DOCTYPE html>
<html>
<head>

    <title>My Website</title>
   
</head>
<body>

    <form method='GET' action='get_post.php'>
        <div>
            <label>Name</label><br>
            <input type="text" name='name'>        
        </div>
        <div>
        <label>Email</label><br>
            <input type="text" name='email'> 
        </div>
        <input type="submit" value='Submit'>
    </form>
    <ul>
        <li>
            <a href='get_post.php?name=Drew'>Drew</a>
        </li
    ></ul>
    <ul>
        <li>
            <a href='get_post.php?name=Steve'>Steve</a>
        </li>
    </ul>
    <h1>
        <?php echo "{$name}'s Profile"; ?>
    </h1>
</body>
</html>