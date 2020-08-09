<?php 
include('config.php');
if(isset($_GET['key'])){
    $key = $_GET['key'];
    // echo $id;
    $sql = "select * from users where firstname LIKE %".$key"%";
    $user = $conn->query($sql);
    $user->setFetchMode(PDO::FETCH_ASSOC);
    $user = $user->fetch();
    // var_dump($user);
}
?>