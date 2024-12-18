<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script> alert('PLEASE LOGIN FIRST!');window.location.replace('../login/form_login230018.php');</script>";
}
if($_SESSION['userType'] != 'Manager') {
    echo "<script> alert('ACCESS FORBIDDEN!');window.location.replace('../index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1>
    <h3>User List</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan="3">Action</th>
        </tr>
        <?php
        include "../connection_230018.php";            //call connection
        $query = "SELECT * FROM user_230018";       //make sql query
        $user = mysqli_query($db_connection, $query); //run query

        $i=1; //initial cointer for numbering
        foreach ($user as $data) : //loop for extract data from database
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['userName_230018']; ?></td>
            <td><?= $data['userType_230018']; ?></td>
            <td><?= $data['fullname_230018']; ?></td>
            <td><a href="edit_user230018.php?id=<?=$data['userId_230018']?> ">Edit User</a></td>
            <td><a href="delete_user230018.php?id=<?=$data['userId_230018']?>" onclick= "return confirm('Are you sure?')">Delete User</a></td>
            <td><a href="reset_user230018.php?id=<?=$data['userId_230018'];?>&type=<?=$data['userType_230018'];?>" 
            onclick= "return confirm('Are you sure?')">Reset Password</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <ul>
        <a href="../index.php"> << Back Home</a>
        <a href="add_user230018.php">Add New User >></a>
    </ul>
</body>
</html> 