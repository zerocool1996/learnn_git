<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    
    <a href="logout.php">Logout</a>
</br>
    <?php 
    if(isset($_SESSION['username'])){
        echo 'hello : '. $_SESSION['username'];
    }else{
        header('Location:test.php');
    }
    ?> 
    
</body>
</html>