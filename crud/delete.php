<?php
    include('config.php');
    if(isset($_GET['id'])){
        // $id = $_GET['id'];
        $stmt = $conn->prepare("delete from users where id = ?");
        $stmt->bindParam(1, $id);

        $id = $_GET['id'];
        $stmt->execute();
        echo 'delete thanh cong';
    }
    ?>
    <a href="index.php">quay lai index</a>