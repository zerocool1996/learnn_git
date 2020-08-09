<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // setcookie('user', 'hung', time()-3600);
        // $value = $_COOKIE['user'];
        // echo var_dump($_COOKIE);
        // session_start();
        // $_SESSION['favorite_color'] = 'black';
        // $color = $_SESSION['favorite_color'];
        // echo $color,'<br>';
        // unset($_SESSION['favorite_color']);
        // echo isset($_SESSION['favorite_color']) ? $_SESSION['favorite_color'] : "Session da bi xoa !";
        // session_unset();
        $users = [
            ['username' =>'trung'   , 'password' => '123'],
            ['username' =>'nghia'   , 'password' => '456'],
            ['username' =>'nam'     , 'password' => '178']
        ];
        session_start();
        if(isset($_SESSION['username'])){
            header('Location: index.php');
        }
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            foreach($users as $user){
                if($user['username'] == $username && $user['password'] == $password){
                    setcookie('username', $username, time()+60);
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
            }
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="loginForm" onsubmit="return validateForm();">
        <input type="text" name="username"  placeholder="username">
        <input type="text" name="password"  placeholder="password">
        <button type="submit" name="submit">Submit</button>
    </form>
    <script>
        function validateForm(){
            var username = document.forms['loginForm']['username'].value;
            var password = document.forms['loginForm']['password'].value;
            if(username == "" || password == ""){
                alert('username and password are required');
                return false;
            }
        }
    </script>
</body>
</html>