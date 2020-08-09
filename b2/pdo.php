<?php 

class user{
    public $email;
    public $isAdmin = false;

    function __construct()
    {
        if($this->email ==='admin@kaopiz.com'){
            $this->isAdmin = true;
        }
    }
}

$servername = "localhost";
$username   = "root";
$password   = "";
try{
    $conn = new PDO("mysql:host=$servername; dbname=mydbpdo", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql = "create database myDBPDO";
    // $sql = "create table MyGuests(
    //     id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname  VARCHAR(20) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP
    // )";
    //  $stmt = $conn->prepare("insert into users (firstname, lastname) values(?, ?)");
    // $stmt->bindParam(1, $firstname);
    // $stmt->bindParam(2, $lastname);
    // $firstname = 'nghia';
    // $lastname  = 'tran trong';
    // $stmt->execute();
    // echo 'hahahaaaahahahahah';
    //$conn->exec($sql);
    //echo "Data base create successfully";
    //echo "create table success !";
    // $sql = 'select * from users';
    // $sth = $conn->query($sql);
    // $sth->setFetchMode(PDO::FETCH_ASSOC);
    
    // while($rows = $sth->fetch()){
    //     echo 'Full name: ' . $rows['firstname'] .' '. $rows['lastname'] . '<br>';
    // }
    $stmt = $conn->prepare("select * from users where firstname = :firstname");
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'user');
    $x = $stmt->execute(array('firstname' => 'nghia'));
    //var_dump($x);
    while($obj = $stmt->fetch()){
        echo $obj->firstname.' '.(int)$obj->isAdmin.'<br>';
    }
}catch(PDOException $e){
     echo  '<br>'. $e->getMessage();
}
// $conn = null;