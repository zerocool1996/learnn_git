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
        // $users = [
        //     ['username' =>'trung'   , 'password' => '123'],
        //     ['username' =>'nghia'   , 'password' => '456'],
        //     ['username' =>'nam'     , 'password' => '178']
        // ];
        // session_start();
        // if(isset($_SESSION['username'])){
        //     header('Location: index.php');
        // }
        if(isset($_POST['submit'])) {
            $ngay = $_POST['ngay'];
            switch($ngay){
                case '0':
                    echo 'ngay thu hai';
                    break;
                case 1:
                    echo 'ngay thu ba';
                    break;
                case 2:
                    echo 'ngay thu tu';
                    break;
                case 3:
                    echo 'ngay thu nam';
                    break;
                case 4:
                    echo 'ngay thu sau';
                    break;
                case 5:
                    echo 'ngay thu bay';
                    break;
                case 6:
                    echo 'ngay chu nhat';
                    break;
                default:
                    echo 'nhap sai';
            }
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="loginForm" onsubmit="return validateForm();">
        <input type="text" name="ngay"  placeholder="nhap ngay">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>