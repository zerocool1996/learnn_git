<?php
    include('config.php');
    $sql = 'select * from users';
    $sth = $conn->query($sql);
    $sth->setFetchMode(PDO::FETCH_ASSOC);

?>
<form action="search.php" method="GET">
    <input type="text" placeholder="search..." name="key">
    <button type="submit">search</button>
</form>
<table>
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>edit</th>
        <th>delete</th>
    </tr>

    <?php while($rows = $sth->fetch()){ ?>
    <tr>
        <td><?php echo $rows['firstname'] ?></td>
        <td><?php echo $rows['lastname'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><a href="edit.php?id=<?php echo $rows['id'] ?>">edit</a></td>
        <td><a href="delete.php?id=<?php echo $rows['id'] ?>">delete</a></td>
    </tr>
    <?php } ?>

</table>

