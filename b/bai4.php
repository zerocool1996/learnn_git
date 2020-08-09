<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        if(isset($_POST['submit'])) {
            $dien = $_POST['dien'];
            $gia = 0;
            if($dien <= 100 && $dien > 0){
                $gia = $dien*450;
            }elseif($dien < 201){
                $gia = 100*450 + ($dien-100)*600 ;
            }elseif( $dien < 301){
                $gia = 100*450 + 100*600 + ($dien%200)*750;
            }elseif($dien < 501){
                $gia = 100*450 + 100*600 +100*750 + ($dien%300)*900;
            }elseif( $dien < 1001){
                $gia = 100*450 + 100*600 +100*750 +200*900 + ($dien%500)*1000;
            }elseif($dien > 1000 ){
                $gia = 100*450 + 100*600 +100*750 +200*900 + 500*1000 + ($dien-1000)*1200;
            }
            echo "gia tien dien truoc thue la: $gia<br>";
            echo "gia tien dien sau thue la: ".$gia*1.1;
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="loginForm" onsubmit="return validateForm();">
        <input type="number" name="dien"  placeholder="nhap tien dien">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>