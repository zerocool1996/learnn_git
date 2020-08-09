<?php
    include('config.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // echo $id;
        $sql = "select * from users where id= $id";
        $user = $conn->query($sql);
        $user->setFetchMode(PDO::FETCH_ASSOC);
        $user = $user->fetch();
        // var_dump($user);
    }
    if(isset($_POST['submit'])){
        $stmt = $conn->prepare("update users set firstname= ? , lastname = ?, email= ? where id = ?");
        $stmt->bindParam(1, $firstname);
        $stmt->bindParam(2, $lastname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $id);
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        $stmt->execute();
        $sql = "select * from users where id= $id";
        $user = $conn->query($sql);
        $user->setFetchMode(PDO::FETCH_ASSOC);
        $user = $user->fetch();
        echo 'update thanh cong';
    }
   // var_dump($user);
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="hidden" name="id" value="<?php echo $user['id'] ?>"
    <p>First name</p>
    <input type="text" name="firstname" value="<?php echo $user['firstname'] ?>" required>
    <p>Last name</p>
    <input type="text" name="lastname" value="<?php echo $user['lastname'] ?>" required>
    <p>Email</p>
    <input type="email" name="email" value="<?php echo $user['email'] ?>" required><br>
    <button type="submit" name="submit">Submit</button>
</form>
<a href="index.php">back</a>