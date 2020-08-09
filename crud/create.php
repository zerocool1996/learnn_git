<?php 
include('config.php');
if(isset($_POST['submit'])){
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    // $email = $_POST['email'];
    $stmt = $conn->prepare("insert into users (firstname, lastname, email) values(?, ?, ?)");
    $stmt->bindParam(1, $firstname);
    $stmt->bindParam(2, $lastname);
    $stmt->bindParam(3, $email);
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email = $_POST['email'];
    $stmt->execute();
    echo "thanh cong !";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <p>First name</p>
    <input type="text" name="firstname" required>
    <p>Last name</p>
    <input type="text" name="lastname" required>
    <p>Email</p>
    <input type="email" name="email" required><br>
    <button type="submit" name="submit">Submit</button>
</form>

<a href="index.php">back</a>
<h1>Test pull nahnh khac</h1>
